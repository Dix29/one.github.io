<?php
session_start();
if(isset($_SESSION['admin'])=="" && isset($_SESSION['staff'])=="")
{
	header("location:index.php?m2=2");
	exit();
}
		
include("connect.php");
$u=$_REQUEST['u'];
$q2=mysqli_query($a,"select * from  staff_data where s_id=$u")or die ("QF1");
$data2=mysqli_fetch_array($q2);
$old_p1=$data2['id_proof_photo'];
$old_p2=$data2['photo'];

if(isset($_REQUEST['Submit']))
 {
 	extract($_POST);
	
	$fn_new=$_FILES['idpho']['name'];
	$fn2_new=$_FILES['pho']['name'];
	
	if($fn_new!="" && $fn2_new!="")	
	{
		//Photo Update 1
		///Remove Old Staff Photo
		$o_s_p=$data['id_proof_photo'];
		$path_s="id_photos/";
		$npath_s=$path_s.$old_p1;
		unlink($npath_s);
		//Upload New Staff Photo
		$fn_s=$_FILES['idpho']['name'];
		$npath_s_new=$path_s.$fn_s;
		move_uploaded_file($_FILES['idpho']['tmp_name'],$npath_s_new);
	
	//Remove Old ID Proof Photo
		$o_s_i=$data['photo'];
		$path_i="s_photos/";
		$npath_i=$path_i.$old_p2;
		unlink($npath_i);
		//Upload New ID Proof Photo
		$fn_i=$_FILES['pho']['name'];
		$npath_i_new=$path_i.$fn_i;
		move_uploaded_file($_FILES['pho']['tmp_name'],$npath_i_new);
	}
	else if($fn_new=="" && $fn2_new=="")
	{
		$fn_s=$data['id_proof_photo'];
		$fn_i=$data['photo'];	
	}
	else if($fn_new!="" && $fn2_new=="")
	{
		$o_s_p=$data['id_proof_photo'];
		$path_s="id_photos/";
		$npath_s=$path_s.$old_p1;
		unlink($npath_s);
		//Upload New Staff Photo
		$fn_s=$_FILES['idpho']['name'];
		$npath_s_new=$path_s.$fn_s;
		move_uploaded_file($_FILES['idpho']['tmp_name'],$npath_s_new);
		$fn_i=$data['id_proof_photo'];	
	}
	else if($fn_new=="" && $fn2_new!="")
	{
		$o_s_i=$data['photo'];
		$path_i="s_photos/";
		$npath_i=$path_i.$old_p2;
		unlink($npath_i);
		//Upload New ID Proof Photo
		$fn_i=$_FILES['pho']['name'];
		$npath_i_new=$path_i.$fn_i;
		move_uploaded_file($_FILES['pho']['tmp_name'],$npath_i_new);
		
		$fn_s=$data['photo'];
	}
	

	$q2=mysqli_query($a,"update staff_data set name='$nm', gender='$gen', mobile='$mo', email='$em', address='$add', qualification='$qu', id_proof_type='$idp', id_proof_photo='$fn_s', photo='$fn_i' where s_id=$u")or die("QF2");
	 
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
            <input name="nm" type="text" class="form-control" id="nm" placeholder="Enter Your Name" value="<?php echo $data2['name'];?>" onKeyPress="return (event.charCode ==32 || event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) ">
           </div>
           <div class="form-group">
            <label for="input-2">Gender</label>
            <input name="gen" type="radio" class="form-control" id="gen" value="male" <?php if($data2['gender']=="male") { ?> checked="checked" <?php } ?>>
            Male<br>
			<input type="radio" class="form-control" id="gen" value="female" name="gen" <?php if($data2['gender']=="female") { ?> checked="checked" <?php } ?>>
			Female
           </div>
           <div class="form-group">
            <label for="input-3">Mobile</label>
            <input name="mo" type="tel" pattern="[6-9]{1}[0-9]{9}"  class="form-control" id="mo" maxlength="13" placeholder="Enter Your Mobile Number" value="<?php echo $data2['mobile'];?>">
           </div>
           <div class="form-group">
            <label for="input-4">Email</label>
            <input name="em" type="email" class="form-control" id="em" placeholder="Enter email" value="<?php echo $data2['email'];?>">
           </div>
		   <div class="form-group">
            <label for="input-4">Address</label>
            <textarea name="add" class="form-control" id="add" placeholder="Enter email"   ><?php echo $data2['address'];?></textarea>
           </div>
		   
		   <div class="form-group">
            <label for="input-4">Qualification</label>
            <input name="qu" type="text" class="form-control" id="qu" placeholder="Enter email" value="<?php echo $data2['qualification'];?>">
           </div>
		   
		   <div class="form-group">
            <label for="input-4">ID Proof Type</label>
            
            <p>
              <select name="idp" class="gradient-info-light" id="idp">
			  
                
                <option value="Aadhar Card" <?php if ($data2['id_proof_type']=="Aadhar Card") { ?> class="gradient-info-light" selected="selected"<?php } ?>>Aadhar Card</option>
                <option value="Voter ID Card" <?php if ($data2['id_proof_type']=="Voter ID Card") { ?> class="gradient-info-light" selected="selected"<?php } ?>>Voter ID Card</option>
                <option value="Driving License" <?php if ($data2['id_proof_type']=="Driving License") { ?> class="gradient-info-light" selected="selected"<?php } ?>>Driving License</option>
                <option value="Passport" <?php if ($data2['id_proof_type']=="Passpor") { ?> class="gradient-info-light" selected="selected"<?php } ?>>Passport</option>
              </select>
            </p>
		   </div>
		   
		   <div class="form-group" >
            <label for="input-4" >ID Proof Photo</label><br>
		    <input name="idpho" type="file" id="idpho" >
		    <img src="id_photos/<?php echo $data2['id_proof_photo'];?>" width="50" height="50"></div>
           <div class="form-group" >
            <label for="input-4" >Photo</label><br>
		    <input name="pho" type="file" id="pho" >
		    <img src="s_photos/<?php echo $data2['photo'];?>" width="50" height="50"></div>
           
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