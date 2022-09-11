<?php
include_once("connect.php");
if(isset($_REQUEST['submit']))
{
	extract($_POST);
	$q=mysqli_query($a,"insert into inquiry(name,mobile,email,subject)values('$nm','$mo','$em','$msg')")or die("QF");
	header("location:contact.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Blind Trust</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="B" class="letters-loading">
                                B
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="D" class="letters-loading">
                                D
                            </span>
                             <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="U" class="letters-loading">
                                U
                            </span>
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><span>Close</span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                     
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">Finance</a></li>
                        <li><a href="index.html">Idea</a></li>
                        <li><a href="index.html">Service</a></li>
                        <li><a href="index.html">Growth</a></li>
                        <li><a href="index.html">Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->


        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo-2.png" alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h4>Book Now</h4>
                                     
                                </div>
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>Chicago 12, Melborne City, USA</li>
                                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                                <ul class="social-box">
                                    <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                                    <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                                    <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                                    <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->


        <!-- main header -->
        <header class="main-header style-one">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <div class="left-column pull-left clearfix">
                            <div class="weathre-box"><i class="flaticon-sunny-day-or-sun-weather"></i><a href="index.html">25th Jan: 32 0C / 65 0F</a></div>
                            <ul class="links-box clearfix">
                                <li><a href="index.html">In my area</a></li>
                                <li><a href="index.html">Faq’s</a></li>
                                <li><a href="index.html">Government</a></li>
                            </ul>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <ul class="info-list clearfix">
                                <li><i class="flaticon-phone-with-wire"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                <li><i class="flaticon-fast"></i><a href="index.html">Today: 09.00 to 18.45</a></li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-youtube-square"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix pull-right">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-onepage.html">OnePage Home</a></li>
                                                <li><a href="index-rtl.html">RTL Home</a></li>
                                                <li class="dropdown"><a href="index.html">Header Style</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style 01</a></li>
                                                        <li><a href="index-2.html">Header Style 02</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">City Govt</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="history.html">History</a></li>
                                                <li><a href="service.html">Services</a></li>
                                                <li class="dropdown"><a href="index.html">Portfolio</a>
                                                    <ul>
                                                        <li><a href="portfolio.html">Title Overlay</a></li>
                                                        <li><a href="portfolio-2.html">Title Under Image</a></li>
                                                        <li><a href="portfolio-3.html">Masonry View</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="faq.html">Faq’s</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="error.html">404</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Departments</a>
                                            <ul>
                                                <li><a href="departments.html">All Departments</a></li>
                                                <li><a href="police-crime.html">Policing & Crime</a></li>
                                                <li><a href="trasport-traffic.html">Trasport & Traffic</a></li>
                                                <li><a href="housing-land.html">Housing & Land</a></li>
                                                <li><a href="health-medical.html">Health & Medical</a></li>
                                                <li><a href="arts-culture.html">Arts & Culture</a></li>
                                                <li><a href="tourism-travel.html">Tourism & Travel</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Events</a>
                                            <ul>
                                                <li><a href="event.html">Grid View</a></li>
                                                <li><a href="event-2.html">List View</a></li>
                                                <li><a href="event-details.html">Single Event</a></li>
                                            </ul>
                                        </li>  
                                        <li class="dropdown"><a href="index.html">News</a>
                                            <ul>
                                                <li><a href="blog.html">Grid View</a></li>
                                                <li><a href="blog-2.html">List View With SB</a></li>
                                                <li><a href="blog-details.html">Single Post</a></li>
                                            </ul>
                                        </li> 
                                        <li class="current"><a href="contact.html">Contact</a></li>   
                                    </ul>
                                </div>
                            </nav>
                            <div class="menu-right-content clearfix">
                                <div class="language-box">
                                    <span class="text"><i class="flaticon-world"></i>Eng</span>
                                    <ul class="language-list clearfix">
                                        <li><a href="index.html">Eng</a></li>
                                        <li><a href="index.html">Chi</a></li>
                                        <li><a href="index.html">Spa</a></li>
                                        <li><a href="index.html">Hin</a></li>
                                    </ul>
                                </div>
                                <ul class="other-option clearfix">
                                    <li class="search-btn">
                                        <button type="button" class="search-toggler"><i class="far fa-search"></i></button>
                                    </li>
                                    <li class="nav-box">
                                        <div class="nav-toggler navSidebar-button"><i class="fas fa-th-large"></i></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix pull-right">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <div class="menu-right-content clearfix">
                                <div class="language-box">
                                    <span class="text"><i class="flaticon-world"></i>Eng</span>
                                    <ul class="language-list clearfix">
                                        <li><a href="index.html">Eng</a></li>
                                        <li><a href="index.html">Chi</a></li>
                                        <li><a href="index.html">Spa</a></li>
                                        <li><a href="index.html">Hin</a></li>
                                    </ul>
                                </div>
                                <ul class="other-option clearfix">
                                    <li class="search-btn">
                                        <button type="button" class="search-toggler"><i class="far fa-search"></i></button>
                                    </li>
                                    <li class="nav-box">
                                        <div class="nav-toggler navSidebar-button"><i class="fas fa-th-large"></i></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title centred">
                        <h1>Contact</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-information -->
        <section class="contact-information">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                        <div class="content_block_12">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h6><i class="flaticon-star"></i><span>Make Connecting</span></h6>
                                    <h2>Find Your Contact Information</h2>
                                    <div class="title-shape"></div>
                                </div>
                                <div class="text">
                                    <p>We understand that it is important for you access our services in a way time.</p>
                                    <h4><i class="flaticon-map-1"></i>Council <br />Postal Address</h4>
                                    <p>Level 2, 325 Reynolds Neck 2nd Street, San Antonio 78154.</p>
                                    <a href="contact.html">Get Direction<i class="flaticon-right-arrow"></i></a>
                                </div>
                                <div class="social-box">
                                    <h4>Social Media</h4>
                                    <ul class="social-style-one clearfix">
                                        <li><a href="contact.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="contact.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="contact.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="contact.html"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                        <figure class="image-box"><img src="assets/images/resource/contact-2.jpg" alt=""></figure>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="content_block_13">
                            <div class="content-box">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-mail-inbox-app"></i></div>
                                    <ul class="info clearfix">
                                        <li>
                                            <h5>Business</h5>
                                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                                        </li>
                                        <li>
                                            <h5>Residential</h5>
                                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-emergency-call"></i></div>
                                    <ul class="info clearfix">
                                        <li>
                                            <h5>Phone</h5>
                                            <p><a href="tel:448881234567">+44 (888) 12 345 67</a></p>
                                        </li>
                                        <li>
                                            <h5>Facsimile</h5>
                                            <p><a href="tel:448883456789">+44 (888) 34 567 89</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-clock"></i></div>
                                    <ul class="info clearfix">
                                        <li>
                                            <h5>Mon - Friday</h5>
                                            <p>9.00 am to 6.45 pm</p>
                                        </li>
                                        <li>
                                            <h5>Saturday</h5>
                                            <p>10.30 am to 4.15 pm</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-information end -->


        <!-- contact-information-two -->
        <section class="contact-information-two" style="background-image: url(assets/images/background/download-bg.jpg);">
            <div class="layer-bg" style="background-image: url(assets/images/background/layer-bg-2.jpg);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <h4><i class="flaticon-emergency-call-1"></i>15 Emergency <br />Phone Numbers to Have Handy</h4>
                                <h2>Emergency Phone Numbers You Should Know</h2>
                                <div class="btn-box"><a href="contact.html" class="theme-btn style-two">Take Print</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">
                                <div class="single-item">
                                    <h4>Police Department</h4>
                                    <ul class="info clearfix">
                                        <li>
                                            <p><a href="tel:4488848018">+44 (888) 48018</a><br /><a href="mailto:info@example.com">info@example.com</a></p>
                                        </li>
                                        <li>
                                            <p>191 Integer Rd, 2nd Street SA 08219 USA.</p>
                                        </li>
                                    </ul>
                                    <div class="link"><a href="contact.html">Get Direction<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                                <div class="single-item">
                                    <h4>Fire Department</h4>
                                    <ul class="info clearfix">
                                        <li>
                                            <p><a href="tel:4488801234">+44 (888) 01234</a><br /><a href="mailto:info@example.com">info@example.com</a></p>
                                        </li>
                                        <li>
                                            <p>256 Brunswick Rd, 3rd Street SA 08219 USA.</p>
                                        </li>
                                    </ul>
                                    <div class="link"><a href="contact.html">Get Direction<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                                <div class="single-item">
                                    <h4>Police Department</h4>
                                    <ul class="info clearfix">
                                        <li>
                                            <p><a href="tel:4488848018">+44 (888) 48018</a><br /><a href="mailto:info@example.com">info@example.com</a></p>
                                        </li>
                                        <li>
                                            <p>191 Integer Rd, 2nd Street SA 08219 USA.</p>
                                        </li>
                                    </ul>
                                    <div class="link"><a href="contact.html">Get Direction<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                                <div class="single-item">
                                    <h4>Fire Department</h4>
                                    <ul class="info clearfix">
                                        <li>
                                            <p><a href="tel:4488801234">+44 (888) 01234</a><br /><a href="mailto:info@example.com">info@example.com</a></p>
                                        </li>
                                        <li>
                                            <p>256 Brunswick Rd, 3rd Street SA 08219 USA.</p>
                                        </li>
                                    </ul>
                                    <div class="link"><a href="contact.html">Get Direction<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                                <div class="single-item">
                                    <h4>Police Department</h4>
                                    <ul class="info clearfix">
                                        <li>
                                            <p><a href="tel:4488848018">+44 (888) 48018</a><br /><a href="mailto:info@example.com">info@example.com</a></p>
                                        </li>
                                        <li>
                                            <p>191 Integer Rd, 2nd Street SA 08219 USA.</p>
                                        </li>
                                    </ul>
                                    <div class="link"><a href="contact.html">Get Direction<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                                <div class="single-item">
                                    <h4>Fire Department</h4>
                                    <ul class="info clearfix">
                                        <li>
                                            <p><a href="tel:4488801234">+44 (888) 01234</a><br /><a href="mailto:info@example.com">info@example.com</a></p>
                                        </li>
                                        <li>
                                            <p>256 Brunswick Rd, 3rd Street SA 08219 USA.</p>
                                        </li>
                                    </ul>
                                    <div class="link"><a href="contact.html">Get Direction<i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-information-two end -->


        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad">
            <div class="auto-container">
                <div class="form-inner">
                    <div class="sec-title centred">
                        <h6><i class="flaticon-star"></i><span>Drop a Line</span><i class="flaticon-star"></i></h6>
                        <h2>We’re Here to Help You</h2>
                        <div class="title-shape"></div>
                        <p>Fill out this form to send your inquires or complaints to Trust.</p>
                    </div>
                    <form method="post" action="" name="form1" id="form1" class="default-form" onSubmit="return f1();"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 big-column">
                                <div class="form-group">
                                    <input type="text" name="nm" id="nm"placeholder="Your Name" >
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="mo"  id="mo" pattern="[6-9]{1}[0-9]{9}" placeholder="Mobile No">
                                </div>
								<div class="form-group">
                                    <input type="email" name="em" id="em" placeholder="Email Address" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 big-column">
                                <div class="form-group">
                                    <textarea name="msg" id="msg" placeholder="Write Your Message ..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 big-column">
                                <div class="message-btn centred">
                                    
									<input type="submit" name="submit" value="Send Message" class="theme-btn">
									
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="map-inner">
                    <div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5798.080733585595!2d72.12756812482696!3d21.75357919600801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf427dbfd6c46046!2sSwami%20Sahajanand%20College%20of%20Commerce%20and%20Management!5e0!3m2!1sen!2sin!4v1654086144669!5m2!1sen!2sin" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->


        <!-- main-footer -->
        <?php
		include("footer.php");
		?>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fas fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/bxslider.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
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
		alert("Please enter your Mobile No");
		form1.mo.focus();
		return false;
	}
	
	else if(form1.em.value=="")
	{
		alert("Please enter your email");
		form1.em.focus();
		return false;
	}
	
	else if(form1.msg.value=="")
	{
		alert("Please enter your Message");
		form1.msg.focus();
		return false;
	}
}
</script>
