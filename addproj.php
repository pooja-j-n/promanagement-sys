<?php
include "db.php";
session_start();
if(isset($_POST['submit']))
{


$pt = $_POST['ProjectTitle'];
$l = $_POST['link'];
$cid = $_POST['cid'];
$tm11 = $_POST['text11'];
$tm21 = $_POST['text21'];
$tm22 = $_POST['text22'];
$tm31 = $_POST['text31'];
$tm32 = $_POST['text32'];
$tm33 = $_POST['text33'];

}


if($_POST['ProjectTitle']==''||$_POST['link']=='')
{
Print '<script>alert("Do Not leave any field empty!");</script>';
Print '<script>window.location.assign("nmainstu.html");</script>';
}

else {

$pid= uniqid(ISE);
if($tm11!='')
{
$query="insert into workson (USN,PID) values('$tm11','$pid')";
$res=mysql_query($query);
}
if($tm21!=''&& $tm22!='')
{
$query="insert into workson (USN,PID) values('$tm21','$pid')";
$res=mysql_query($query);
$query2="insert into workson (USN,PID) values('$tm22','$pid')";
$res2=mysql_query($query2);
}
if($tm31!=''&& $tm32!='' && $tm33!='')
{
$query="insert into workson (USN,PID) values('$tm31','$pid')";
$res=mysql_query($query);
$query2="insert into workson (USN,PID) values('$tm32','$pid')";
$res2=mysql_query($query2);
$query3="insert into workson (USN,PID) values('$tm33','$pid')";
$res3=mysql_query($query3);
}
$query1="insert into project (PID,TITLE,LINK,COURSE_ID) values('$pid','$pt','$l','$cid')";
$res1=mysql_query($query1);

if($res1>0 && $res>0)
{
Print '<script>alert("Successfully added\n Your project ID is :'.$pid.'");</script>';


Print '<script>window.location.assign("mainstu.php");</script>';
}
else
{Print '<script>alert("unSuccessful");</script>';
}
}

?>
