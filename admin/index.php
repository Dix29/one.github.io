 <?php
 //Captcha Generate
 error_reporting(1);
$arr=range(99,9);
$brr=range(99,9);
$randa=array_rand($arr);
$randb=array_rand($brr); 
$a=$arr[$randa];
$b=$brr[$randb];
$r=$a+$b; 
$cap=$a."+".$b;
 

 
  
 session_start();
 if(isset($_REQUEST['Submit']))
 {
 	include("connect.php");
 	extract($_POST);
	$ldt=date('Y-m-d');
	if($type=="STAFF")
	{
		//Captcha Check
			
    if($_POST['t2']==$_POST['t3'])
		{
			$qs=mysqli_query($a,"select * from  staff_data where user_id='$un' and password='$pwd'  ")or die("QF");
		
		// Successfully Login
		if(mysqli_num_rows($qs))
		{
			$datas=mysqli_fetch_array($qs);
			$_SESSION['staff']=$datas['s_id'];
			header("location:home.php");
		}
		else
		{
			header("location:index.php?m1=1");
		}
	
		}	
		else
		{
			?><script>alert("Captcha Wrong!!!");</script><?php
		}	
	}
	else
	{
		
		$qdt=mysqli_query($a,"select next_login_date from admin where user_id='un' and flag=0")or die ("QF Date");
		$datadt=mysqli_fetch_array($qdt);
		if($datadt="0000-00-00")
		{
			mysqli_query($a,"update admin set next_login_date='$ldt' where user_id='$un'")or die ("QF");
		}
		
		$p=md5($_REQUEST['pwd']);
		$q=mysqli_query($a,"select * from admin where user_id='$un' and password='$p' and flag=0 and next_login_date>='$ldt' ")or die("QF");
		
		// Successfully Login
		if(mysqli_num_rows($q))
		{
			$data=mysqli_fetch_array($q);
			$_SESSION['admin']=$data['a_id'];
			
			header("location:home.php");
		}
		
		else
		{
		
		
		$q_lt=mysqli_query($a,"select login_try from admin where user_id='$un'")or die ("QF try1");	
		$d_lt=mysqli_fetch_array($q_lt);
		$lt=$d_lt['login_try'];
		
		// Blocking User
		if($lt==3)
		{
			
			$cdt=date('Y-m-d', strtotime($date. ' + 1 days'));
			mysqli_query($a,"update admin set flag=1,next_login_date='$cdt' where user_id='$un'")or die ("QF");
			header("location:index.php?m_b=blocked");
			exit(0);
		}
		
		// Updating Try 
		else
		{
			$lt=$lt+1;
			mysqli_query($a,"update admin set login_try=$lt where user_id='$un'")or die ("QF Try2");
		}	
			header("location:index.php?m1=1");
		}
	}
 }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Awesome Register Form a Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Awesome Register Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <!-- Favicon Icon-->
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web font -->
<script>
function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</head>
<body>
	<p>
	  <!-- main -->
</p>
	<div data-vide-bg="video/awesome">
	<div class="main-w3layouts center-container">
		<h1>Admin Login</h1>
		<div class="main-agileinfo">
		
			<div class="agileits-top"> 
				<form name="form1" action="" method="post" id="form1" onSubmit="return f1();"> <br>
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<input class="text" type="text" name="un" id="un" placeholder="Username"  autocomplete="off" autofocus><br><br>
				
					<input class="text" type="password" name="pwd" id="pwd"placeholder="Password"><br><br>
					
					<select name="type" id="type">
					<option value="Select Login Type">Select Login Type</option>
					<option value="ADMIN">ADMIN</option>
					<option value="STAFF">STAFF</option>
					</select>
					<div class="wthree-text">  
						  
						<div class="clear"> </div>
					</div>   
					<input type="checkbox" name="checkbox" onClick="myFunction();" value="checkbox">
					show password<br>
					<?php

error_reporting(1);

echo $cap."=";

?>
<td>
	  <input type="text" name="t3" value="<?php echo $r; ?>">
<input type="text" name="t2" ></td>
					<input type="submit" name="Submit" value="Login"><br>
		<p align="center"><font color="#FFFFFF">
		<?php if(isset($_REQUEST['m_b'])=="blocked") { ?>
		Your Account Blocked for 24 Hrs.
		<?php } ?> 		
		</font><br></p><br>
					<a href="forgot_password.php"><p><b>Forgot password ?</b></p></a>
				</form>
			</div>	 
		</div>	
		<!-- copyright -->
		<div class="w3copyright-agile">
			<h2>© 2022  All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></h2>
		</div>
		<!-- //copyright -->	
	</div>	
	</div>	
	<!-- //main --> 
	<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<!-- //js -->

</body>
</html>

<script language="javascript">
function f1()
{
	if(form1.un.value=="")
	{
		alert("Please enter username");
		form1.un.focus();
		return false;
	}
	
	else if(form1.pwd.value=="")
	{
		alert("Please enter password");
		form1.pwd.focus();
		return false;
	}
	else if(form1.type.value=="Select Login Type")
	{
		alert("Please Select Login Type");
		form1.type.focus();
		return false;
	}
	
	if(form1.t2.value=="")
	{
		alert("Please enter Captcha Code");
		form1.t2.focus();
		return false;
	}

}
</script>

<?php if(isset($_REQUEST['m1'])=="1"){?>
<script language="javascript">
alert("Wrong Username or Password");
</script> <?php } ?>

<?php if(isset($_REQUEST['m2'])=="2"){?>
<script language="javascript">
alert("Please login to access");
</script> <?php } ?>

<?php if(isset($_REQUEST['m3'])=="3"){?>
<script language="javascript">
alert("Thank you for visit");
</script> <?php } ?>

<?php if(isset($_REQUEST['m5'])=="5"){?>
<script language="javascript">
alert("Login details sent on your registered Email ID");
</script> <?php } ?>


<?php if(isset($_REQUEST['m_b'])=="blocked"){?>
<script language="javascript">
alert("Your account blocked for 24 hrs");
</script> <?php } ?>