<?php
include "db.php";
session_start();

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project Management Portal</title>
    <!-- Bootstrap -->
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Crafty is a stunning HTML5/CSS3 multi-purpose template, well-coded, commented code and easy to customize"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main_responsive.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/carouFredSel.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="main123.css" rel="stylesheet">
  </head>
  <body>
    <header>
		<div class="wrapper">
 <img class="img-circle" src="img/logo.jpg" alt="logo" height="50px" width="50px">
			<a href="#" class="menu_icon" id="menu_icon"></a>
			<nav id="nav_menu">
				<ul>
					<li><a href="#about">About RVCE</a></li>
					<li><a href="#gallery">Gallery</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

			
		</div>
	</header><!--  End Header  -->
<div id="outer">
        <button class="button"><a href="addproj.htm">
        Add a project</a></button>

        <button class="button"><a href="viewmymarks.htm">
		View my marks</a></button>

       <button class="button"><a href="vdos.htm">
		View Project Schedule</a></button>
		
		
       <button class="button"><a href="courses.html">
        View Courses</a></button>
		
       <button class="button"><a href="myprojects.php">
        My Projects</a></button>

    </div> 
<!-- Carousel -->
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
          <img src="im2.jpg" alt="First slide" style="opacity:0.4;" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              
              
            </div>
         </div>
        </div>
        <div class="item">
          <img src="im3.jpg" style="opacity:0.4;" alt="Second slide" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
             
              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="im4.jpg" style="opacity:0.4;" alt="Third slide" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              
              
            </div>
          </div>
        </div>
		
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    

    


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="jquery-1.11.3.min.js"></script>
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
 <div id="footer">
        
        <center><p>&copy; 2016 Department of ISE, RVCE </p></center>
      </div>
  </body>
</html>
