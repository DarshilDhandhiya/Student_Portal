<?php
session_start();
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "studentdb";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$statusMsg = '';
$today = date("d-m-Y");
// File upload path
$targetDir = "../Photos/Uploads/News/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$descc = $_POST['descc'];
$link = $_POST['link'];

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf','PNG');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

		$sql = "INSERT into News (file_name, uploaded_on, descc, link) VALUES ('$fileName','$today','$descc', '$link')";
		$result = mysqli_query($db, $sql) or mysqli_error($db);
		}
	if($result)
    {
		echo mysqli_error($db);
       $_SESSION['statusMsg'] = "The file ".$fileName. " has been uploaded successfully.";
	   header("location: ../Admin/Admin_News.php");
    }
	else
	{
		echo mysqli_error($db);
		$_SESSION['statusMsg'] = mysqli_error($db);
		header("location: ../Faculty/Faculty_News.php");
	}
}
}
echo $statusMsg;
?>