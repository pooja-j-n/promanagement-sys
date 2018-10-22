<?php

include "db.php";
$pid =$_POST['pid'];
$gm =$_POST['gm'];
$em =$_POST['em'];

if(isset($_REQUEST['submit'])!='')
	{
	if($_POST['pid']==''||$_POST['em']=='')
	{
			Print '<script>alert("Do Not leave any field empty!");</script>';
			Print '<script>window.location.assign("addmarks_h.php");</script>';
	}
	
	
	else
	
	{
	$tm=$gm+$em;
	
	$query="insert into marks(PID,GMARKS,EMARKS,TMARKS) values('$pid','$gm','$em','$tm')" ;
	$res=mysql_query($query);
	if($res)
	{
		Print '<script>alert("successful");</script>';
		header('Location: nmainfac.php');
		
	}
	else
	echo "unsuccessful ";
	
	}
	
	}
	
	
	?>
