<?php
session_start();
if(isset($_SESSION['admin'])=="" && isset($_SESSION['staff'])=="")
{
	header("location:index.php?m2=2");
	exit();	
}
include("connect.php");
$a=$_REQUEST['d'];

$q11=mysqli_query($a,"select photo from trustee_data where t_id=$a")or die("QF1");
$data11=mysqli_fetch_array($q11);
$fn=$data11['photo']; 
$path="t_photos/";
$npath=$path.$fn;
unlink($npath);
 
$q=mysqli_query($a,"delete from trustee_data where t_id=$a")or die("QF");
header("location:view_trustee.php");
?>