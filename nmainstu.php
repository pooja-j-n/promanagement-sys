<?php
include "db.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>RVCE | Project Management Portal</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Crafty is a stunning HTML5/CSS3 multi-purpose template, well-coded, commented code and easy to customize"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main_responsive.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/carouFredSel.js"></script>
	 
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<header>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main_responsive.css">
		<div class="wrapper">
 <img class="img-circle" src="img/logo.jpg" alt="logo" height="50px" width="50px">
			<a href="#" class="menu_icon" id="menu_icon"></a>
			<nav id="nav_menu">
				<ul>
					<li><a href="addproj_h.php">Add Project</a></li>
					<li><a href="vmm_h.php">View my Marks</a></li>
					<li><a href="vdos_h.php">View Project Schedule</a></li>
					<li><a href="courses_h.php">View Courses</a></li>
					<li><a href="myprojects.php">My Projects</a></li>
									
				</ul>
				
				
			</nav>
			<a href="#" class="menu_icon" id="menu_icon"></a>
			<nav id="nav_menu">
			
					<?php  
					
	
        if(isset($_SESSION["user"]))
        {
          echo "<ul><li style=\"color:white;\">Welcome</li>";
		echo "<ul><li style=\"color:white;\">";
		  echo $_SESSION['fname'];
		  echo "\n";
		  echo $_SESSION['lname'];	
			
          
          echo '<a href="index.html"> | Logout</a>';
		  echo '</li></ul>';
        }
                  

?>
					
									
				
				
				
			</nav>

			
		</div>
	</header><!--  End Header  -->

	<link href="carousel.css" rel="stylesheet">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="im2.jpg" alt="First slide" style="opacity:0.6;" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              
              
            </div>
         </div>
        </div>
        <div class="item">
          <img src="im3.jpg" style="opacity:0.6; alt="Second slide" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
             
              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="im4.jpg" style="opacity:0.6;" alt="Third slide" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              
              
            </div>
          </div>
        </div>
		<br><center><p style="color:black;"><font size="6"><b> PROJECT MANAGEMENT SYSTEM<br>STUDENT PORTAL </b></font></p><center>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="jquery-1.11.3.min.js"></script>
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	<br><br>
	<footer>
		<img src="img/logo.jpg" alt="Crafty" height="70px" width="70px">
		<p>R V Vidyanikethan Post
<br>Mysuru Road Bengaluru - 560 059
<br>Ph : 91 - 080-6717 8021
<br>Fax: 91 - 080-2860 8011
<br>Email : principal@rvce.edu.in</p>
<br><br>
        <center><p>&copy; 2016 Department of ISE, RVCE </p></center>
		
	</footer><!--  End Footer  -->

</body>
</html>
