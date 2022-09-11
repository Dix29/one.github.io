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
$q22=mysqli_query($a,"select title,d_file from documents where d_id=$a")or die("QF1");
$data44=mysqli_fetch_array($q22);

$fn=$data44['d_file'];
$path="documents/";
$npath=$path.$fn;
unlink($npath);


mysqli_query($a,"delete from documents where d_id=$a")or die("QF");
header("location:document_file.php"); 
?>