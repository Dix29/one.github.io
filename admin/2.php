<!DOCTYPE html>
<html>
<head>
 </head>
<body>

<?php
    $q = $_GET['q']; 

/*$con = mysqli_connect('localhost','peter','abc123','my_db');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
*/
include_once("connect.php");



/*$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
*/
if($q=="1")
{
	$sql=mysqli_query($a,"select * from about ")or die ("QF");
	$row = mysqli_fetch_array($sql);
	echo $row['a_content'];
}
else
{
	$sql=mysqli_query($a,"select * from history ")or die ("QF");
	$row = mysqli_fetch_array($sql);
	echo $row['h_content'];
}
 
 
?>
</body>
</html>