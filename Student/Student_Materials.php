<?php
$con=mysqli_connect("localhost","root","","studentdb");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../Photos/Logo.png" type="image/icon type">
  <title>Material</title>

  <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../css/font-awesome.min.css"/>
  <link rel="stylesheet" href="../css/owl.carousel.css"/>
  <link rel="stylesheet" href="../css/Student_Categories.css">
  <link rel="stylesheet" href="../css/Student_Materials.css">
  
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
              <ul style="float:left;margin-left:-100px;">
			  <?php if (isset($_SESSION['id'])) { 
					$id = $_SESSION['id'];
                    $sql ="select * from student_ragistration where id = $id";
                    $result = mysqli_query($con, $sql);  
					$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<?php }?>
              <li><a href="../About.php">About us</a></li>
							<li><a href="../Contact.php">Contact</a></li>
              <li><a href="Student_Library.php">Library</a></li>
              <li><a href="Student_News.php">News</a></li>
							<li><a href="Student_Result.php">Result</a></li>
							<li><a href="Student_Scheduling.php">Scheduling</a></li>
							<li><a href="Student_Materials.php">Materials</a></li>
              </ul>
            </nav>
        </div>
      </div>
    </div>
    <div class="header-section-line"></div>
      <ul><a href="Student_Home.php" ><img src="<?php echo $row['profile_photo']; ?>" style="margin-left:90%;margin-top:-165px;width:100px;height:100px;"></ul></a></li>
  </header><br><br><br><br><br><br><br>

    <!-- Header section end -->
<div class="zoom"></div>
<center>
<h2>All Materials</h2><br>
<section class="cards-wrapper">
    <?php

        $dbHost     = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName     = "studentdb";

        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        $records = mysqli_query($db,"SELECT * FROM material ORDER BY id DESC;");
        while($data = mysqli_fetch_array($records))
        {
			$imageURL = '../Photos/Uploads/Material/'.$data['file_name']; 
			$id = $data['id'];
			$link = $data['link'];

    ?>
   
   <div class="container">
        <div class="row" style="padding:10px;">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
						 <?php 
                        if($data['file_name']){ ?>
                        <div class="btn" style="float:left;">
                                <a href="<?php echo "../Photos/Uploads/Material/".$data['file_name'] ?>" class="btn btn-danger" download>Attachments</a>
                                
                            </div> 
                            <?php } ?>
                            <a href="<?php echo $data['link']; ?>" style="color:#d82a4e; ">
                            <?php  echo $data['link']; ?>
                            </a>
							<p class="card-text" style="float:right;">
                                <?php echo $data['uploaded_on'] ?>
                            </p>
                        </h5>
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    ?>
    <?php mysqli_close($db);  // close connection ?>
	</section>
</center>


  <!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>