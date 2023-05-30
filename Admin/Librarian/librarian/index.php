<?php
	require "../db_connect.php";
	require "../message_display.php";
	require "../verify_logged_out.php";
	require "../header.php";
?>

<html>
	<head>
		<title>LMS</title>
		<link rel="stylesheet" type="text/css" href="../css/global_styles.css">
		<link rel="stylesheet" type="text/css" href="../css/form_styles.css">
		<link rel="stylesheet" type="text/css" href="css/index_style.css">
	</head>
	<body>
		<form class="cd-form" method="POST" action="#">
		
		<center><legend>Librarian Login</legend></center>

			<div class="error-message" id="error-message">
				<p id="error"></p>
			</div>
			
			<div class="icon">
				<input class="l-user" type="text" name="email" placeholder="Username" required />
			</div>
			
			<div class="icon">
				<input class="l-pass" type="password" name="password" placeholder="Password" required />
			</div>
			
			<input type="submit" value="Login" name="l_login"/>

			
			
		</form>
		<p align="center"><a href="../index.php" style="text-decoration:none;">Go Back</a>
	</body>
	
	<?php
		if(isset($_POST['l_login']))
{
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
				$_SESSION['type'] = "librarian";
				$_SESSION['id'] = $row['id'];
				$_SESSION['email'] = $row['email'];
				header('Location: home.php');
        }  
        else
		{
                    $_SESSION["error"] = $error;
					header("location: ../../Admin_Login.php"); 
        }
}
    ?>
	
</html>