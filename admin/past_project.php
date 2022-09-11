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
	$fn1=$_FILES['img1']['name'];
	$path1="past_project_photos/";
	$npath1=$path1.$fn1;
	move_uploaded_file($_FILES['img1']['tmp_name'],$npath1);
	
	$fn2=$_FILES['img2']['name'];
	$path2="past_project_photos/";
	$npath2=$path2.$fn2;
	move_uploaded_file($_FILES['img2']['tmp_name'],$npath2);
	
	$fn3=$_FILES['img3']['name'];
	$path3="past_project_photos/";
	$npath3=$path3.$fn3;
	move_uploaded_file($_FILES['img3']['tmp_name'],$npath3);
	
	
	$q=mysqli_query($a,"insert into past_project(project_title,project_desc,photo_1,photo_2,photo_3,video)values('$title','$d','$fn1','$fn2','$fn3','$vd')")or die("QF");
	header("location:view_past_project.php");
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
 <!--FOR RTB--> 
  <script type="text/javascript" src="nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
 <!--FOR RTB COMPLETE--> 
  
  
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   
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

     
       
        
           <p><a href="view_past_project.php"><b>View Project</b></a></p> 
          
           <hr>
		    <div class="card">
        <div class="card-body">
 
      
            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return f1();">
           <div class="form-group">
            <label for="input-1">Project Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter Event Name" onKeyPress="return (event.charCode ==32 || event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) ">
           </div>
		   
		   <div class="form-group">
            <label for="input-1">Description</label>
           <textarea name="d" id="d" class="form-control" style="height: 350px;"></textarea>
           </div>
		   
            <div class="form-group">
            <label for="input-2">Photo 1</label>
           <input name="img1" type="file" id="img1" class="form-control">
         
           </div>
           <div class="form-group">
            <label for="input-3">Photo 2</label>
            <input name="img2" type="file" id="img2" class="form-control">
			</div>
           <div class="form-group">
            <label for="input-4">Photo 3</label>
            <input name="img3" type="file" id="img3" class="form-control">
           </div>
		  
           <div class="form-group">
            <label for="input-5">Video</label>
            <textarea name="vd" id="vd" class="form-control"></textarea>
			 
           </div>
           
           <div class="form-group">
		    <button type="reset" name="reset" class="btn btn-light px-5"> Reset</button>
            <button type="submit" name="Submit" class="btn btn-light px-5"> Submit</button>
          </div>
          </form>
        
    </div><!--End Row-->

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
	if(form1.nm.value=="")
	{
		alert("Please enter event title");
		form1.nm.focus();
		return false;
	}
	
	else if(form1.img1.value=="")
	{
		alert("Please upload first photo");
		form1.img1.focus();
		return false;
	}
	
	else if(form1.img2.value=="")
	{
		alert("Please upload second photo");
		form1.img2.focus();
		return false;
	}
	
	else if(form1.img3.value=="")
	{
		alert("Please upload third photo");
		form1.img3.focus();
		return false;
	}
	
	else if(form1.vd.value=="")
	{
		alert("Please upload video");
		form1.vd.focus();
		return false;
	}
}
</script>