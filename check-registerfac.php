<?php
	
	
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	session_start();
	
	//include("functions.php");
	
	$username = $_POST['username'];
	
		$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	
	$password = $_POST['password'];

	$repassword = $_POST['repassword'];
	
	//Print '<script>alert('wewr');</script>';
	
	include "db.php";
	if(isset($_REQUEST['submit'])!='')
	{
	if($_POST['username']==''||$_POST['password']==''||$_POST['repassword']==''||$_POST['fname']==''||$_POST['lname']=='')
	{
			Print '<script>alert("Do Not leave any field empty!");</script>';
			Print '<script>window.location.assign("registerfac.htm");</script>';
	}
	

	else if($password!=$repassword)
	{
			Print '<script>alert("Incorrect Password!");</script>';
			Print '<script>window.location.assign("registerfac.htm");</script>';
	}

	else {
	//$encoded = simple_encrypt($password, "secured");
	$query="insert into `faculty_login` (`FID`,`PASSWORD`) values('$username','$password')";
	$res=mysql_query($query);
	$query1="insert into faculty (FID,FNAME,MNAME,LNAME) values('$username','$fname','$mname','$lname')";
	$res1=mysql_query($query1);
	if($res>0 && $res1>0)
	{
		Print '<script>alert("Login successful");</script>';
		$_SESSION['user'] = $username;
		Print '<script>window.location.assign("nmainfac.php");</script>';
	}
	else { Print '<script>alert("query error:username exists");</script>';
	Print '<script>window.location.assign("index.html");</script>'; }
	}
	
	}

?>
