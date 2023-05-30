<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../Photos/Logo.png" type="image/icon type">
  <title>Admin Scheduling</title>

  <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../css/font-awesome.min.css"/>
  <link rel="stylesheet" href="../css/owl.carousel.css"/>
  <link rel="stylesheet" href="../css/Student_Categories.css">
  <link rel="stylesheet" href="../css/Faculty_Upload.css">
</head>
<body>

<div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
    <div class="container">
      <div class="row">
      <div class="col-lg-3 col-md-3" style="left:-325px;top:-10px">
				    <a href="../index.php">
							<img src="../Photos/Logo.png" width="105px" height="100px">
						</a>
            <div class="site-logo"></div>
          <div class="nav-switch">
            <i class="fa fa-bars"></i>
          </div>
        </div>
          <div class="col-lg-9 col-md-9">	
            <nav class="main-menu">
              <ul style="float:left;margin-left:-50px;">
                <li><a href="../About.html">About us</a></li>
                <li><a href="../Contact.html">Contact</a></li>
                <li><a href="./Librarian/librarian/home.php">Library</a></li>
                <li><a href="Admin_News.php">News</a></li>
                <li><a href="Admin_Scheduling.php">Scheduling</a></li>
				        <li><a href="Admin_Home.php">Home</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="header-section-line"></div>
    </header><br><br><br><br><br><br>
    <!-- Header section end -->

<!-- Upload  -->
<h2>Scheduling Upload</h2><br><br>
<form id="file-upload-form" class="uploader" action="../Student/AScheduling.php" method="post" enctype="multipart/form-data">
  <input id="file-upload" type="file" name="file">

  <label for="file-upload" id="file-drag">
    <img id="file-image" src="#" alt="Preview" class="hidden">
    <div id="start">
      <i class="fa fa-download" aria-hidden="true"></i>
      <div>Select a file or drag here</div>
      <div id="notimage" class="hidden">Please select an image</div>
      <span id="file-upload-btn" class="btn btn-primary">Select a file</span> <br>
    </div>
    <div id="response" class="hidden">
      <div id="messages"></div>
    </div><br><br>

    <label for="desc">
    <textarea name="descc" id="descc" rows=4 cols=50 placeholder="Add Description" required></textarea></label> 
    
    <label for="desc">
    <textarea name="link" id="descc" rows=4 cols=50 placeholder="Attach a Link"></textarea></label>

  <div id="messages">
	  <?php 
	    if(isset($_SESSION["statusMsg"]))
      {
		    echo $_SESSION['statusMsg'];
	    }
	  ?>
	</div>

		<br>
    <input type="submit" name="submit" value="Upload">
  </label>
  
</form>
</body>
</html>
<?php 
  unset($_SESSION["statusMsg"]);
?>
<!--====== Javascripts & Jquery ======-->
<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/main.js"></script>
  <script src="../js/Faculty_Upload.js"></script>