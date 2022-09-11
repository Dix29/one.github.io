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
                    <form method="post" action="https://st.ourhtmldemo.com/new/Whitehall/index.html">
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
            <!-- header-lower -->
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


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title centred">
                        <h1>Title Under Image</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- portfolio-section -->
        <section class="portfolio-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6><i class="flaticon-star"></i><span>City Projects</span><i class="flaticon-star"></i></h6>
                    <h2>What We Have Done</h2>
                    <div class="title-shape"></div>
                </div>
                <div class="sortable-masonry">
                    <div class="filters">
                        <ul class="filter-tabs filter-btns centred clearfix">
                            <li class="active filter" data-role="button" data-filter=".all">[ View All ]</li>
                            <li class="filter" data-role="button" data-filter=".conference">Conference</li>
                            <li class="filter" data-role="button" data-filter=".celebration">Celebration</li>
                            <li class="filter" data-role="button" data-filter=".guide">Tourist Guide</li>
                            <li class="filter" data-role="button" data-filter=".industry">Industry</li>
                            <li class="filter" data-role="button" data-filter=".government">Government</li>
                        </ul>
                    </div>
                    <div class="items-container row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all guide conference celebration">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-10.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h4>Mayor Golf Day</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="link"><a href="portfolio-2.html"><i class="flaticon-right-arrow"></i></a></div>
                                        <div class="text">
                                            <p>[ Tourist Guide ]</p>
                                            <h4><a href="portfolio.html">Mayor Golf Day</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all conference guide industry">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-11.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h4>Ancient Roman Sculpture</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="link"><a href="portfolio-2.html"><i class="flaticon-right-arrow"></i></a></div>
                                        <div class="text">
                                            <p>[ Tourist Guide ]</p>
                                            <h4><a href="portfolio.html">Ancient Roman Sculpture</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all guide celebration government">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-12.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h4>St James Park</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="link"><a href="portfolio-2.html"><i class="flaticon-right-arrow"></i></a></div>
                                        <div class="text">
                                            <p>[ Tourist Guide ]</p>
                                            <h4><a href="portfolio.html">St James Park</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all conference celebration industry">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-13.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h4>British Museum</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="link"><a href="portfolio-2.html"><i class="flaticon-right-arrow"></i></a></div>
                                        <div class="text">
                                            <p>[ Tourist Guide ]</p>
                                            <h4><a href="portfolio.html">British Museum</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all guide conference celebration government">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-14.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h4>Tower of London</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="link"><a href="portfolio-2.html"><i class="flaticon-right-arrow"></i></a></div>
                                        <div class="text">
                                            <p>[ Tourist Guide ]</p>
                                            <h4><a href="portfolio.html">Tower of London</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all conference guide industry">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-15.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h4>Job Expo 2020</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="link"><a href="portfolio-2.html"><i class="flaticon-right-arrow"></i></a></div>
                                        <div class="text">
                                            <p>[ Tourist Guide ]</p>
                                            <h4><a href="portfolio.html">Job Expo 2020</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all conference celebration government">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-16.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h4>Parking Clerk</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="link"><a href="portfolio-2.html"><i class="flaticon-right-arrow"></i></a></div>
                                        <div class="text">
                                            <p>[ Tourist Guide ]</p>
                                            <h4><a href="portfolio.html">Parking Clerk</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all guide conference celebration">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-17.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h4>Affordable Parking</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="link"><a href="portfolio-2.html"><i class="flaticon-right-arrow"></i></a></div>
                                        <div class="text">
                                            <p>[ Tourist Guide ]</p>
                                            <h4><a href="portfolio.html">Affordable Parking</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all conference guide industry government">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-18.jpg" alt=""></figure>
                                    <div class="lower-content">

                                        <h4>Buckingham Palace</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="link"><a href="portfolio-2.html"><i class="flaticon-right-arrow"></i></a></div>
                                        <div class="text">
                                            <p>[ Tourist Guide ]</p>
                                            <h4><a href="portfolio.html">Buckingham Palace</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper">
                    <ul class="pagination clearfix">
                        <li><a href="portfolio-2.html"><i class="far fa-angle-double-left"></i></a></li>
                        <li><a href="portfolio-2.html" class="current">1</a></li>
                        <li><a href="portfolio-2.html">2</a></li>
                        <li><a href="portfolio-2.html"><i class="far fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- portfolio-section end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top pt-50">
                <div class="auto-container">
                    <div class="top-inner">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 logo-column">
                                <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12 text-column">
                                <div class="text">
                                    <h3>Services in Your Area</h3>
                                    <P>Enter postcode to view services & facilities in your area.</P>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 form-column">
                                <form action="https://st.ourhtmldemo.com/new/Whitehall/index.html" method="post" class="postcode-form">
                                    <div class="form-group">
                                        <input type="text" name="postcode" placeholder="Your Postcode ..." required="">
                                        <button type="submit">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="departments.html">All Departments</a></li>
                                        <li><a href="police-crime.html">Policing & Crime</a></li>
                                        <li><a href="trasport-traffic.html">Trasport & Traffic</a></li>
                                        <li><a href="housing-land.html">Housing & Land</a></li>
                                        <li><a href="health-medical.html">Health & Medical</a></li>
                                        <li><a href="arts-culture.html">Arts & Culture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Useful Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Administration</a></li>
                                        <li><a href="index.html">Financial Services</a></li>
                                        <li><a href="index.html">Fire Services</a></li>
                                        <li><a href="index.html">Library</a></li>
                                        <li><a href="index.html">Police</a></li>
                                        <li><a href="index.html">Public</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contact Info</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info clearfix">
                                        <li>
                                            <h5>Location</h5>
                                            <p>46, The queen�s walk Street, <br />San Antonio 78154.</p>
                                        </li>
                                        <li>
                                            <h5>Phone</h5>
                                            <p><a href="tel:448881234546">+44 888 12 345 46</a></p>
                                        </li>
                                        <li>
                                            <h5>Email</h5>
                                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget register-widget">
                                <div class="inner-box">
                                    <div class="upper">
                                        <div class="icon-box"><i class="flaticon-edit"></i></div>
                                        <h4>Register Your Complaint</h4>
                                    </div>
                                    <p>Here you can report an issues and make requests.</p>
                                    <a href="index.html">Report Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner clearfix">
                        <div class="copyright pull-left">
                            <p>&copy; 2021 By <a href="index.html">Whitehall City Govt.</a> All Rights Reserved. </p>
                        </div>
                        <ul class="footer-nav clearfix pull-right">
                            <li><a href="index.html">FAQ�s</a></li>
                            <li><a href="index.html">Covid�19 Updates </a></li>
                            <li><a href="index.html">Government</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
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
    <script src="assets/js/isotope.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
