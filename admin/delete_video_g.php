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
$q22=mysqli_query($a,"select v_title,description,video_link from video_gallery where v_id=$a")or die("QF1");
$data33=mysqli_fetch_array($q22);



 
mysqli_query($a,"delete from video_gallery where v_id=$a")or die("QF");
header("location:v_gallery.php"); 
?>