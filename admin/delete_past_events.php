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
$a=$_REQUEST['d'];
$q22=mysqli_query($a,"select photo_1,photo_2,photo_3 from past_event where c_id=$a")or die("QF1");
$data33=mysqli_fetch_array($q22);

$fn=$data33['photo_1'];
$path="pe_photos/";
$npath=$path.$fn;
unlink($npath);

$fn=$data33['photo_2'];
$path="pe_photos/";
$npath=$path.$fn;
unlink($npath);

$fn=$data33['photo_3'];
$path="pe_photos/";
$npath=$path.$fn;
unlink($npath);
 
mysqli_query($a,"delete from past_event where c_id=$a")or die("QF");
header("location:view_past_event.php"); 
?>