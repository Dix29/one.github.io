<?php
session_start();
if(isset($_SESSION['admin'])=="" && isset($_SESSION['staff'])=="")
{
	header("location:index.php?m2=2");
	exit();
}
include("connect.php");

if(isset($_REQUEST['Submit']))
{
	extract($_POST);
	foreach($s as $n)
	{
		$q22=mysqli_query($a,"select id_proof_photo,photo from staff_data where s_id=$a")or die("QF1");
		$fn=$data33['id_proof_photo'];
		$path="id_photos/";
		$npath=$path.$fn;
		unlink($npath);

		$fn=$data33['photo'];
		$path="s_photos/";
		$npath=$path.$fn;
		unlink($npath);
		mysqli_query($a,"delete from staff_data where s_id=$n")or die("QF3");
	}
	header("location:view_staff.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
<title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
    <?php
   include("menu.php");
   ?>
   <!--End sidebar-wrapper-->
  

<!--Start topbar header-->
<?php
   include("top.php");
   ?>
<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <form name="form1" method="post" action="">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Trustees</h5>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col"><input type="checkbox" name="s" id="s" value="checkbox" onClick="selectall (this)"></th>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">qualification</th>
                    <th scope="col">id proof type</th>
                    <th scope="col">id proof photo</th>
                    <th scope="col">Photo</th>
                    <th colspan="2" scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
				$no=1;
				$q2=mysqli_query($a,"select * from staff_data")or die("QF2");
				while($data=mysqli_fetch_array($q2))
				{
				?>
                  <tr>
                    <th ><input name="s[]" type="checkbox" id="s[]" value="<?php echo $data['s_id'];?>"></th>
                    <th ><?php echo $no;?></th>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['gender'];?></td>
                    <td><?php echo $data['mobile'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['address'];?></td>
                    <td><?php echo $data['qualification'];?></td>
                    <td><?php echo $data['id_proof_type'];?></td>
                    <td><img src="id_photos/<?php echo $data['id_proof_photo'];?>" height="50" width="50"></td>
                    <td><img src="s_photos/<?php echo $data['photo'];?>" height="50" width="50"></td>
                    <td><a href="delete_staff.php?d=<?php echo $data['s_id'];?>" onClick="return f1();">Delete</a></td>
                    <td><a href="update_staff.php?u=<?php echo $data['s_id'];?>" onClick="return f2();">Update</a></td>
                  </tr>
                  <?php
				  $no++;
				  }
				  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <input type="submit" name="Submit" value="Delete" onClick="return f1();">
      </div>
        </form>
   </div>

        
         
     <!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

</div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright ? 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>


<script language="javascript">
function f1()
{
	var c=confirm("Are you sure to delete data ?");
	if(c==false)
	{
		return false;
	}
}

function f2()
{
	var c=confirm("Are you sure to update data ?");
	if(c==false)
	{
		return false;
	}
}
</script>

<script language="javascript">

function selectall(source) {
  checkboxes = document.getElementsByName('s[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>