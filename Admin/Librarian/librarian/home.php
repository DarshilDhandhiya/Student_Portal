<?php
	require "../db_connect.php";
	require "verify_librarian.php";
	require "header_librarian.php";
	
	if(isset($_SESSION['id']))
	{
?>

<html>
	<head>
		<title>LMS</title>
		<link rel="stylesheet" type="text/css" href="css/Admin_Library.css" />
	</head>
	<body>
		 <div id="allTheThings">
			
      <a href="insert_book.php">
				<input type="button" value="Insert New Book Record" />
			</a><br/>

			<a href="display_books.php">
				<input type="button" value="Display Available Books" />
			</a><br/>

			<a href="delete_book.php">
				<input type="button" value="Delete Book Records" />
			</a><br/>

		</div>
	</body>
</html>
	<?php } 
	
	else
	{
		header('location: ../../Admin_Login.php');
	}
	?>