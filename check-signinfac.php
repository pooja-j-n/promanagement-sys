<?php
	
	$username =$_POST['user'];
	$password =$_POST['pass'];
	session_start();
	include "db.php";
	
	$query = mysql_query("SELECT * from faculty_login WHERE FID='$username' and PASSWORD='$password'");
	$exists = mysql_num_rows($query);

	if($exists>0)
	{
		$query="select FNAME,LNAME from faculty where FID='$username'";
			$res=mysql_query($query);
			$name=mysql_fetch_array($res);
			$fn=$name['FNAME'];
			$ln=$name['LNAME'];
		 
		$_SESSION['user'] = $username;
		$_SESSION['fname'] = $fn;
		$_SESSION['lname'] = $ln;
		$_SESSION['user'] = $username;
		header('Location: nmainfac.php');
	}
	
?>
