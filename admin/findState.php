

<?php 
include("connect.php");
$country=intval($_GET['country']);
  
  
  		   $qs=mysqli_query($a,"select * from state where co_id='$country' order by sname ")or die ("QF");

 
?>
          <select name="snm" id="snm" onchange="return f2();">
		   <option value="Select State">Select State</option>
		   <?php
 		   while($datas=mysqli_fetch_array($qs))
		   {
		   ?>
		   <option value="<?php echo $datas['sid'];?>"><?php echo $datas['sname'];?></option>
		   <?php } ?>
		   
		   </select>
