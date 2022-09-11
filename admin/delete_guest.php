<?php
session_start();
if(isset($_SESSION['admin'])=="" && isset($_SESSION['staff'])=="")
{
	header("location:index.php?m2=2");
	exit();	
}
?>

<?php
include("connect.php"); 
$ab=$_REQUEST['d'];
$q22=mysqli_query($a,"select g_photo from guest_photo where gp_id=$ab")or die("QF1");
$data33=mysqli_fetch_array($q22);

$fn=$data33['g_photo'];
$path="guest_photos/";
$npath=$path.$fn;
unlink($npath);

 
mysqli_query($a,"delete from guest_photo where gp_id=$ab")or die("QF");
header("location:view_guest_gallery.php"); 
?>