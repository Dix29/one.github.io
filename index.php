<?php
include_once("connect.php");
 $dt=date('Y-m-d');
$ip=$_SERVER['REMOTE_ADDR'];

$qchk=mysqli_query($a,"select * from visitors where v_ip='$ip' and v_date='$dt'")or die ("QF");
if(!mysqli_num_rows($qchk))
{
mysqli_query($a,"insert into visitors (v_ip,v_date) values ('$ip','$dt')")or die ("QF");
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
                            </span>                        </div>
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
                    <form method="post" action="https://st.ourhtmldemo.com/new/Whitehall/index.php">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
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
                        <a href="#" class="close-side-widget"><i class="fal fa-times"></i></a>                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo-2.png" alt="" /></a>                                </div>
                                <div class="content-box">
                                    <h4>Book Now</h4>
                                    <form action="https://st.ourhtmldemo.com/new/Whitehall/index.html" method="post" class="booking-form">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Text"></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit">Send Now</button>
                                        </div>
                                    </form>
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
            <?php 
			include("top_header.php");
			?>
			
            <!-- Menu -->
            <?php 
			include("menu.php");
			?>

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


        <!-- Image slider -->
        
       <?php
	   include("slider.php");
	   ?>
        


        <!-- about-section -->
        <section class="about-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h6><i class="flaticon-star"></i><span>Welcome to Whitehall</span></h6>
                                    <h2>Whitehall is an Inner Metropolitan Municipality</h2>
                                    <div class="title-shape"></div>
                                </div>
                                <div class="text">
                                    <h5>We denounce with righteous indignation and dislike men who are so beguiled demoralized charms of pleasure.</h5>
                                    <h4>Mayor, “Jordan Cooper”</h4>
                                    <p>When our power of choice is untrammelled when nothing prevents our being able to do what we like best, every pleasure is to be welcomed every pain get avoided. But in certain circumstances owing.</p>
                                </div>
                                <div class="inner-box clearfix">
                                    <figure class="signature pull-left"><img src="assets/images/icons/signature.png" alt=""></figure>
                                    <ul class="social-style-one clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                                <div class="icon-box"><i class="flaticon-government"></i></div>
                                                <h5>Mayor Office</h5>
                                                <p><a href="tel:4488812345">+44 (888) 12 345</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                                <div class="icon-box"><i class="flaticon-alert"></i></div>
                                                <h5>Emergency</h5>
                                                <p><a href="tel:911">911</a> (Police, Ambula...)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/Explore-1.jpg" alt=""></figure>
                                <div class="text">
                                    <h4>“Residents Showed Commitment & Courage In this Crucial Situation.”</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- explore-section -->
        <section class="explore-section centred bg-color-2">
            <figure class="vector-image"><img src="assets/images/icons/vector-1.png" alt=""></figure>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="sec-title centred light">
                    <h6><i class="flaticon-star"></i><span>Governance & Strategy</span><i class="flaticon-star"></i></h6>
                    <h2>Explore City Government</h2>
                    <div class="title-shape"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 explore-block">
                        <div class="explore-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/explore-1.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="text">
                                        <div class="icon-box"><i class="flaticon-scroll"></i></div>
                                        <h4>History & Establishment</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h4>History & <br />Establishment</h4>
                                        <p>Toil and pain can procure him some great take a trivial example.</p>
                                        <ul class="link-box clearfix">
                                            <li>
                                                <a href="about.html">
                                                    <i class="flaticon-dog"></i>
                                                    <span>Read More</span>                                                </a>                                            </li>
                                            <li>
                                                <a href="mailto:info@example.com">
                                                    <i class="flaticon-mail-inbox-app"></i>
                                                    <span>info@example.com</span>                                                </a>                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 explore-block">
                        <div class="explore-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/explore-2.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="text">
                                        <div class="icon-box"><i class="flaticon-goverment"></i></div>
                                        <h4>Business & Administration</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h4>Business & <br />Administration</h4>
                                        <p>Toil and pain can procure him some great take a trivial example.</p>
                                        <ul class="link-box clearfix">
                                            <li>
                                                <a href="about.html">
                                                    <i class="flaticon-dog"></i>
                                                    <span>Read More</span>                                                </a>                                            </li>
                                            <li>
                                                <a href="mailto:info@example.com">
                                                    <i class="flaticon-mail-inbox-app"></i>
                                                    <span>info@example.com</span>                                                </a>                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 explore-block">
                        <div class="explore-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/explore-3.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="text">
                                        <div class="icon-box"><i class="flaticon-budget"></i></div>
                                        <h4>Budget & Govt. Policies</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h4>Budget & <br />Govt. Policies</h4>
                                        <p>Toil and pain can procure him some great take a trivial example.</p>
                                        <ul class="link-box clearfix">
                                            <li>
                                                <a href="about.html">
                                                    <i class="flaticon-dog"></i>
                                                    <span>Read More</span>                                                </a>                                            </li>
                                            <li>
                                                <a href="mailto:info@example.com">
                                                    <i class="flaticon-mail-inbox-app"></i>
                                                    <span>info@example.com</span>                                                </a>                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- explore-section end -->


        <!-- explore-banner -->
        <div class="explore-banner bg-color-1">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="single-item">
                        <div class="title-box">
                            <h3>Recent Documents</h3>
                            <p>Enjoy a pleasure that annoying consequences.</p>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></figure>
                            <h4>Tax_Paid_Challan</h4>
                            <p><a href="index.html">Download the Challan Details file</a></p>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></figure>
                            <h4>Tender_Schedules</h4>
                            <p><a href="index.html">Download Your List at Free of Cost</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- explore-banner end -->


        <!-- service-section -->
        <section class="service-section" style="background-image: url(assets/images/background/service-bg.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="police-crime.html">Policing & Crime Department</a></h4>
                                <div class="btn-box"><a href="police-crime.html">More</a></div>
                                <div class="icon-box"><i class="flaticon-police"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                        <div class="sec-title centred">
                            <div class="sec-title centred">
                                <h6><i class="flaticon-star"></i><span>Departments</span><i class="flaticon-star"></i></h6>
                                <h2>Explore Our Departments</h2>
                                <div class="title-shape"></div>
                                <a href="departments.html" class="links">All Departments<i class="flaticon-right-arrow"></i></a>                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="tourism-travel.html">Finance & Legal Department</a></h4>
                                <div class="btn-box"><a href="tourism-travel.html">More</a></div>
                                <div class="icon-box"><i class="flaticon-justice"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="trasport-traffic.html">Transport & Traffic Department</a></h4>
                                <div class="btn-box"><a href="trasport-traffic.html">More</a></div>
                                <div class="icon-box"><i class="flaticon-traffic-sign"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="arts-culture.html">Arts & Culture Department</a></h4>
                                <div class="btn-box"><a href="arts-culture.html">More</a></div>
                                <div class="icon-box"><i class="flaticon-statue"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="housing-land.html">Housing & Land Department</a></h4>
                                <div class="btn-box"><a href="housing-land.html">More</a></div>
                                <div class="icon-box"><i class="flaticon-chinese-house"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="health-medical.html">Health & Medical Department</a></h4>
                                <div class="btn-box"><a href="health-medical.html">More</a></div>
                                <div class="icon-box"><i class="flaticon-hospital"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- schedules-section -->
        <section class="schedules-section sec-pad bg-color-1">
            <div class="bg-layer" style="background-image: url(assets/images/background/schedule-bg.jpg);"></div>
            <div class="auto-container">
                <div class="title-inner">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                            <div class="sec-title light">
                                <h6><i class="flaticon-star"></i><span>Our Calendars</span></h6>
                                <h2>Our Schedules & Routines</h2>
                                <div class="title-shape"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                            <div class="text">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled demoralized charms of pleasure.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="schedule-tab">
                    <div class="tab-btn-box">
                        <ul class="tab-btns schedule-tab-btns clearfix">
                            <li class="p-tab-btn active-btn" data-tab="#tab-1">Upcoming Events</li>
                            <li class="p-tab-btn" data-tab="#tab-2">Upcoming Metings</li>
                            <li class="p-tab-btn" data-tab="#tab-3">Community Calendar</li>
                        </ul>
                    </div>
                    <div class="inner-content">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12 col-sm-12 form-column">
                                <div class="subscribe-inner centred">
                                    <div class="upper-box" style="background-image: url(assets/images/resource/schedule-1.jpg);">
                                        <div class="icon-box"><i class="flaticon-letter"></i></div>
                                        <h3>Subscribe Us</h3>
                                        <p>Get latest News & Events Details.</p>
                                    </div>
                                    <div class="lower-box">
                                        <form action="https://st.ourhtmldemo.com/new/Whitehall/contact.html" method="post" class="subscribe-form">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="mailid@example.com" required="">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn">Subscribe Us</button>
                                            </div>
                                        </form>
                                        <div class="text">
                                            <h6>Never share your email with others.</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                                <div class="p-tabs-content">
                                    <div class="p-tab active-tab" id="tab-1">
                                        <div class="two-column-carousel owl-carousel owl-theme owl-dots-none">
                                            <div class="schedule-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/schedule-2.jpg" alt=""></figure>
                                                        <div class="content-box">
                                                            <div class="post-date"><h3>28<span>Jan’21</span></h3></div>
                                                            <div class="text">
                                                                <span class="category"><i class="flaticon-star"></i>Celebration</span>
                                                                <h4><a href="event-details.html">Public Affairs & Public Safety Committee Meeting</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <ul class="post-info clearfix">
                                                            <li><i class="flaticon-clock-circular-outline"></i>3.00 pm - 4.30 pm</li>
                                                            <li><i class="flaticon-gps"></i>Heaton Park, Mt Road M25 2SW</li>
                                                        </ul>
                                                        <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                        <div class="share-box"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="schedule-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/schedule-3.jpg" alt=""></figure>
                                                        <div class="content-box">
                                                            <div class="post-date"><h3>15<span>Feb’21</span></h3></div>
                                                            <div class="text">
                                                                <span class="category"><i class="flaticon-star"></i>Art & Culture</span>
                                                                <h4><a href="event-details.html">Street San Antonio Sketches & Urban History</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <ul class="post-info clearfix">
                                                            <li><i class="flaticon-clock-circular-outline"></i>10.00 am - 6.30 pm</li>
                                                            <li><i class="flaticon-gps"></i>182 St Georges Road, San Antonio</li>
                                                        </ul>
                                                        <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                        <div class="share-box"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-tab" id="tab-2">
                                        <div class="two-column-carousel owl-carousel owl-theme owl-dots-none">
                                            <div class="schedule-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/schedule-2.jpg" alt=""></figure>
                                                        <div class="content-box">
                                                            <div class="post-date"><h3>28<span>Jan’21</span></h3></div>
                                                            <div class="text">
                                                                <span class="category"><i class="flaticon-star"></i>Celebration</span>
                                                                <h4><a href="event-details.html">Public Affairs & Public Safety Committee Meeting</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <ul class="post-info clearfix">
                                                            <li><i class="flaticon-clock-circular-outline"></i>3.00 pm - 4.30 pm</li>
                                                            <li><i class="flaticon-gps"></i>Heaton Park, Mt Road M25 2SW</li>
                                                        </ul>
                                                        <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                        <div class="share-box"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="schedule-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/schedule-3.jpg" alt=""></figure>
                                                        <div class="content-box">
                                                            <div class="post-date"><h3>15<span>Feb’21</span></h3></div>
                                                            <div class="text">
                                                                <span class="category"><i class="flaticon-star"></i>Art & Culture</span>
                                                                <h4><a href="event-details.html">Street San Antonio Sketches & Urban History</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <ul class="post-info clearfix">
                                                            <li><i class="flaticon-clock-circular-outline"></i>10.00 am - 6.30 pm</li>
                                                            <li><i class="flaticon-gps"></i>182 St Georges Road, San Antonio</li>
                                                        </ul>
                                                        <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                        <div class="share-box"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-tab" id="tab-3">
                                        <div class="two-column-carousel owl-carousel owl-theme owl-dots-none">
                                            <div class="schedule-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/schedule-2.jpg" alt=""></figure>
                                                        <div class="content-box">
                                                            <div class="post-date"><h3>28<span>Jan’21</span></h3></div>
                                                            <div class="text">
                                                                <span class="category"><i class="flaticon-star"></i>Celebration</span>
                                                                <h4><a href="event-details.html">Public Affairs & Public Safety Committee Meeting</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <ul class="post-info clearfix">
                                                            <li><i class="flaticon-clock-circular-outline"></i>3.00 pm - 4.30 pm</li>
                                                            <li><i class="flaticon-gps"></i>Heaton Park, Mt Road M25 2SW</li>
                                                        </ul>
                                                        <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                        <div class="share-box"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="schedule-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/schedule-3.jpg" alt=""></figure>
                                                        <div class="content-box">
                                                            <div class="post-date"><h3>15<span>Feb’21</span></h3></div>
                                                            <div class="text">
                                                                <span class="category"><i class="flaticon-star"></i>Art & Culture</span>
                                                                <h4><a href="event-details.html">Street San Antonio Sketches & Urban History</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <ul class="post-info clearfix">
                                                            <li><i class="flaticon-clock-circular-outline"></i>10.00 am - 6.30 pm</li>
                                                            <li><i class="flaticon-gps"></i>182 St Georges Road, San Antonio</li>
                                                        </ul>
                                                        <div class="links"><a href="event-details.html">Read More<i class="flaticon-right-arrow"></i></a></div>
                                                        <div class="share-box"><a href="index.html">Share<i class="fas fa-share-alt"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- schedules-section end -->


        <!-- solutions-section -->
        <section class="solutions-section">
            <figure class="image-layer"><img src="assets/images/resource/statue-1.png" alt=""></figure>
            <div class="pattern-box">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                <div class="pattern-4 float-bob-y" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6><i class="flaticon-star"></i><span>Online Services</span><i class="flaticon-star"></i></h6>
                    <h2>Instant Solutions For All</h2>
                    <div class="title-shape"></div>
                </div>
                <div class="inner-container">
                    <div class="upper-box clearfix">
                        <div class="solution-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-click"></i></div>
                                <h4>Taxes & Bills</h4>
                                <p>Residential & Non-residential</p>
                            </div>
                        </div>
                        <div class="solution-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-click"></i></div>
                                <h4>Building Sanction</h4>
                                <p>Procedure for building permission</p>
                            </div>
                        </div>
                        <div class="solution-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-click"></i></div>
                                <h4>Commencement</h4>
                                <p>Every pain get avoided in certain</p>
                            </div>
                        </div>
                        <div class="solution-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-click"></i></div>
                                <h4>Vendor Registration</h4>
                                <p>Start your business with register</p>
                            </div>
                        </div>
                        <div class="solution-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-click"></i></div>
                                <h4>Birth Cirtificate</h4>
                                <p>Apply & Track birth registration</p>
                            </div>
                        </div>
                        <div class="solution-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-click"></i></div>
                                <h4>Fire NOC</h4>
                                <p>Login or Register to get NOC</p>
                            </div>
                        </div>
                        <div class="solution-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-click"></i></div>
                                <h4>Taxis & Private</h4>
                                <p>Information about registration ...</p>
                            </div>
                        </div>
                        <div class="solution-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-click"></i></div>
                                <h4>Death Certificate</h4>
                                <p>Apply & Track death registration</p>
                            </div>
                        </div>
                        <div class="solution-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-click"></i></div>
                                <h4>Raise Complaints</h4>
                                <p>File grievances against department</p>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box clearfix">
                        <div class="bg-layer" style="background-image: url(assets/images/background/bg-1.jpg);"></div>
                        <div class="text pull-left">
                            <div class="icon-box"><i class="flaticon-idea"></i></div>
                            <h3>Share Your Ideas to Help Our City’s Future.</h3>
                            <p>We all have different interests, needs and hopes for our city future. What do you think?</p>
                        </div>
                        <div class="btn-box pull-right">
                            <a href="index.html" class="theme-btn">Share your Say</a>                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- solutions-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section centred" style="background-image: url(assets/images/background/testimonial-bg.jpg);">
            <div class="auto-container">
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                            <div class="text">
                                <p>Perfectly simple & easy to free hour when our power choice is nothing too prevents our being able what all get we like best pleasure.</p>
                            </div>
                            <div class="author-box">
                                <h4>Bertram Irvin</h4>
                                <span class="designation">Citizen</span>                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                            <div class="text">
                                <p>I am highly impressed with the professionalism and passion of the people in this warehouse well educated, neat and clean city life.</p>
                            </div>
                            <div class="author-box">
                                <h4>Ivan Johny</h4>
                                <span class="designation">Visitors from Indonasia</span>                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                            <div class="text">
                                <p>The wise man therefore always holds in these matters to this on principle off selection rejects  to secure others greater pleasures.</p>
                            </div>
                            <div class="author-box">
                                <h4>Lucian Manroe</h4>
                                <span class="designation">Citizen</span>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- team-section -->
        <section class="team-section sec-pad bg-color-1">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h6><i class="flaticon-star"></i><span>Whitehall Team</span></h6>
                    <h2>Meet Council Members</h2>
                    <div class="title-shape"></div>
                    <a href="index.html" class="theme-btn">All members</a>                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index.html"><img src="assets/images/team/team-1.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <h4><a href="index.html">Bertram Irvin</a></h4>
                                        <span class="designation">President</span>                                    </div>
                                    <ul class="othre-info clearfix">
                                        <li class="mail-box"><a href="index.html"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                        <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                        <li class="share-option">
                                            <i class="share-icon flaticon-share"></i>
                                            <ul class="share-links clearfix">
                                                <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index.html"><img src="assets/images/team/team-2.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <h4><a href="index.html">Elvina Julie</a></h4>
                                        <span class="designation">Actuary</span>                                    </div>
                                    <ul class="othre-info clearfix">
                                        <li class="mail-box"><a href="index.html"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                        <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                        <li class="share-option">
                                            <i class="share-icon flaticon-share"></i>
                                            <ul class="share-links clearfix">
                                                <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index.html"><img src="assets/images/team/team-3.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <h4><a href="index.html">Herman Gordon</a></h4>
                                        <span class="designation">Director</span>                                    </div>
                                    <ul class="othre-info clearfix">
                                        <li class="mail-box"><a href="index.html"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                        <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                        <li class="share-option">
                                            <i class="share-icon flaticon-share"></i>
                                            <ul class="share-links clearfix">
                                                <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index.html"><img src="assets/images/team/team-4.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <h4><a href="index.html">Marian Lenora</a></h4>
                                        <span class="designation">Speaker</span>                                    </div>
                                    <ul class="othre-info clearfix">
                                        <li class="mail-box"><a href="index.html"><i class="flaticon-mail-inbox-app"></i>Email</a></li>
                                        <li class="phone-box"><i class="flaticon-emergency-call"></i><a href="tel:4488812345">+44 888 12 345</a></li>
                                        <li class="share-option">
                                            <i class="share-icon flaticon-share"></i>
                                            <ul class="share-links clearfix">
                                                <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!-- news-section -->
        <section class="news-section bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6><i class="flaticon-star"></i><span>News & Blog</span><i class="flaticon-star"></i></h6>
                    <h2>Latest From Our Newsroom</h2>
                    <div class="title-shape"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-1.jpg" alt="">                                    </figure>
                                    <div class="post-date"><h3>28<span>Jan’21</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="index.html"><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a href="blog-details.html">Mayor Invites Medical Experts to Discuss about Covid</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-2.jpg" alt="">                                    </figure>
                                    <div class="post-date"><h3>14<span>Dec’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="index.html"><i class="flaticon-star"></i>Education</a></div>
                                    <h4><a href="blog-details.html">Outdoor Dining to be Extended this Summer</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Bert Anslem</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-3.jpg" alt="">                                    </figure>
                                    <div class="post-date"><h3>06<span>Nov’20</span></h3></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="index.html"><i class="flaticon-star"></i>Announcement</a></div>
                                    <h4><a href="blog-details.html">Supporting Local Businesses to Bounce Back</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Harley Reuban</a></li>
                                        <li><i class="far fa-comment"></i><a href="blog-details.html">0 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- funfact-section -->
        <section class="funfact-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-7.png);"></div>
            <div class="auto-container">
                <div class="funfact-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                            <div class="sec-title">
                                <h6><i class="flaticon-star"></i><span>Interesting Facts</span></h6>
                                <h2>City In Numbers</h2>
                                <div class="title-shape"></div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                            <div class="funfact-inner centred">
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                        <div class="funfact-block-one">
                                            <div class="inner-box">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="1500" data-stop="45">0</span><span>k</span>                                                </div>
                                                <h6>City Population</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                        <div class="funfact-block-one">
                                            <div class="inner-box">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="1500" data-stop="168">0</span>                                                </div>
                                                <h6>Total Area in Sq.mi</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                        <div class="funfact-block-one">
                                            <div class="inner-box">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="1500" data-stop="1.5">0</span><span>M</span>                                                </div>
                                                <h6>Average Revenue</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                        <div class="funfact-block-one">
                                            <div class="inner-box">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="1500" data-stop="<?php
		$qcount=mysqli_query($a,"select count(vid) from visitors")or die ("QF V");
		$datacount=mysqli_fetch_array($qcount);
		echo 500+$datacount[0];				 
		?>">0</span><span></span>                                                </div>
                                                <h6>Visitors</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="twitter-feed">
                    <div class="inner-content clearfix">
                        <div class="single-item">
                            <div class="title-box centred">
                                <div class="pattern" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                <div class="icon-box"><i class="fab fa-twitter"></i></div>
                                <h4>San Antonio on Twitter</h4>
                                <a href="index.html">Follow Us</a>                            </div>
                        </div>
                        <div class="single-item">
                            <div class="inner-box">
                                <h5><i class="far fa-calendar"></i>01 January, 2021</h5>
                                <div class="text">
                                    <p>Official Twitter channel providing support for users of the <a href="index.html">Http://gov.usa</a> website. This is not a political account and cannot respond to political tweets.</p>
                                    <a href="index.html">Visit: https://covid19test.sananto.com</a>                                </div>
                                <ul class="post-info clearfix">
                                    <li><i class="far fa-comment"></i><a href="index.html">28 Cmnts</a></li>
                                    <li><i class="far fa-heart"></i><a href="index.html">18 Likes</a></li>
                                </ul>
                                <div class="share"><a href="index.html"><i class="fas fa-share-alt"></i>Share</a></div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="inner-box">
                                <h5><i class="far fa-calendar"></i>25 December, 2020</h5>
                                <div class="text">
                                    <p>Beguiled and demoralized by the charms of pleasure all <a href="index.html">http://sanantonio.gov/</a> disclaimer blinded desire that circumtances cannot foresee the pain.</p>
                                </div>
                                <ul class="post-info clearfix">
                                    <li><i class="far fa-comment"></i><a href="index.html">10 Cmnts</a></li>
                                    <li><i class="far fa-heart"></i><a href="index.html">20 Likes</a></li>
                                </ul>
                                <div class="share"><a href="index.html"><i class="fas fa-share-alt"></i>Share</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <!-- main-footer -->
        <?php
		include("footer_home.php");
		?>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fas fa-angle-up"></span>        </button>
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

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
