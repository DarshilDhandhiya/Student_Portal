<?php
	require "../db_connect.php";
	require "../message_display.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

<html>
	<head>
		<title>LMS</title>
		<link rel="stylesheet" type="text/css" href="../css/global_styles.css" />
		<link rel="stylesheet" type="text/css" href="../css/form_styles.css" />
		<link rel="stylesheet" href="css/insert_book_style.css">
	</head>
	<body>
		<form class="cd-form" method="POST" action="#"enctype="multipart/form-data">
			<center><legend>Add New Book Details</legend></center>
			
				<div class="error-message" id="error-message">
					<p id="error"></p>
				</div>
				
				<div class="icon">
					<input class="b-isbn" id="b_isbn" type="number" name="b_isbn" placeholder="ISBN" required />
				</div>
				
				<div class="icon">
					<input class="b-title" type="text" name="b_title" placeholder="Book Title" required />
				</div>
				
				<div class="icon">
					<input class="b-author" type="text" name="b_author" placeholder="Author Name" required />
				</div>
				
				<div>
				<h4>Category</h4>
				
					<p class="cd-select icon">
						<select class="b-category" name="b_category">
							<option>Computer</option>
							<option>Mechanical</option>
							<option>Civil</option>
							<option>Electrical</option>
						</select>
					</p>
				</div>
				
				
				<div class="icon">
				<input id="file-upload" type="file" name="file">
				</div>
				<br />
				<input class="b-isbn" type="submit" name="b_add" value="Add book" />
		</form>
	<body>
	
	<?php
		if(isset($_POST['b_add']))
		{
			$isbn = $_POST['b_isbn'];
			$title = $_POST['b_title'];
			$author = $_POST['b_author'];
			$category = $_POST['b_category'];
			$sql = "select * from book where isbn = $isbn";  
			$result = mysqli_query($con, $sql);  
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
			
			$count = mysqli_num_rows($result);
	if($count == 1){
				echo error_with_field("A book with that ISBN already exists", "b_isbn");
					}
			else
			{

$targetDir = "../../../Photos/Library/".$category."/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["b_add"]) && !empty($_FILES["file"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf','PNG');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

				$sql = "INSERT INTO book(author, isbn, category, title, photo) VALUES('$author','$isbn','$category','$title','$fileName')";
				$result = mysqli_query($con, $sql); 
			}
		
				if(!(($result)==1))
			{
					die(error_without_field("ERROR: Couldn't add book"));
			}
				else
				{
				echo success("New book record has been added");
				}
			}
}
}
}
	?>
</html>