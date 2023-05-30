<?php 
	$db = mysqli_connect('localhost', 'root', '', 'studentdb');
	
$targetDir = "../Photos/Student_Profile_Photos/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['lastName'];
    $email = $_POST['email'];
    $Enrollment = $_POST['Enrollment'];
    $password = $_POST['password'];
    $Branch = $_POST['Branch'];


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf','PNG');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

		$result = mysqli_query($db, "INSERT INTO `Student_Ragistration`(`FirstName`, `lastName`, `email`, `Enrollment`, `password`, `Branch`, `profile_photo`) VALUES ('$FirstName','$LastName','$email','$Enrollment','$password','$Branch','$targetFilePath')") or mysqli_error($db);
		}
	if($result)
    {
       header('location:Student_Login.php');
    }
}
}
?>