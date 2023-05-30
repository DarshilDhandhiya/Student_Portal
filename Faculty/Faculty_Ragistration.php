<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Faculty Ragistration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Student_Ragistration.css">
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
        <div class="Login">
            Already Have An Account <a href="Faculty_Login.php">Login.</a><br><br>
            Goto <a href="../index.php">Home</a> Page ?
        </div><br><br>
            <form action="Ragistration.php" method="POST" enctype="multipart/form-data">
                    
                    <input type="text" name="FirstName" placeholder="First Name" required />

                    <input type="text" name="lastName" placeholder="Last Name" required/>

                    <input type="email" name="email" placeholder="Email" required>

                    <input type="password" name="password" placeholder="Password" id="password" class="form-control passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>

                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control passwordInput" required/><br>
					 
                    <br> Upload Your Profile Photo <br><br>
                    <input type="File" name="file" required> 
					<input class="button" type="submit" name="submit" value="Register">
            </form>
            <script>
                var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");
                function validatePassword()
                {
                    if(password.value != confirm_password.value)
                    {
                        confirm_password.setCustomValidity("Passwords Don't Match");
                    }
                    else
                    {
                        confirm_password.setCustomValidity('');
                    }
                }
                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
            </script>
    </div>

</body>
</html>