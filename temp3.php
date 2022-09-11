<?php
include("connect.php");
$q=mysqli_query($a,"select * from past_project order by f_id")or die("QF"); 
					while($data=mysqli_fetch_array($q))
					{
					 ?>
					 <?php echo $data['video'];?> 
					 <?php } ?>