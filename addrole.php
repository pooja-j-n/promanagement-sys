<?php

include "db.php";
session_start();

$pid =$_POST['pid'];
$fid =$_SESSION['user'];
$role =$_POST['role'];



if(isset($_REQUEST['submit'])!='')
	{
	if($_POST['pid']==''||$_POST['role']=='')
	{
			Print '<script>alert("Do Not leave any field empty!");</script>';
			Print '<script>window.location.assign("#");</script>';
	}
	
	
	else
	
	{
	$query="insert into roles(PID,FID,ROLE) values('$pid','$fid','$role')" ;
	$res=mysql_query($query);
	if($res)
	{
		Print '<script>alert("successful");</script>';
Print '<script>window.location.assign("nmainfac.php");</script>';

	}
	else
	echo "Entry already exists";
	
	}
	
	}
	
	
	?>
