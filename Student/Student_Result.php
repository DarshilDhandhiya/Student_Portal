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
  <title>Result</title>

  <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../css/font-awesome.min.css"/>
  <link rel="stylesheet" href="../css/owl.carousel.css"/>
  <link rel="stylesheet" href="../css/Student_Categories.css">
  <link rel="stylesheet" href="../css/Categorie_in_layout.css">
  <link rel="stylesheet" href="../css/zoom.css">
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
      <h2>All Result</h2><br>
      <ul class="cards">
      <?php
        $dbHost     = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName     = "studentdb";

        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        $records = mysqli_query($db,"SELECT * FROM Result ORDER BY id DESC;");
        while($data = mysqli_fetch_array($records))
        {
          $imageURL = '../Photos/Uploads/Result/'.$data['file_name']; 
          $id = $data['id'];
          $descc = $data['descc'];
          $link = $data['link'];
          ?>
        
          <li>
            <div class="card">
            <?php  echo "<img id='$id' src='$imageURL' alt='$descc' style='height:350px; width:200px; border-radius: 1%;'>"; ?>
                <div class="card__overlay">
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                    <img class="card__thumb" src="../Photos/Logo.png" alt="" />
                    <div class="card__header-text">
                      <h3 class="card__title">Scheduling</h3>            
                      <span class="card__status"><?php echo $data['uploaded_on'] ; ?></span>
                    </div>
                  </div>
                  <p class="card__description"><?php echo $data['descc']; 
if($data['link']) { 
$link = $data['link']; 
echo "<a href=$link> Link</a>";
}
?></p>
                </div>
            </div>
          </li>
          
     <?php   } ?>
          
        </ul>
        <?php
          $dbHost     = "localhost";
          $dbUsername = "root";
          $dbPassword = "";
          $dbName     = "studentdb";
          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
          $records = mysqli_query($db,"SELECT * FROM Result ORDER BY id DESC;");
          while($data = mysqli_fetch_array($records))
          {  
            $id = $data['id'];
            $imageURL2 = '../Photos/Uploads/Result/'.$data['file_name'];
			$descc = $data['descc'];
			$link = $data['link'];
            
        
  echo "
			<!-- The Modal -->
		    <div id='myModal' class='modal'>
		        <span class='close'>&times;</span>
		        <img class='modal-content' id='img01' style='height:700px; width:500px; border-radius: 2%;'>;
				
		      <div id='caption'></div>";
			  
			echo "
			<script>
		        // Get the modal
		        var modal = document.getElementById('myModal');
		        // Get the image and insert it inside the modal - use its 'alt' text as a caption
			    var img = document.getElementById('$id');
			    var modalImg = document.getElementById('img01');
			    var captionText = document.getElementById('caption');
			    img.onclick = function(){
			      	modal.style.display = 'block';
			        modalImg.src = this.src;
			        captionText.innerHTML = this.alt;
			    }
			    // Get the <span> element that closes the modal
			    var span = document.getElementsByClassName('close')[0];
			    // When the user clicks on <span> (x), close the modal
			    span.onclick = function() { 
			        modal.style.display = 'none';
			    }
		   	</script>
		";
          
          } 
            ?>
          <?php mysqli_close($db);  // close connection ?>
      </center>
  </body>
</html>
<!--====== Javascripts & Jquery ======-->
<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/main.js"></script>
  <script>
  function onClick(element) 
  {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
  }
</script>