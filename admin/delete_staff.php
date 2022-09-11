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
$q22=mysqli_query($a,"select id_proof_photo,photo from staff_data where s_id=$a")or die("QF1");
$data33=mysqli_fetch_array($qssss);

$fn=$data33['id_proof_photo'];
$path="id_photos/";
$npath=$path.$fn;
unlink($npath);

$fn=$data33['photo'];
$path="s_photos/";
$npath=$path.$fn;
unlink($npath);
 
mysqli_query($a,"delete from staff_data where s_id=$a")or die("QF");
header("location:view_staff.php"); 
?>