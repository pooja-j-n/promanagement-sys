<?php
	include "db.php";
	session_start();
?>
<html>
<head>
<link href="login.css" rel="stylesheet">

<title>Add a project </title>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/carouFredSel.js"></script>
	 
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="js/main.js"></script>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body background="img/billboard.jpg">

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
<form action="addproj.php" method="POST">
  <fieldset>
	<p> Team members <br>
    <input type="radio" name="radio1" id="r1" value="Show" 

onClick="getResults()">1 <br>

    <input type="radio" name="radio2" id="r2" value="Nothing">2<br>

<input type="radio" name="radio3" id="r3" value="Nothing">3<br>
</p>
</p>


<div class="text1">
    <p><label for="usn1">USN #1</label><br>
        	 <select name="text11" style="background-color: #B0C4DE";width:"20px";>
	  <option value=""> </option>
<?php 
$sql = mysql_query("SELECT USN FROM student");
if($sql)
{

while ($row = mysql_fetch_array($sql)){
echo "<option value='$row[0]'>$row[0]</option>";
}
}
else
echo "error";
?>
</select>
    </p>
</div>


<div class="text2">
    <p>    	<label for="usn1">USN #1</label><br>

        	 <select name="text21" style="background-color: #B0C4DE";width:"20px";>
	  <option value=""> </option>
<?php 
$sql = mysql_query("SELECT USN FROM student");
if($sql)
{

while ($row = mysql_fetch_array($sql)){
echo "<option value='$row[0]'>$row[0]</option>";
}
}
else
echo "error";
?>
</select>
    </p>
</div>
<div class="text2">
    <p>    	<label for="usn">USN #2</label><br>
			 <select name="text22" style="background-color: #B0C4DE";width:"20px";>
	  <option value=""> </option>
<?php 
$sql = mysql_query("SELECT USN FROM student");
if($sql)
{

while ($row = mysql_fetch_array($sql)){
echo "<option value='$row[0]'>$row[0]</option>";
}
}
else
echo "error";
?>
</select>
    </p>
</div>


<div class="text3">
    <p>    	<label for="usn">USN #1</label><br>

        	 <select name="text31" style="background-color: #B0C4DE";width:"20px";>
	  <option value=""> </option>
<?php 
$sql = mysql_query("SELECT USN FROM student");
if($sql)
{

while ($row = mysql_fetch_array($sql)){
echo "<option value='$row[0]'>$row[0]</option>";
}
}
else
echo "error";
?>
</select>
    </p>
</div>

<div class="text3">
    <p>    	<label for="for">USN #2</label><br>

        	 <select name="text32" style="background-color: #B0C4DE";width:"20px";>
	  <option value=""> </option>
<?php 
$sql = mysql_query("SELECT USN FROM student");
if($sql)
{

while ($row = mysql_fetch_array($sql)){
echo "<option value='$row[0]'>$row[0]</option>";
}
}
else
echo "error";
?>
</select>
    </p>
</div>
<div class="text3">
    <p>    	<label for="FirstName">USN #3</label><br>

        	 <select name="text33" style="background-color: #B0C4DE";width:"20px";>
	  <option value=""> </option>
<?php 
$sql = mysql_query("SELECT USN FROM student");
if($sql)
{

while ($row = mysql_fetch_array($sql)){
echo "<option value='$row[0]'>$row[0]</option>";
}
}
else
echo "error";
?>
</select>
    </p>
</div>

   
    <p>
      <label for="ProjectTitle">Project Title</label><br>
      <input type="text" name="ProjectTitle" id="projecttitle" >
    </p>
    <p>
      <label for="CourseID">Course ID</label><br>
      <input type="text" name="cid" id="Courseid" >
    </p>
    <p>
      <label for="Repassword">Link</label><br>
      <input type="text" name="link" id="link">
    </p>
	<br><br>
   
    <input type="submit" name="submit" value="Submit">
    
  </fieldset>
</form>
</div>
<script>
$(document).ready(function () {
    $(".text1").hide();$(".text2").hide();$(".text3").hide();
    $("#r1").click(function () {
        $(".text1").show(); $(".text2").hide();$(".text3").hide();
    });
    $("#r2").click(function () {
        $(".text1").hide();$(".text3").hide();$(".text2").show();
    });
    $("#r3").click(function () {
        $(".text1").hide();$(".text2").hide();$(".text3").show();
    });
});
</script>

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
