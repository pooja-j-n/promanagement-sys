<?php
	
	$username =$_POST['user'];
	$password =$_POST['pass'];
	session_start();
	include "db.php";
	
	$query = mysql_query("SELECT * from student_login WHERE USN='$username' and PASSWORD='$password'");
	$exists = mysql_num_rows($query);

	if($exists>0)
	{
		
			$query="select FNAME,LNAME from student where USN='$username'";
			$res=mysql_query($query);
			$name=mysql_fetch_array($res);
			$fn=$name['FNAME'];
			$ln=$name['LNAME'];
		 
		$_SESSION['user'] = $username;
		$_SESSION['fname'] = $fn;
		$_SESSION['lname'] = $ln;
		Print '<script>alert("Successfully signed in\n Your usn  is :'.$username.'");</script>';
		Print '<script>window.location.assign("nmainstu.php");</script>';
		echo "heeeeee";
		header('Location: nmainstu.php');
	}
	else
		echo "heeeeee";
?>
