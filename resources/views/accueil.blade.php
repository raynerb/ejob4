
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

<!-- Slider Section Start -->
<div class="slider-section section">
    <div class="slide-item bg-parallax" data-bg-image="assets/images/slider/slider-1.jpg" data-overlay="50">
        <div class="container">
            <div class="slider-content text-center">
                <h2 class="title">Trouvez votre prochain emploi</h2>
                <p>More then <span>1,524</span> job listed here.</p>
            </div>
        </div>
    </div>
</div>
<!-- Slider Section End -->

<!-- Job Search Section Start -->
<div class="job-search-section section">
    <div class="container">
        <div class="job-search-wrap">

            <!-- Job Search Form Start -->
            <div class="job-search-form">
                <form action="#">
                    <div class="row mb-n4">

                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-4">
                            <input type="text" placeholder="e.g. web design">
                        </div>

                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-4">
                            <input type="text" placeholder="Location">
                        </div>

                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-4">
                            <select>
                                <option value="1">Any category</option>
                                <option value="2">Web Designer</option>
                                <option value="3">Web Developer</option>
                                <option value="4">Graphic Designer</option>
                                <option value="5">App Developer</option>
                                <option value="6">UI &amp; UX Expert</option>
                            </select>
                        </div>

                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-4">
                            <button class="btn btn-primary">Search</button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- Job Search Form End -->

        </div>
    </div>
</div>
<!-- Job Search Section End -->

<!-- Recent Jobs Start -->
<div class="section section-padding">
    <div class="container">
        <div class="section-title">
            <h2 class="title">Latest Jobs</h2>
            <p>Here's the most recent job listed on the website.</p>
        </div>

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

        </div>
        <!-- Job List Wrap Start -->

        <div class="text-center mt-4 mt-lg-5">
            <a href="job-list.html" class="btn btn-primary">View All Jobs</a>
        </div>

    </div>
</div>
<!-- Recent Jobs End -->

<!-- Funfact Section Start -->
<div class="section section-padding bg-parallax" data-bg-image="assets/images/bg/bg-1.jpg" data-overlay="50">
    <div class="container">
        <div class="funfact-wrap row">

            <!-- Funfact Start -->
            <div class="funfact col-md-3 col-sm-6 col-12">
                <span class="counter">1354</span>
                <span class="title">Job Post</span>
            </div>
            <!-- Funfact Start -->

            <!-- Funfact Start -->
            <div class="funfact col-md-3 col-sm-6 col-12">
                <span class="counter">1741</span>
                <span class="title">Members</span>
            </div>
            <!-- Funfact Start -->

            <!-- Funfact Start -->
            <div class="funfact col-md-3 col-sm-6 col-12">
                <span class="counter">1204</span>
                <span class="title">Resume</span>
            </div>
            <!-- Funfact Start -->

            <!-- Funfact Start -->
            <div class="funfact col-md-3 col-sm-6 col-12">
                <span class="counter">142</span>
                <span class="title">Company</span>
            </div>
            <!-- Funfact Start -->

        </div>
    </div>
</div>
<!-- Funfact Section End -->

<!-- Featured Conpanies Start -->
<div class="section section-padding">
    <div class="container">
        <div class="section-title">
            <h2 class="title">Featured Companies</h2>
            <p>Here's the most job listed by those companies.</p>
        </div>

        <!-- Company List Wrap Start -->
        <div class="company-slider row">

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-1.png" alt="company-1"></span>
                    <h6 class="title">Envato</h6>
                    <span class="open-job">2 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-2.png" alt="company-1"></span>
                    <h6 class="title">Astha</h6>
                    <span class="open-job">1 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-3.png" alt="company-1"></span>
                    <h6 class="title">Github</h6>
                    <span class="open-job">4 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-4.png" alt="company-1"></span>
                    <h6 class="title">Medicore</h6>
                    <span class="open-job">1 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-5.png" alt="company-1"></span>
                    <h6 class="title">Greensoul</h6>
                    <span class="open-job">1 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-6.png" alt="company-1"></span>
                    <h6 class="title">Generous</h6>
                    <span class="open-job">2 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-7.png" alt="company-1"></span>
                    <h6 class="title">Buzco</h6>
                    <span class="open-job">3 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-8.png" alt="company-1"></span>
                    <h6 class="title">Salina</h6>
                    <span class="open-job">1 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-9.png" alt="company-1"></span>
                    <h6 class="title">Hope</h6>
                    <span class="open-job">1 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo"><img src="assets/images/companies/company-10.png" alt="company-span"></span>
                    <h6 class="title">Bebsha</h6>
                    <span class="open-job">2 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

        </div>
        <!-- Company List Wrap Start -->

    </div>
</div>
<!-- Featured Conpanies End -->

<!-- Testimonial Section Start -->
<div class="section section-padding bg-parallax" data-bg-image="assets/images/bg/bg-2.jpg" data-overlay="65">
    <div class="container">

        <!-- Testimonial Slider Start -->
        <div class="testimonial-slider row">

            <!-- Testimonial Start -->
            <div class="col">
                <div class="testimonial text-center text-white">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, modi sed praesentium necessitatibus tenetur neque, veritatis esse voluptatem</p>
                    <img src="assets/images/authors/author-1.jpg" alt="">
                    <h6 class="name">Sharon Harper</h6>
                    <span class="title">Marketer of Hastech</span>
                </div>
            </div>
            <!-- Testimonial End -->

            <!-- Testimonial Start -->
            <div class="col">
                <div class="testimonial text-center text-white">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, modi sed praesentium necessitatibus tenetur neque, veritatis esse voluptatem</p>
                    <img src="assets/images/authors/author-2.jpg" alt="">
                    <h6 class="name">Harold McCoy</h6>
                    <span class="title">CEO of Hastech</span>
                </div>
            </div>
            <!-- Testimonial End -->

            <!-- Testimonial Start -->
            <div class="col">
                <div class="testimonial text-center text-white">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, modi sed praesentium necessitatibus tenetur neque, veritatis esse voluptatem</p>
                    <img src="assets/images/authors/author-3.jpg" alt="">
                    <h6 class="name">Ronald Wright</h6>
                    <span class="title">Admin of Hastech</span>
                </div>
            </div>
            <!-- Testimonial End -->

        </div>
        <!-- Testimonial Slider End -->

    </div>
</div>
<!-- Testimonial Section End -->

<!-- Blog Section Start -->
<div class="section section-padding">
    <div class="container">

        <div class="section-title">
            <h3 class="title">Our Blog</h3>
            <p>Get more tips & tricks from out blog post.</p>
        </div>

        <!-- Blog Slider Start -->
        <div class="blog-slider row">

            <!-- Blog Start -->
            <div class="col">
                <div class="blog">
                    <div class="media">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="content">
                        <h6 class="title"><a href="blog-single.html">The Top 5 Job Interview Questions For IT Professional</a></h6>
                        <ul class="meta">
                            <li>Posted on 25 Jan, 2019</li>
                            <li><a href="#">3 Comments</a></li>
                        </ul>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                        </div>
                        <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

            <!-- Blog Start -->
            <div class="col">
                <div class="blog">
                    <div class="media">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                    </div>
                    <div class="content">
                        <h6 class="title"><a href="blog-single.html">7 Careers To Consider If You Love Traveling</a></h6>
                        <ul class="meta">
                            <li>Posted on 25 Jan, 2019</li>
                            <li><a href="#">3 Comments</a></li>
                        </ul>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                        </div>
                        <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

            <!-- Blog Start -->
            <div class="col">
                <div class="blog">
                    <div class="media">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                    </div>
                    <div class="content">
                        <h6 class="title"><a href="blog-single.html">When the Perfect Candidate Turns Out To Be an Imperfect Fit</a></h6>
                        <ul class="meta">
                            <li>Posted on 25 Jan, 2019</li>
                            <li><a href="#">3 Comments</a></li>
                        </ul>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                        </div>
                        <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

        </div>
        <!-- Blog Slider End -->

    </div>
</div>
<!-- Blog Section End -->
@endsection
