<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Faculty Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Student_login.css">
    <link rel="icon" href="../Photos/Logo.png" type="image/icon type">
</head>
<body>
    <div class="container row login-box">
        <div class="col login-title">
            <h1>
                “One day, all your hard work will pay off.”
            </h1>
            <span class="small-text">Let's get started!</span>
        </div>
        <div class="col login-form">
            <div class="avatar">
        </div>
        <div class="registration">
            Need an Account? <a href="Faculty_Ragistration.php">Ragistration.</a><br><br>
            Goto <a href="../index.php">Home</a> Page ?
        </div>
            <form action="Login.php" method="POST">
              
                  <input id="login" type="text" name="email" placeholder="Email" required/>

                  <input id="passwd" type="password" name="password" placeholder="Password" required/>
                
                  <button class="button" type="submit">Let Me In</button>
				  <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
            </form>
        <div class="lost-passwd">
            <a href="#">Forgot your password?</a>
        </div>
        </div>
    </div>

</body>
</html>
<?php
    unset($_SESSION["error"]);
?>