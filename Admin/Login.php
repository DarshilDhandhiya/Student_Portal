<?php
session_start();
    $con=mysqli_connect("localhost","root","","studentdb");
    $email = $_POST['email'];
    $password = $_POST['password'];
	$error = "Email/Password Is Incorrect";
      
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from admin where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location: Admin_Home.php');
			$_SESSION['id'] = $row['id'];
        }  
        else
		{
                    $_SESSION["error"] = $error;
					header("location: Admin_Login.php"); 
        }
    ?>