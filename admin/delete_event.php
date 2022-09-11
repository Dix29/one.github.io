<?php
session_start();
if(isset($_SESSION['admin'])=="" && isset($_SESSION['staff'])=="")
{
	header("location:index.php?m2=2");
	exit();
}
include("connect.php");
$a=$_REQUEST['d'];
$q=mysqli_query($a,"delete from future_event where u_id=$a")or die("QF");
header("location:view_event.php"); 
?>