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
	$q=mysqli_query($a,"insert into city (co_id,sid,name) values('$cnm','$snm','$nm')")or die("QF");
 	header("location:view_cities.php");
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
  
<script language="javascript" type="text/javascript">

function getXMLHTTP() 
{ 
		var xmlhttp=false;	
		try
		{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	
		{		
			try
			{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e)
			{
				try
				{
					xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1)
				{
					xmlhttp=false;
				}
			}
		}
		 return xmlhttp;
}
	
	
function getState(countryId) 
{		
		
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	
</script>

<script language="javascript">
function f1()
{
	form1.nm.style.display = 'none';
}
function f2()
{
	form1.nm.style.display = 'block';
}
</script>
  
</head>

<body class="bg-theme bg-theme1" onLoad="return f1();">

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

     
       
        
           <p><b><a href="view_countries.php">View Countries</a></b></p>
          
           <hr>
		    <div class="card">
        <div class="card-body">
 
      
            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return f1();">
           <div class="form-group">
            <label for="input-1">Select Country Name</label>
           <select name="cnm" id="cnm"  onChange="getState(this.value)">
		   <option value="Select Country">Select Country</option>
		   <?php
		   $qc=mysqli_query($a,"select * from country order by name")or die ("QF");
		   while($datac=mysqli_fetch_array($qc))
		   {
		   ?>
		   <option value="<?php echo $datac['co_id'];?>"><?php echo $datac['name'];?></option>
		   <?php } ?>
		   
		   </select>
		              <div class="form-group">
            <label for="input-1">Select State Name</label>
<div id="statediv">
	<select name="state" >
	<option>Select Country First</option>
        </select>
	</div>


		   
		    </div>
           <div class="form-group">
            <label for="input-1">Enter City Name</label>
            <input name="nm" type="text" class="form-control" id="nm" placeholder="Enter Your City" >
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
          Copyright &copy; 2018 Dashtreme Admin
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
 