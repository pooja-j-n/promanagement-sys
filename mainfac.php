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
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="main123.css" rel="stylesheet">
  </head>
  <body>
 
    <div class="header">
      <div class="left-align">
        <img class="img-circle" src="rvlogo.png" alt="logo" height="50px" width="50px">
		<?php  
        if(isset($_SESSION["user"]))
        {
          
		  echo '<h4>Welcome ';
          echo $_SESSION['user'];
          echo ' !</h4?>';

          
          echo '<h4><a class="header-text" href="index.html">Logout</a></h4>';
        }
        
?>
      </div>
	  <div class="center-align"><p><h1 style="color:white">Project Management Portal</h1></p></div>
      
    </div>
	<div id="outer">
        <button class="button"><a href="addmarks.htm">
		Add marks</a></button>

        <button class="button"><a href="addrole.htm">
		Add my role</a></button>

       <button class="button"><a href="ados.htm">
		Add schedule</a></button>
       <button class="button"><a href="vp.htm">
		
		View projects</a></button>
       <button class="button"><a href="vt.htm">
		
		View teams</a></button>

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

        <!-- Left and right controls -->
        
      </div>
      <div class="dropdown align-right">
      
    </div>

    <div class="sidebar left-align">
      
      <ul>
      <h4>
        

        <li><a href="addmarks.htm">
		Add marks</a></li>
		
		 <li><a href="addrole.htm">
		Add my role</a></li>

        <li><a href="ados.htm">
		Add schedule</a></li>

        <li><a href="vp.htm">
		
		View projects</a></li>
		
		
		<li><a href="vt.htm">
		
		View teams</a></li>

        
    </div>
    

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="jquery-1.11.3.min.js"></script>
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<div id="footer">
        
        <center><p>&copy; 2016 Department of ISE, RVCE </p></center>
      </div>
  </body>
</html>



