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
            <h3 class="title">Add a new job</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="company-list.html">Companies</a></li>
                <li class="breadcrumb-item active">Create Job</li>
            </ol>
        </div>
    </div>
</div>
<!-- Page Heading Section End -->

<!-- Create Job Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="create-job-form col-lg-10 mx-auto">
                <form action="#">
                    <div class="row mb-n3">
                        <div class="col-md-6 col-12 mb-3">
                            <label for="jobTitle">Job Title</label>
                            <input type="text" id="jobTitle" placeholder="e.g. web design">
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="applicationDeadline">Application Deadline</label>
                            <input type="text" id="applicationDeadline" placeholder="12/24/2019">
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="jobType">Job Type</label>
                            <select id="jobType">
                                <option value="type1">Full Time</option>
                                <option value="type2">Part Time</option>
                                <option value="type3">Freelance</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="jobCategory">Job Category</label>
                            <select id="jobCategory">
                                <option value="type1">Web Design</option>
                                <option value="type2">Ui Ux Design</option>
                                <option value="type3">WordPress Developer</option>
                                <option value="type4">React Developer</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="salaryRange">Salary Range</label>
                            <input type="text" id="salaryRange" placeholder="5k-8k">
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="jobGender">Gender</label>
                            <select id="jobGender">
                                <option value="type1">Any</option>
                                <option value="type2">Male</option>
                                <option value="type3">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="jobExperience">Experience</label>
                            <select id="jobExperience">
                                <option value="type1">1 Year to 2 Year</option>
                                <option value="type2">2 Year to 3 Year</option>
                                <option value="type3">3 Year to 4 Year</option>
                                <option value="type4">4 Year to 5 Year</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="jobEducation">Education</label>
                            <select id="jobEducation">
                                <option>Postdoc</option>
                                <option>Ph.D.</option>
                                <option>Master</option>
                                <option>Bachelor</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="jobDescription">Description</label>
                            <textarea id="jobDescription" rows="5"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-primary px-5">Post Job</button>
                        </div>
                    </div>
                    <div class="row"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Create Job End -->

@endsection
