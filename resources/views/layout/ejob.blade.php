<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Job - @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/slick.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

    <header class="header">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img src="/assets/images/logo/logo-light.png" alt="Site Logo"></a>
                    </div>
                </div><!-- Header Logo End -->

                <!-- Offcanvas Toggle Start -->
                <div class="col-auto d-lg-none d-flex align-items-center">
                    <button class="offcanvas-toggle">
                        <span></span>
                    </button>
                </div>
                <!-- Offcanvas Toggle End -->

                <!-- Header Links Start -->
                <div class="header-links col-auto order-lg-3">
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Login</a>
                    <span>or</span>
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Sign up</a>
                </div><!-- Header Links End -->

                <!-- Header Menu Start -->
                <nav id="main-menu" class="main-menu col-lg-auto order-lg-2">
                    <ul>
                        <li class="has-children"><a href="/">Accueil</a>
                        </li>
                        <li class="has-children"><a href="job-list.html">Emplois</a>
                            <ul class="sub-menu">
                                <li><a href="/job">Liste des Emplois</a></li>
                                <li><a href="/jobsingle">Job Single</a></li>
                            </ul>
                        </li>
                        <li><a href="company-list.html">Entreprise</a>
                            <ul class="sub-menu">
                                <li><a href="/listcompany">Liste des Entreprises</a></li>
                                <li><a href="/company">Company Single</a></li>
                                <li><a href="/createcompanyjob">Créer un Emploi</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="/aboutus">About Us</a></li>
                                <li><a href="/faq">FAQ'S</a></li>
                                <li><a href="/price">Pricing</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <!--<li><a href="blog.html">Blog</a></li>-->
                                <li><a href="/blog">Blog Right Sidebar</a></li>
                                <!--<li><a href="blog-single.html">Blog Single</a></li>-->
                            </ul>
                        </li>
                        <li><a href="/contact">Contact us</a></li>
                    </ul>
                </nav>
                <!-- Header Menu End -->

            </div>

        </div>
    </header>

    @yield('content')

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section">
        <div class="container">
            <div class="footer-widget-wrap row">

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="footer-widget-about">
                            <img src="assets/images/logo/logo-light.png" alt="">
                            <p>Lorem ipsum dolor sit amet consecte tur adipisicing elit. Maiores officiis quod quo id inventore quis.</p>

                            <ul class="footer-socail">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h6 class="title">Quick links</h6>
                        <div class="footer-widget-link">
                            <ul>
                                <li><a href="#">Post New Job</a></li>
                                <li><a href="#">Jobs List</a></li>
                                <li><a href="#">Candidate List</a></li>
                                <li><a href="#">Employer List</a></li>
                                <li><a href="#">Browse Categories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h6 class="title">Tranding Jobs</h6>
                        <div class="footer-widget-link">
                            <ul>
                                <li><a href="#">Designer</a></li>
                                <li><a href="#">UI & UX Expert</a></li>
                                <li><a href="#">Develpoer</a></li>
                                <li><a href="#">iOS developer</a></li>
                                <li><a href="#">Front-End developer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h6 class="title">Newsletter</h6>
                        <div class="footer-widget-newsletter">
                            <p>Subscribe to Lawson to get all latest Job, Resume, Company Listing & Blog post to stay update.</p>
                            <form id="mc-form" class="mc-form">
                                <input id="mc-email" autocomplete="off" type="email" placeholder="Enter your e-mail address">
                                <button id="mc-submit" class="btn"><i class="fa fa-envelope-o"></i></button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

            </div>
        </div>
    </div>
    <!-- Footer Top Section End -->

    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section">
        <div class="container">
            <div class="row">

                <!-- Footer Copyright Start -->
                <div class="col-12">
                    <p class="footer-copyright text-center">Copyright &copy; 2019 <a href="https://hasthemes.com/">Hasthemes</a> All Rights Reserved.</p>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
    </div>
    <!-- Footer Bottom Section End -->

    <!-- JS
============================================ -->

    <!-- Google Map API JS -->
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/jquery.parallax.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/jquery.scrollUp.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
