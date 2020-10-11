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
            <h3 class="title">Full Stack Backend Developer</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="job-list.html">Jobs</a></li>
                <li class="breadcrumb-item active">Full Stack Backend Developer</li>
            </ol>
        </div>
    </div>
</div>
<!-- Page Heading Section End -->

<!-- Recent Jobs Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row mb-n5">

            <!-- Job List Details Start -->
            <div class="col-lg-8 col-12 mb-5 pr-lg-5">
                <div class="job-list-details">
                    <div class="job-details-head row mx-0">
                        <div class="company-logo col-auto">
                            <a href="company-single.html"><img src="assets/images/companies/company-1.png" alt="Company Logo"></a>
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$5000 - $8000</span>
                            <span class="badge badge-success">Full Time</span>
                        </div>
                        <div class="content col">
                            <h5 class="title">Full Stack Backend Developer</h5>
                            <ul class="meta">
                                <li><strong class="text-primary"><a href="company-single.html">Envato</a></strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-details-body">
                        <h6 class="mb-3">Job Description</h6>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, ex iusto! Tenetur iusto dolore amet voluptates esse? Ut debitis perferendis, impedit ullam ea officia sapiente soluta cupiditate molestiae eius enim aut laboriosam, saepe deleniti. Excepturi nobis amet fugit ipsa corrupti!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ratione odit qui inventore maiores labore tenetur earum! Quam eaque, deleniti quibusdam deserunt quos reprehenderit dolor, in quo voluptates maxime nostrum.</p>
                        <h6 class="mb-3 mt-4">Responsibilities</h6>
                        <ul>
                            <li>Proven work experienceas a web designer</li>
                            <li>Demonstrable graphic design skills with a strong portfolio</li>
                            <li>Proficiency in HTML, CSS and JavaScript for rapid prototyping</li>
                            <li>Experience working in an Agile/Scrum development process</li>
                            <li>Proven work experienceas a web designer</li>
                            <li>Excellent visual design skills with sensitivity to user-system interaction</li>
                            <li>Ability to solve problems creatively and effectively</li>
                            <li>Proven work experienceas a web designer</li>
                            <li>Up-to-date with the latest Web trends, techniques and technologies</li>
                            <li>BS/MS in Human-Computer Interaction, Interaction Design or a Visual Arts subject</li>
                        </ul>
                        <h6 class="mb-3 mt-4">Education + Experience</h6>
                        <ul>
                            <li>Advanced degree or equivalent experience in graphic and web design</li>
                            <li>3 or more years of professional design experience</li>
                            <li>Direct response email experience</li>
                            <li>Ecommerce website design experience</li>
                            <li>Familiarity with mobile and web apps preferred</li>
                            <li>Excellent communication skills, most notably a demonstrated ability to solicit and address creative and design feedback</li>
                            <li>Must be able to work under pressure and meet deadlines while maintaining a positive attitude and providing exemplary customer service</li>
                            <li>Ability to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices</li>
                        </ul>
                        <h6 class="mb-3 mt-4">Benefits</h6>
                        <ul>
                            <li>Medical insurance</li>
                            <li>Dental insurance</li>
                            <li>Vision insurance</li>
                            <li>Supplemental benefits (Short Term Disability, Cancer & Accident).</li>
                            <li>Employer-sponsored Basic Life & AD&D Insurance</li>
                            <li>Employer-sponsored Long Term Disability</li>
                            <li>Employer-sponsored Value Adds – Fresh Beanies</li>
                            <li>401(k)with matching</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Job List Details End -->

            <!-- Job Sidebar Wrap Start -->
            <div class="col-lg-4 col-12 mb-5">
                <div class="sidebar-wrap">
                    <!-- Sidebar (Apply Buttons) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <div class="row m-n2">
                                <div class="col-xl-auto col-lg-12 col-sm-auto col-12 p-2">
                                    <a href="#" class="d-block btn btn-outline-secondary"><i class="fa fa-heart-o mr-1"></i> Save Job</a>
                                </div>
                                <div class="col-xl-auto col-lg-12 col-sm-auto col-12 p-2">
                                    <a href="#" class="d-block btn btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar (Apply Buttons) End -->

                    <!-- Sidebar (Job Overview) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Job Overview</h6>
                            <ul class="job-overview list-unstyled">
                                <li><strong>Published on:</strong> Nov 6, 2019</li>
                                <li><strong>Vacancy:</strong> 02</li>
                                <li><strong>Employment Status:</strong> Full-time</li>
                                <li><strong>Experience:</strong> 2 to 3 year(s)</li>
                                <li><strong>Job Location:</strong> Willshire Glen</li>
                                <li><strong>Salary:</strong> $5k - $8k</li>
                                <li><strong>Gender:</strong> Any</li>
                                <li><strong>Application Deadline:</strong> Dec 15, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar (Job Overview) End -->

                    <!-- Sidebar (Job Location) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Job Location</h6>
                            <div class="job-location-map google-map" id="job-location-map" data-lat="-37.8172835" data-long="144.9560768" data-zoom="12">
                                <span class="sr-only">Job Location Map</span>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar (Job Location) End -->
                </div>
            </div>
            <!-- Job Sidebar Wrap End -->

        </div>
    </div>
</div>
<!-- Recent Jobs End -->
@endsection
