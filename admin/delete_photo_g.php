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
$q22=mysqli_query($a,"select photo_title,photo from photo_gallery where p_id=$a")or die("QF1");
$data33=mysqli_fetch_array($q22);

$fn=$data33['photo'];
$path="photo_gallery/";
$npath=$path.$fn;
unlink($npath);


 
mysqli_query($a,"delete from photo_gallery where p_id=$a")or die("QF");
header("location:p_gallery.php"); 
?>