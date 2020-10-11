@extends('layout.ejob')
@section('content')
 <!--Offcanvas Section Start-->
 <div id="offcanvas" class="offcanvas-section">
    <button class="offcanvas-close" data-target="#offcanvas">&times;</button>
    <div class="offcanvas-wrap">
        <div class="inner">

            <!-- Offcanvas user Start -->
            <div class="offcanvas-user">
                <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Login</a>
                <span>or</span>
                <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Sign up</a>
            </div>
            <!-- Offcanvas user End -->

            <!-- Offcanvas Menu Start -->
            <div class="offcanvas-menu">
                <nav>
                    <ul>
                        <li class="has-children"><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="job-list.html">Jobs</a>
                            <ul class="sub-menu">
                                <li><a href="job-list.html">Job List</a></li>
                                <li><a href="job-single.html">Job Single</a></li>
                            </ul>
                        </li>
                        <li><a href="company-list.html">Company</a>
                            <ul class="sub-menu">
                                <li><a href="company-list.html">Company List</a></li>
                                <li><a href="company-single.html">Company Single</a></li>
                                <li><a href="create-job.html">Create Job</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="faq.html">FAQ'S</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Offcanvas Menu End -->

        </div>
    </div>
</div>
<!--Offcanvas Section End-->
<!--OffCanvas Overlay-->
<div class="offcanvas-overlay"></div>


<div class="loginSignupModal modal fade" id="loginSignupModal" tabindex="-1" role="dialog" aria-labelledby="loginSignupModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <ul class="loginSignupNav nav">
                    <li><a class="nav-link active" data-toggle="tab" href="#login">Login</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#signup">Sign up</a></li>
                </ul>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login">
                        <form>
                            <div class="row mb-n3">
                                <div class="col-12 mb-3"><input type="email" placeholder="Email"></div>
                                <div class="col-12 mb-3"><input type="password" placeholder="Password"></div>
                                <div class="col-12 mb-3">
                                    <div class="row justify-content-between mb-n2">
                                        <div class="col-auto mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember-me" id="remember-me" value="checkedValue" class="custom-control-input">
                                                <label class="custom-control-label" for="remember-me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-auto mb-2"><a href="#">Forgot Password?</a></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Login"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-center">
                                    <p class="text-muted">Or Login With</p>
                                    <div class="login-reg-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup">
                        <form>
                            <div class="row mb-n3">
                                <div class="col-12 mb-3"><input type="text" placeholder="Your Name"></div>
                                <div class="col-12 mb-3"><input type="email" placeholder="Your Email Address"></div>
                                <div class="col-12 mb-3"><input type="password" placeholder="Choose a Password"></div>
                                <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Sign Up"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-center">
                                    <p class="text-muted">Or Register With</p>
                                    <div class="login-reg-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Heading Section Start -->
<div class="page-heading-section section bg-parallax" data-bg-image="assets/images/bg/bg-1.jpg" data-overlay="50">
    <div class="container">
        <div class="page-heading-content text-center">
            <h3 class="title">Browse Companies</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Companies</li>
            </ol>
        </div>
    </div>
</div>
<!-- Page Heading Section End -->

<!-- Company List Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row mb-n5">

            <div class="col-lg-8 col-12 mb-5 pr-lg-5">

                <!-- Company List Wrap Start -->
                <div class="company-list-wrap row">

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-1.png" alt="company-1"></span>
                            <h6 class="title">Envato</h6>
                            <span class="open-job">2 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Melbourne, Australia</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-2.png" alt="company-1"></span>
                            <h6 class="title">Astha</h6>
                            <span class="open-job">1 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Dhaka, Bangladesh</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-3.png" alt="company-1"></span>
                            <h6 class="title">Github</h6>
                            <span class="open-job">4 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>San Francisco, USA</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-4.png" alt="company-1"></span>
                            <h6 class="title">Medicore</h6>
                            <span class="open-job">1 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Los Angeles, USA</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-5.png" alt="company-1"></span>
                            <h6 class="title">Greensoul</h6>
                            <span class="open-job">1 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Tokyo, Japan</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-6.png" alt="company-1"></span>
                            <h6 class="title">Generous</h6>
                            <span class="open-job">2 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Osaka, Japan</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-7.png" alt="company-1"></span>
                            <h6 class="title">Buzco</h6>
                            <span class="open-job">3 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Dubai, UAE</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-8.png" alt="company-1"></span>
                            <h6 class="title">Salina</h6>
                            <span class="open-job">1 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Cambridge, UK</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-9.png" alt="company-1"></span>
                            <h6 class="title">Hope</h6>
                            <span class="open-job">1 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Ottawa, Canada</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-10.png" alt="company-span"></span>
                            <h6 class="title">Bebsha</h6>
                            <span class="open-job">2 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Coimbra, Portugal</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-11.png" alt="company-span"></span>
                            <h6 class="title">Fnions</h6>
                            <span class="open-job">1 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Madrid, Spain</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="company-single.html" class="company-list">
                            <span class="company-logo"><img src="assets/images/companies/company-12.png" alt="company-span"></span>
                            <h6 class="title">Donna</h6>
                            <span class="open-job">3 open positions</span>
                            <span class="location"><i class="fa fa-map-o"></i>Liverpool, UK</span>
                        </a>
                    </div>
                    <!-- Company List Start -->

                </div>
                <!-- Company List Wrap Start -->

                <!-- Pagination Start -->
                <ul class="pagination pagination-center mt-5">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- Pagination End -->

            </div>

            <!-- Company Sidebar Wrap Start -->
            <div class="col-lg-4 col-12 mb-5">
                <div class="sidebar-wrap">
                    <!-- Sidebar (Search) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Search Company</h6>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 mb-3"><input type="text" placeholder="Keyword"></div>
                                    <div class="col-12 mb-3">
                                        <label>Category</label>
                                        <select>
                                            <option value="1">Any category</option>
                                            <option value="2">Web Designer</option>
                                            <option value="3">Web Developer</option>
                                            <option value="4">Graphic Designer</option>
                                            <option value="5">App Developer</option>
                                            <option value="6">UI &amp; UX Expert</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Location</label>
                                        <input type="text" placeholder="Location">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Company Sizes</label>
                                        <select>
                                            <option>All Company Size</option>
                                            <option>&lt; 10 employees</option>
                                            <option>10 ~ 50 employees</option>
                                            <option>50 ~ 200 employees</option>
                                            <option>200 ~ 500 employees</option>
                                            <option>500 ~ 2000 employees</option>
                                            <option>&gt; 2000 employees</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="btn btn-primary w-100" type="submit" value="Search">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Search) End -->

                    <!-- Sidebar (Search) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <a class="banner" href="https://hasthemes.com/plugins/ht-mega-pro/" target="_blank"><img src="assets/images/banner/banner-1.jpg" alt="Banner"></a>
                        </div>
                    </div>
                    <!-- Sidebar (Search) End -->
                </div>
            </div>
            <!-- Company Sidebar Wrap End -->

        </div>
    </div>
</div>
<!-- Company List End -->




@endsection
