<?php

include "db.php";
session_start();

$pid =$_SESSION['pid'];
$status =$_POST['st'];
echo $pid;
echo $status;

$query="update project set STATUS=$status where PID=$pid" ;
$res=mysql_query($query);

header('Location: nmainfac.php');
?>
