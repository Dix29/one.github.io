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
	foreach($do as $n)
	{
		mysqli_query($a,"delete from donor where do_id=$n")or die("QF");
	}
	header("location:view_donor.php");
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
  
  <!--FOR CUT COPY PASTE RIGHT CLICK-->
  
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
    <div class="container-fluid">

           
         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Events</h5>
			  <div class="table-responsive">
			    <form id="form1" name="form1" method="post" action="">
			      <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col"><input type="checkbox" name="checkbox" value="checkbox" onClick="selectall(this)"/></th>
                        <th scope="col">No.</th>
                        <th scope="col">Event Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Chief Guest</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
				$no=1;
				$q=mysqli_query($a,"select * from donor")or die("QF");
				while($data=mysqli_fetch_array($q))
				{
				?>
                      <tr>
                        <th ><input name="do[]" type="checkbox" id="do[]" value="<?php echo $data['do_id']; ?>" /></th>
                        <th ><?php echo $no;?></th>
                        <td><?php echo $data['name'];?></td>
                        <td><?php echo $data['receipt_no'];?></td>
                        <td><?php echo $data['ammount'];?></td>
                        <td><?php echo $data['description'];?></td>
                        <td><?php echo $data['date'];?></td>
                        <td><a href="delete_donor.php?d=<?php echo $data['do_id'];?>" onClick="return f1();">Delete</a></td>
                      </tr>
                      <?php
				  $no++;
				  }
				  ?>
                    </tbody>
                  </table>
                  <input type="submit" name="Submit" value="Delete" />
			    </form>
		      </div>
            </div>
          </div>
      </div>	   
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
  checkboxes = document.getElementsByName('do[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>