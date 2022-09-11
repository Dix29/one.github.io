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
	
	$fn1=$_FILES['idpho']['name'];
	$fn2=$_FILES['pho']['name'];
	
	$path1="id_photos/";
	$path2="s_photos/";
	
	

	$npath1=$path1.$fn1;
	$npath2=$path2.$fn2;
	move_uploaded_file($_FILES['idpho']['tmp_name'],$npath1);
	move_uploaded_file($_FILES['pho']['tmp_name'],$npath2);
	
	
	$q=mysqli_query($a,"insert into staff_data(name,gender,mobile,email,address,qualification,id_proof_type,id_proof_photo,photo)values('$nm','$gen','$mo','$em','$add','$qu','$idp','$fn1','$fn2')")or die("QF");
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
		<a href="view_staff.php">View Staff</a>
    
          
          
           <hr>
		    <div class="card">
        <div class="card-body">
 
       
            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return f1();">
           <div class="form-group">
            <label for="input-1">Name</label>
            <input name="nm" type="text" class="form-control" id="nm" placeholder="Enter Your Name" onKeyPress="return (event.charCode ==32 || event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) " >
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
            <input name="mo" type="tel" pattern="[6-9]{1}[0-9]{9}" class="form-control" id="mo" placeholder="Enter Your Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-4">Email</label>
            <input name="em" type="email" class="form-control" id="em" placeholder="Enter email">
           </div>
		   <div class="form-group">
            <label for="input-4">Address</label>
            <textarea name="add" class="form-control" id="add" placeholder="Enter address"></textarea>
           </div>
		   
		   <div class="form-group">
            <label for="input-4">Qualification</label>
            <input name="qu" type="text" class="form-control" id="qu" placeholder="Enter qualification">
           </div>
		   
		   <div class="form-group">
            <label for="input-4">ID Proof Type</label>
            
            <p>
              <select name="idp" class="gradient-info-light" id="idp">
                <option value="Select ID" class="gradient-info-light">Select ID</option>
                <option value="Aadhar Card" class="gradient-info-light">Aadhar Card</option>
                <option value="Voter ID Card" class="gradient-info-light">Voter ID Card</option>
                <option value="Driving License" class="gradient-info-light">Driving License</option>
                <option value="Passport" class="gradient-info-light">Passport</option>
              </select>
            </p>
		   </div>
		   
		   <div class="form-group" >
            <label for="input-4" >ID Proof Photo</label><br>
		    <input name="idpho" type="file" id="idpho" >
		   </div>
           <div class="form-group" >
            <label for="input-4" >Photo</label><br>
		    <input name="pho" type="file" id="pho" >
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
	
	else if(form1.add.value=="")
	{
		alert("Please enter your address");
		form1.add.focus();
		return false;
	}
	
	else if(form1.qu.value=="")
	{
		alert("Please enter your qualification");
		form1.qu.focus();
		return false;
	}
	
	else if(form1.idp.value=="Select ID")
	{
		alert("Please select your ID Proof Type");
		form1.idp.focus();
		return false;
	}
	
	else if(form1.idpho.value=="")
	{
		alert("Please upload your ID Proof photo");
		form1.qu.focus();
		return false;
	}
	
	else if(form1.pho.value=="")
	{
		alert("Please upload your photo");
		form1.pho.focus();
		return false;
	}
}
</script>