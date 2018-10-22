<?php
include "db.php";
session_start();
?>
<html>
<head>

<link href="login.css" rel="stylesheet">
<title>Add Schedule</title>
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
	<div id="login">
<form action="ados.php" method="POST">
<fieldset>
<p>
    	<label for="pid">Project ID</label><br>
      
	  <select name="pid" style="background-color: #B0C4DE";width:"20px";>
	  <option value=""> </option>
<?php 
$sql = mysql_query("SELECT PID FROM project");
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
    <p>
    	<label for="dos">Date of submission</label><br>
      <input type="date" name="dos" id="dos" >
    </p>
	<p>
    	<label for="doe">Date of Evaluation</label><br>
      <input type="date" name="doe" id="doe" >
    </p>
    <p>
    	<label for="dos">No of phases</label><br>
      <input type="text" name="nop" id="nop" >
    </p>
	<p>
    	<label for="dos">Current phase</label><br>
      <input type="text" name="cp" id="cp" >
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
