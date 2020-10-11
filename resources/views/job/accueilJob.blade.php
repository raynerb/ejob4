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
            <h3 class="title">Browse Jobs</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Jobs</li>
            </ol>
        </div>
    </div>
</div>
<!-- Page Heading Section End -->

<!-- Recent Jobs Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row mb-n5">

            <div class="col-lg-8 col-12 mb-5 pr-lg-5">

                <!-- Job List Toolbar Start -->
                <div class="job-list-toolbar">
                    <p>Showing 1 – 10 of 34 results</p>
                    <p>Sort by:
                        <select>
                            <option>Most Recent</option>
                            <option>Top Rated</option>
                            <option>Most Popular</option>
                        </select>
                    </p>
                </div>
                <!-- Job List Toolbar End -->

                <!-- Job List Wrap Start -->
                <div class="job-list-wrap">

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-1.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Full Stack Backend Developer</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Envato</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-2.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$7000 - $13000</span>
                            <span class="badge badge-warning">Part Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Product UI & UX Expert</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Astha</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-3.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-danger">Freelance</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Full Stack Backend Developer</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Github</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-4.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$7000 - $13000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Product UI & UX Expert</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Medicore</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-5.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Full Stack Backend Developer</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">GreenSoul</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-6.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Full Stack Backend Developer</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">HM Foundation</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-7.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$7000 - $13000</span>
                            <span class="badge badge-warning">Part Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Product UI & UX Expert</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Insuras</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-8.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-danger">Freelance</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Full Stack Backend Developer</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Dhub</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-9.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$7000 - $13000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Product UI & UX Expert</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Biddanondo</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-10.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Full Stack Backend Developer</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Karen</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-1.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Full Stack Backend Developer</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Envato</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-2.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$7000 - $13000</span>
                            <span class="badge badge-warning">Part Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Product UI & UX Expert</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Astha</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-3.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-danger">Freelance</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Full Stack Backend Developer</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Github</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-4.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$7000 - $13000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Product UI & UX Expert</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Medicore</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                    <!-- Job List Start -->
                    <a href="job-single.html" class="job-list">
                        <div class="company-logo col-auto">
                            <img src="assets/images/companies/company-5.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Full Stack Backend Developer</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">GreenSoul</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                </div>
                <!-- Job List Wrap Start -->

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

            <!-- Job Sidebar Wrap Start -->
            <div class="col-lg-4 col-12 mb-5">
                <div class="sidebar-wrap">
                    <!-- Sidebar (Search) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Search Keywords</h6>
                            <form action="#">
                                <input type="text" placeholder="e.g. web design">
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Search) End -->

                    <!-- Sidebar (Category) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Category</h6>
                            <form action="#">
                                <select>
                                    <option value="1">Any category</option>
                                    <option value="2">Web Designer</option>
                                    <option value="3">Web Developer</option>
                                    <option value="4">Graphic Designer</option>
                                    <option value="5">App Developer</option>
                                    <option value="6">UI &amp; UX Expert</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Category) End -->

                    <!-- Sidebar (Location) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Location</h6>
                            <form action="#">
                                <input type="text" placeholder="Location">
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Location) End -->

                    <!-- Sidebar (Job Type) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Job Type</h6>
                            <form action="#" class="mb-n1">
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="jobtype0">
                                    <label class="custom-control-label" for="jobtype0">All type</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="jobtype1">
                                    <label class="custom-control-label" for="jobtype1">Full Time</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="jobtype2">
                                    <label class="custom-control-label" for="jobtype2">Part Time</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="jobtype3">
                                    <label class="custom-control-label" for="jobtype3">Freelance</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="jobtype4">
                                    <label class="custom-control-label" for="jobtype4">Internship</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="jobtype5">
                                    <label class="custom-control-label" for="jobtype5">Temporary</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Job Type) End -->

                    <!-- Sidebar (Salary Range) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Salary Range</h6>
                            <form action="#">
                                <input type="text" id="salary-range" name="salary-range" class="range-slider" value="" />
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Salary Range) End -->

                    <!-- Sidebar (Experince) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Experince</h6>
                            <form action="#" class="mb-n1">
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince0">
                                    <label class="custom-control-label" for="jobExperince0">Any Experince</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince1">
                                    <label class="custom-control-label" for="jobExperince1">1 Year to 2 Year</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince2">
                                    <label class="custom-control-label" for="jobExperince2">2 Year to 3 Year</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince3">
                                    <label class="custom-control-label" for="jobExperince3">3 Year to 4 Year</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince4">
                                    <label class="custom-control-label" for="jobExperince4">4 Year to 5 Year</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Experince) End -->

                    <!-- Sidebar (Date Posted) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Date Posted</h6>
                            <form action="#" class="mb-n1">
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted0">
                                    <label class="custom-control-label" for="jobDatePosted0">Any Date</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted1">
                                    <label class="custom-control-label" for="jobDatePosted1">Last Hour</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted2">
                                    <label class="custom-control-label" for="jobDatePosted2">Last 24 Hours</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted3">
                                    <label class="custom-control-label" for="jobDatePosted3">Last 7 Days</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted4">
                                    <label class="custom-control-label" for="jobDatePosted4">Last 14 days</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted5">
                                    <label class="custom-control-label" for="jobDatePosted5">Last 30 days</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Date Posted) End -->

                    <!-- Sidebar (Qualification) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Qualification</h6>
                            <form action="#" class="mb-n1">
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobQualification" id="jobQualification0">
                                    <label class="custom-control-label" for="jobQualification0">Matriculation</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobQualification" id="jobQualification1">
                                    <label class="custom-control-label" for="jobQualification1">Intermidiate</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" class="custom-control-input" name="jobQualification" id="jobQualification2">
                                    <label class="custom-control-label" for="jobQualification2">Gradute</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Qualification) End -->
                </div>
            </div>
            <!-- Job Sidebar Wrap End -->

        </div>
    </div>
</div>
<!-- Recent Jobs End -->
@endsection
