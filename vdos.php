<?php
include "db.php";
session_start();
?>

<html>

<head>
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
<title>PROJECT</title>
<link rel="stylesheet" type="text/css" href="report.css">
<script language="javascript" src="calendar.js"></script>
<style type="text/css">
	th,td{
		padding: 15px;
    text-align: left;
	}
	table, th, td {
   border: 1px solid black;
   margin-top:100px;
}
</style>
</head>
<body>
	
	<div id='table'>

<?php

include "db.php";
$pid =$_POST['pid'];


if(isset($_REQUEST['submit'])!='')
	{
	if($_POST['pid']=='')
	{
			Print '<script>alert("Do Not leave any field empty!");</script>';
			Print '<script>window.location.assign("viewmymarks.htm");</script>';
	}
	
	
	else
	
	{
	$query="select * from schedule where PID=$pid";
	$res=mysql_query($query);
	if($res)
	{
		Print '<script>alert("successful");</script>';
		
		
		echo"<table align='center'>";
	echo '<tr><th>Project ID</th><th>Date of Submission</th><th>Number of Phases</th><th>Current Phase</th></tr>';

	while( $row = mysql_fetch_row($res))
	{
		echo "<tr>";
		echo "<td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td>"; 
		echo "</tr>";
		
	}
	echo "</table>";
		
		
		
	}
	else
	echo "unsuccessful ";
	
	}
	
	}
	
	
	?>
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
