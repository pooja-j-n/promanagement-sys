<?php
include "db.php";
session_start();
?>
<html>
<head>

<link href="login.css" rel="stylesheet">
<title>Courses</title>
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
				<li><a href="addproj_h.php" style="color:white;">Add Project</a></li>
					<li><a href="vmm_h.php" style="color:white;">View my Marks</a></li>
					<li><a href="vdos_h.php" style="color:white;">View Project Schedule</a></li>
					<li><a href="courses_h.php" style="color:white;">View Courses</a></li>
					<li><a href="myprojects.php" style="color:white;">My Projects</a></li>
									
									
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
			
			
          
          echo '<a href="index.html" style="color:white;"> | Logout</a>';
		  echo '</li></ul>';
        }
                  

?>
					
									
				
				
				
			</nav>

			
		</div>
	</header><!--  End Header  -->
<div id="login">
<form action="courses.php" method="POST">
<fieldset>
<p>
    	<label for="sem">Semester</label><br>
      <input type="text" name="sem" id="sem">
    </p>
    <br>
    <input type="submit" name="submit" value="Submit">
    </fieldset>
   </form>
   </div>
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
