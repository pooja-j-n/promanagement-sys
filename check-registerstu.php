<?php
	
	
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	session_start();
	
	//include("functions.php");
	
	$username = $_POST['username'];
	$user = $_POST['username'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$sem = $_POST['sem'];
	
	$password = $_POST['password'];

	$repassword = $_POST['repassword'];
	
	//Print '<script>alert('wewr');</script>';
	
	include "db.php";
	if(isset($_REQUEST['submit'])!='')
	{
	if($_POST['username']==''||$_POST['password']==''||$_POST['repassword']==''||$_POST['fname']==''||$_POST['lname']==''||$_POST['sem']=='')
	{
			Print '<script>alert("Do Not leave any field empty!");</script>';
			Print '<script>window.location.assign("registerstu.htm");</script>';
	}
	

	else if($password!=$repassword)
	{
			Print '<script>alert("Incorrect Password!");</script>';
			Print '<script>window.location.assign("registerstu.htm");</script>';
	}

	else {
	//$encoded = simple_encrypt($password, "secured");
	$query="insert into `student_login` (`USN`,`PASSWORD`) values('$username','$password')";
	$res=mysql_query($query);
	$query1="insert into student (USN,FNAME,MNAME,LNAME,SEM) values('$user','$fname','$mname','$lname','$sem')";
	$res1=mysql_query($query1);
	echo $res;
	echo $res1;
	if($res>0 && $res1>0)
	{
		Print '<script>alert("Login successful");</script>';
		$_SESSION['user'] = $username;
		Print '<script>window.location.assign("nmainstu.php");</script>';
	}
	else { Print '<script>alert("query error:username exists");</script>';
	Print '<script>window.location.assign("index.html");</script>'; }
	}
	
	}

?>
