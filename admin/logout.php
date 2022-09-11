<?php
session_start();
if(isset($_SESSION['admin'])=="" && isset($_SESSION['staff'])=="")
{
	header("location:index.php?m2=2");
	exit();
}	


$d=date('Y-m-d');
date_default_timezone_set('Asia/calcutta');
$t=date("h:i");
include("connect.php");

if(isset($_SESSION['staff'])!="")
{
$s=$_SESSION['staff'];
mysqli_query($a,"update staff_data set last_login_date='$d',last_login_time	='$t' where s_id=$s")or die("QF1");
$_SESSION['staff']='';

}
else
{
$a=$_SESSION['admin'];
mysqli_query($a,"update admin set last_login_date='$d',last_login_time='$t' where a_id=$a")or die("QF2");
$_SESSION['admin']='';
}


session_destroy();

header("location:index.php?m3=3");
?>