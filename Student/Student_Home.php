<?php
$con=mysqli_connect("localhost","root","","studentdb");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Home</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../Photos/Logo.png" type="image/icon type">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/Student_Home.css"/>
	<style>
.main-menu img {
    position: relative;
    top: -15px;
    height: 50px;
    width: 50px;
    background: rgba(255,255,255, 0.8);
    border-radius: 50%;
}
	</style>
</head>
<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3" style="left:-325px;top:-40px">
				<a href="../index.php">
							<img src="../Photos/Logo.png">
						</a>
					<div class="site-logo"></div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<nav class="main-menu">
						<ul style="float:left;margin-left:-180px;">
						<?php if (isset($_SESSION['id'])) { 
					$id = $_SESSION['id'];
                    $sql ="select * from student_ragistration where id = $id";
                    $result = mysqli_query($con, $sql);  
					$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
                  <li><a href="" ><img src="<?php echo $row['profile_photo']; ?>" style="left:350px;top:-40px;width:100px;height:100px;"></li></a></li><li><a href="logout.php"> Logout</a></li>

                   <?php }else{ ?>
						<li><a href="Faculty_Ragistration.php">Register</a></li>
						<li><a href="Faculty_Login.php">Login</a></li>
                <?php } ?>
						<li><a href="../Contact.php">Contact</a></li>
						<li><a href="../About.php">About us</a></li>
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
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="../Photos/bg.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<h2>Welcome <?php echo '<a href="">'.' '.$row['FirstName'].' '.$row['lastName'].'</a>' ?></h2>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Categories</h2>
			</div>
			<div class="row">
				<!-- Materials -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="../Photos/categories/Material.jpg"></div>
						<div class="ci-text">
                            <a href="./Student_Materials.php">
                                <h5>Materials</h5>
							    <p>providing study Materials from Faculty</p>
                            </a>
                        </div>
					</div>
				</div>
				<!-- Scheduling -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="../Photos/categories/Scheduling.jpg"></div>
						<div class="ci-text">
                            <a href="./Student_Scheduling.php">
                                <h5>Scheduling</h5>
							    <p>Here providing Scheduling from collage</p>
                            </a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="../Photos/categories/Result.jpg"></div>
						<div class="ci-text">
                            <a href="./Student_Result.php">
                                <h5>Result</h5>
							    <p>Here providing your Result from Faculty</p>
                            </a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="../Photos//categories/Library.jpg"></div>
						<div class="ci-text">
                            <a href="./Student_Library.php">
                                <h5>Library</h5>
							    <p>Here providing books availability in Library</p>
                            </a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="../Photos//categories/News.jpg"></div>
						<div class="ci-text">
                            <a href="./Student_News.php">
                                <h5>News</h5>
							    <p>Here providing collages News</p>
                            </a>
						</div>

					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="../Photos//categories/About_Us.jpg"></div>
						<div class="ci-text">
                            <a href="../About.php">
                                <h5>About Us</h5>
							    <p>Here providing About Us of collage</p>
                            </a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="../Photos//categories/Contact_Us.jpg"></div>
						<div class="ci-text">
                            <a href="../Contact.php">
                                <h5>Contact Us</h5>
							    <p>Here providing Contact with Us</p>
                            </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- categories section end -->

	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item">
						<ul class="contact-list">
						</ul>
					</div>
					<div class="widget-item">
						<h4>Connect</h4>
						<ul>
							<li><a href="https://wa.me/+917574949494" target="_blank">Whatsapp</a></li>
							<li><a href="https://www.instagram.com/gyanmanjari_group_of_colleges/">Instagram</a></li>
							<li><a href="https://www.facebook.com/gmitbvn">Facebook</a></li>
							<li><a href="https://twitter.com/GMGC_Bhavnagar?s=09">Twitter</a></li>
							<li><a href="https://www.youtube.com/channel/UCzsun63TTJoLySLIWWaA8AQ/featured">Youtube</a></li>
							<li><a href="https://in.linkedin.com/company/gyanmanjari">linkedin</a></li>
							<li><a href="http://www.gmit.edu.in/">Website</a></li>
							<li><a href="mailto:info@gmit.edu.in?">Send Email</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Categories</h4>
						<ul>
							<li><a href="./Student_Materials.php">Materials</a></li>
							<li><a href="./Student_Scheduling.php">Scheduling</a></li>
							<li><a href="./Student_Result.php">Result</a></li>
							<li><a href="./Student_Library.php">Library</a></li>
							<li><a href="./Student_News.php">News</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>GMIT</h4>
						<ul>
							<li><a href="../index.php">Home</a></li>
							<li><a href="../About.php">About us</a></li>
							<li><a href="../Contact.php">Contact</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Newsletter</h4>
						<form class="footer-newslatter">
							<input type="email" placeholder="E-mail">
							<button class="site-btn">Subscribe</button>
							<p>We don’t spam</p>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/main.js"></script>
</html>