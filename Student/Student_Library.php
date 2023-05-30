<?php 
$con=mysqli_connect("localhost","root","","studentdb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Library</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../Photos/Logo.png" type="image/icon type">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/Student_Library.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

<div id="preloder">
    <div class="loader"></div>
  </div>

	<!-- Page Preloder -->
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
  </header><br><br><br>
	<!-- Header section end -->

	<!-- course section -->
	<section class="course-section spad">
		<div class="container">
			<div class="section-title mb-0">
				<a href="./Student_Library.php">
					<h2>Library Books</h2>
				</a>
				
			</div>
		</div>
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">All</li>
				<li class="control" data-filter=".Computer">Computer</li>
				<li class="control" data-filter=".Mechanical">Mechanical</li>
				<li class="control" data-filter=".Civil">Civil</li>
				<li class="control" data-filter=".Electrical">Electrical</li>
			</ul>                                       
			<div class="row course-items-area">
				<!---------------
					Computer
				 --------------->
				<?php 
				$sql = "SELECT * FROM book WHERE category='Computer'";  
				$result = mysqli_query($con, $sql);  
				foreach ($result as $row)
{
?>
				<div class="mix col-lg-3 col-md-4 col-sm-6 Computer">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="<?php echo "../Photos/Library/Computer/".$row['photo']?>">
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5><center><?php echo $row['title'] ?></center></h5><br><br>
							</div>
							<div class="course-author">
								<p><span>Author </span><?php echo $row['author'] ?></p>
							</div>
						</div>
					</div>
				</div>
<?php }?>
				<?php 
				$sql = "SELECT * FROM book WHERE category='Mechanical'";  
				$result = mysqli_query($con, $sql);  
				foreach ($result as $row)
{
?>
				<div class="mix col-lg-3 col-md-4 col-sm-6 Mechanical">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="<?php echo "../Photos/Library/Mechanical/".$row['photo']?>">
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5><center><?php echo $row['title'] ?></center></h5><br>
							</div>
							<div class="course-author">
								<p><span>Author </span><?php echo $row['author'] ?></p>
							</div>
						</div>
					</div>
				</div>
<?php }?>
				
				<?php 
				$sql = "SELECT * FROM book WHERE category='Civil'";  
				$result = mysqli_query($con, $sql);  
				foreach ($result as $row)
{
?>
				<div class="mix col-lg-3 col-md-4 col-sm-6 Civil">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="<?php echo "../Photos/Library/Civil/".$row['photo']?>">
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5><center><?php echo $row['title'] ?></center></h5><br>
							</div>
							<div class="course-author">
								<p><span>Author </span><?php echo $row['author'] ?></p>
							</div>
						</div>
					</div>
				</div>
<?php }?>
				<?php 
				$sql = "SELECT * FROM book WHERE category='Electrical'";  
				$result = mysqli_query($con, $sql);  
				foreach ($result as $row)
{
?>
				<div class="mix col-lg-3 col-md-4 col-sm-6 Electrical">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="<?php echo "../Photos/Library/Electrical/".$row['photo']?>">
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5><center><?php echo $row['title'] ?></center></h5><br>
							</div>
							<div class="course-author">
								<p><span>Author </span><?php echo $row['author'] ?></p>
							</div>
						</div>
					</div>
				</div>
<?php }?>

			</div>
		</div>
	</section>

	<!-- course section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>