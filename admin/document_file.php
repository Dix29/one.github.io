<?php
session_start();
if(isset($_SESSION['admin'])=="" && isset($_SESSION['staff'])=="")
{
	header("location:index.php?m2=2");
	exit();
}

if(isset($_REQUEST['Submit']))
{
	include("connect.php");
	extract($_POST);
	$ft=$_FILES['df']['type'];
	
	if($ft=="application/pdf") 
	{
		$fn1=$_FILES['df']['name'];
		$path1="documents/";
		$npath1=$path1.$fn1;
		move_uploaded_file($_FILES['df']['tmp_name'],$npath1);
		$q=mysqli_query($a,"insert into documents(title,d_file)values('$dt','$fn1')")or die("QF");
	}	
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
  <title>Final Project</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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
              <h5 class="card-title">Documents</h5>
			  <div class="table-responsive">
			   <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return f1();">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Title</th>
                      <th scope="col">File</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><input name="dt" type="text" class="form-control" id="dt" placeholder="Enter document Title"></th>
                      <td><input name="df" id="df" type="file"></td>
                    </tr>
                  </tbody>
                </table>
				&ensp; &ensp;<button type="submit" name="Submit" class="btn btn-light px-5"> Submit</button>
			</form>
            </div>
            </div>
          </div>
      </div>	   
	  </div>
  <!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	<div class="content-wrapper">
    <div class="container-fluid">

           
         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Photos</h5>
			  <div class="table-responsive">
			   <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return f1();">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Number</th>
                      <th scope="col">Title</th>
					    <th scope="col">File</th>
					  <th scope="col">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				$no=1;
				$q2=mysqli_query($a,"select * from documents")or die("QF");
				while($data=mysqli_fetch_array($q2))
				{
				?>
                    <tr>
                      <th scope="row"><?php echo $no;?></th>
					  <td><?php echo $data['title'];?></td>
					  <td><?php echo $data['d_file'];?></td>
                      <td><a href="delete_document.php?d=<?php echo $data['d_id'];?>" onClick="return f2();"> Delete </a></td>
                    </tr>
					 <?php
					$no++;
					}
					?>
                  </tbody>
                </table>
					
			</form>
            </div>
            </div>
          </div>
      </div>	   
	  </div>
	<!--Start footer-->
	<?php
	include("bottom.php");
	?>
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
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>

<script language="javascript">
function f1()
{
	if(form1.dt.value=="")
	{
		alert("Please enter document title");
		form1.dt.focus();
		return false;
	}
	
	else if(form1.df.value=="")
	{
		alert("Please upload document file");
		form1.df.focus();
		return false;
	}
}
function f2()
{
	var c=confirm("Are you sure to delete data ?");
	if(c==false)
	{
		return false;
	}
}
</script>