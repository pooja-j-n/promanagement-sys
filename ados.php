<?php

include "db.php";
$pid =$_POST['pid'];
$dos =$_POST['dos'];
$doe =$_POST['doe'];
$nop =$_POST['nop'];
$cp =$_POST['cp'];


if(isset($_REQUEST['submit'])!='')
	{
	if($_POST['pid']==''||$_POST['dos']=='')
	{
			Print '<script>alert("Do Not leave any field empty!");</script>';
			Print '<script>window.location.assign("ados.htm");</script>';
	}
	
	
	else
	
	{
	$query="insert into schedule(PID,SUBMISSION_DATE,EVALUATION_DATE,PHASES,CURRENT_PHASE) values('$pid','$dos','$doe','$nop','$cp')" ;
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
