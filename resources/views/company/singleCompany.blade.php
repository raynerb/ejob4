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
            <h3 class="title">Envato</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="company-list.html">Companies</a></li>
                <li class="breadcrumb-item active">Envato</li>
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

                <!-- Company Details Start -->
                <div class="company-details">
                    <h5 class="mb-3">About Envato</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam necessitatibus doloribus soluta ut? Laudantium unde, hic itaque voluptatem nemo ut error fugiat debitis praesentium? Expedita placeat vero quia dolore reprehenderit nostrum velit. Cupiditate qui sunt excepturi dolore nihil, incidunt doloremque, cum dignissimos ex voluptatibus sed sapiente officia obcaecati mollitia distinctio repellat ab molestiae explicabo sequi.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, nesciunt? Velit placeat animi blanditiis eveniet cum doloribus voluptates illo dolore, in aliquid odio quidem quasi fugit quaerat architecto quas magnam autem quod totam deleniti! Veniam accusamus fugit perferendis ducimus enim expedita exercitationem natus porro ratione.</p>
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
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id eos enim distinctio odit nulla repellat exercitationem, fugiat nihil itaque iste amet sapiente molestias voluptas nemo error expedita? Voluptates vitae animi inventore iusto ullam facere modi corporis possimus culpa nostrum maxime delectus tempore, expedita itaque quaerat? Consequuntur quo nostrum quisquam placeat?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo culpa facere perspiciatis consequatur iure repellendus molestias dolore dicta inventore unde, asperiores alias consectetur ipsum cum ea exercitationem voluptatem, veniam mollitia numquam sit et cupiditate, aperiam blanditiis iusto. Dicta officia dolores atque, delectus tempora numquam ducimus? Sunt perspiciatis omnis atque non debitis vero similique illum distinctio?</p>
                </div>
                <!-- Company Details Start -->

                <!-- Job List Wrap Start -->
                <div class="job-list-wrap mt-5">

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
                            <img src="assets/images/companies/company-1.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">$7000 - $13000</span>
                            <span class="badge badge-warning">Part Time</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">Product UI & UX Expert</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">Envato</strong></li>
                                <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                            </ul>
                        </div>
                    </a>
                    <!-- Job List Start -->

                </div>
                <!-- Job List Wrap Start -->

            </div>

            <!-- Company Sidebar Wrap Start -->
            <div class="col-lg-4 col-12 mb-5">
                <div class="sidebar-wrap">
                    <!-- Sidebar (Company) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <div class="sidebar-company">
                                <span class="company-logo"><img src="assets/images/companies/company-1.png" alt="company-1"></span>
                                <h6 class="title">Envato</h6>
                                <ul>
                                    <li><strong>Categories:</strong> <a href="#">Website</a>, <a href="#">Software</a></li>
                                    <li><strong>Founded:</strong> 2006</li>
                                    <li><strong>Team Size:</strong> 50 - 100</li>
                                    <li><strong>Job Open:</strong> 2</li>
                                    <li><strong>Website:</strong> <a href="">envato.com</a></li>
                                    <li><strong>Location:</strong> Melbourne, Australia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar (Company) End -->

                    <!-- Sidebar (Company Location) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Location on Map</h6>
                            <div class="company-location-map google-map" id="company-location-map" data-lat="-37.8172835" data-long="144.9560768" data-zoom="12">
                                <span class="sr-only">Job Location Map</span>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar (Company Location) End -->
                </div>
            </div>
            <!-- Company Sidebar Wrap End -->

        </div>
    </div>
</div>
<!-- Company List End -->
@endsection
