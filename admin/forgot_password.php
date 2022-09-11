 <?php
  if(isset($_REQUEST['Submit']))
  {
  	extract($_POST);
	include("connect.php");
	$q=mysqli_query($a,"select user_id,password from admin where email='$em'")or die ("QF");
	if(mysqli_num_rows($q))
	{
		$data=mysqli_fetch_array($q);
		$l=$data['user_id'];
		$p=$data['password'];
		$to=$em;
		$from="admin@gmail.com";
		echo $body="
<style  type='text/css'>
td
{
	padding-left:10px;
}
.style1 {color: #0000FF}
</style>
<table width='70%' border='1' align='center' bordercolor='#99CC33' bgcolor='#FFCCCC'>
  <tr>
    <td>Hello $n, </td>
  </tr>
  <tr>
    <td>We are seding you your login detail for www.asdasd.com </td>
  </tr>
  <tr>
    <td>Note your details </td>
  </tr>
  <tr>
    <td><table width='50%' border='1' align='center' bgcolor='#FFFFCC'>
      <tr>
        <td
		 width='34%'><span class='style1'>Login ID </span></td>
        <td width='3%'><span class='style1'>:</span></td>
        <td width='63%'><span class='style1'>$l</span></td>
      </tr>
      <tr>
        <td><span class='style1'>Password</span></td>
        <td><span class='style1'>:</span></td>
        <td><span class='style1'>$p</span></td>
      </tr>

    </table></td>
  </tr>
  <tr>
    <td><p>Thanks,</p>
      <p>Regards,</p>
    <p>Team - Google.com </p></td>
  </tr>
</table>
"; die;
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: ".$from." <".$from.">\r\n";
	mail($to,$sub,$body,$headers);
	header("location:index.php?m5=5");
	
	}
	else
	{
		header("location:forgot_password.php?msg=wrong");
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
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div data-vide-bg="video/awesome">
	<div class="main-w3layouts center-container">
		<h1>Admin- Forgot Password</h1><br><br>
		<div class="main-agileinfo">
			<div class="agileits-top"> 
				<form name="form1" action="" method="post" id="form1" onSubmit="return f1();"> <br>
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<input class="text" type="email" name="em" id="em" placeholder="Username"  autocomplete="off" autofocus><br><br>
				
					 
					
					<div class="wthree-text">  
						  
						<div class="clear"> </div>
					</div>   
					<input type="submit" name="Submit" value="Send">
					<br>
					<a href="index.php"><p><b>Login Now</b></p></a>
				</form>
			</div>	 
		</div>	
		<!-- copyright -->
		<div class="w3copyright-agile"><br><br><br>
			<h2>© 2022  All rights reserved | Design by <a href="#" target="_blank">xyz</a></h2>
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
	if(form1.em.value=="")
	{
		alert("Please Enter email");
		form1.em.focus();
		return false;
	}
	
	 
}
</script>

<?php if(isset($_REQUEST['msg'])=="wrong"){?>
<script language="javascript">
alert("You entered wrong Email ID");
</script> <?php } ?>
 