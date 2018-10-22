<?php
include "db.php";
session_start();
?>
<html>

<head>
<title>PROJECTS</title>
<link rel="stylesheet" type="text/css" href="report.css">
<link href="login.css" rel="stylesheet">

<script language="javascript" src="calendar.js"></script>
<style type="text/css">
	th,td{
		padding: 15px;
    text-align: left;
	}
	table, th, td {
   border-collapse: collapse;
   margin-top:100px;
}
</style>
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

					<li><a href="addrole_h.php" style="color:white;">Add my Role</a></li>					<li><a href="addmarks_h.php" style="color:white;">Add Marks</a></li>
					<li><a href="ados_h.php" style="color:white;">Add Project Schedule</a></li>
					<li><a href="vp_h.php" style="color:white;">View Projects</a></li>
					<li><a href="vt_h.php" style="color:white;">View Teams</a></li>
									
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
	
	<div id='table'>

<?php

$sem =$_POST['sem'];


if(isset($_REQUEST['submit'])!='')
	{
	if($_POST['sem']=='')
	{
			Print '<script>alert("Do Not leave any field empty!");</script>';
			Print '<script>window.location.assign("vp.html");</script>';
	}
	
	
	else
	
	{
	$query="select project.PID,project.TITLE,marks.TMARKS,project.LINK,project.STATUS from course,project,marks where course.SEM='$sem' and course.COURSE_ID=project.COURSE_ID and project.PID=marks.PID";
	$res=mysql_query($query);
	if($res)
	{
		Print '<script>alert("successful");</script>';
		
		
		echo"<table align='center'>";
	echo '<tr><th>Project ID</th><th>Title</th><th>Total Marks</th><th>Link</th><th>Status</th><th>Update Status</th></tr>';

	while( $row = mysql_fetch_row($res))
	{
		echo "<tr>";
$_SESSION['pid'] = $row[0];
		echo "<td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td><form action=\"su.php\" method=\"POST\"><input type=\"text\" name=\"st\"><input type=\"submit\" name=\"submit\" value=\"Update\"></form></td>"; 
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
