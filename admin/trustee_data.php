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
	
	$fn1=$_FILES['pho']['name'];
	$path1="t_photos/";
	$npath1=$path1.$fn1;
	move_uploaded_file($_FILES['pho']['tmp_name'],$npath1);
	
	
	$q=mysqli_query($a,"insert into trustee_data(name,gender,mobile,email,photo,designation)values('$nm','$gen','$mo','$em','$fn1','$de')")or die("QF");
	header("location:view_trustee.php");
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

     
       
        
           <p><b><a href="view_trustee.php">View Trustee</a></p></b>
          
           <hr>
		    <div class="card">
        <div class="card-body">
 
      
            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return f1();">
           <div class="form-group">
            <label for="input-1">Name</label>
            <input name="nm" type="text" class="form-control" id="input-1" placeholder="Enter Your Name" onKeyPress="return (event.charCode ==32 || event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) ">
           </div>
           <div class="form-group">
            <label for="input-2">Gender</label>
            <input name="gen" type="radio" class="form-control" id="gen" value="male" checked>
            Male<br>
			<input type="radio" class="form-control" id="gen" value="female" name="gen">
			Female
           </div>
           <div class="form-group">
            <label for="input-3">Mobile</label>
            <input name="mo" type="tel" pattern="[6-9]{1}[0-9]{9}"  class="form-control" id="input-3" maxlength="13" placeholder="Enter Your Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-4">Email</label>
            <input name="em" type="email" class="form-control" id="input-4" placeholder="Enter email">
           </div>
		   <div class="form-group">
            <label for="input-4">Photo</label><br>
           
            <input name="pho" type="file" id="pho">
           </div>
           <div class="form-group">
            <label for="input-5">Designation</label>
            <input name="de" type="text" class="form-control" id="input-5" placeholder="Enter your designation">
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
          Copyright � 2018 Dashtreme Admin
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
		alert("Please enter your name");
		form1.nm.focus();
		return false;
	}
	
	else if(form1.mo.value=="")
	{
		alert("Please enter your mobile");
		form1.mo.focus();
		return false;
	}
	
	else if(form1.em.value=="")
	{
		alert("Please enter your email");
		form1.em.focus();
		return false;
	}
	
	else if(form1.pho.value=="")
	{
		alert("Please upload your photo");
		form1.pho.focus();
		return false;
	}
	
	else if(form1.de.value=="")
	{
		alert("Please enter your designation");
		form1.de.focus();
		return false;
	}
}
</script>