<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SDG2 ZeroHunger project</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">

            <a href="{{ url('/') }}" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white" id="head-team">Thehungerproject</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('/#service') }}" class="nav-item nav-link">Service</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
            </div>

        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="w-100" src="img/open_data_1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-home fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Open Data Is About People Not Just
                                Innovation</h1>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="img/iot_.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex -column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-tools fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h3 class="display-2 text-uppercase text-white mb-md-4">OPEN DATA IS ONLY USEFULL IF IT's
                                SHARED IN WAYS THAT PEOPLE CAN ACTUALLY UNDERSTAND</h3>
                            <!--<a href="conact.html" class="btn btn-primary py-md-3 px-md-5 mt-2">Contact Us</a>-->
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4" id="about">We are <span class="text-primary">aiming</span>
                    to leverage the data-driven era </h1>

                <h4 class="text-uppercase mb-3 text-body"></h4>

                <p>Of all the SDG's, the UN has made SDG2 thier personal goal to acheive before 2030, which stresses the
                    need to bring hunger to an end.
                </p>

                <p>There is no single cause of of hunger. instead, other attributes contribute to this cause which which
                    must be fully addressed which includes:
                </p>

                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Poverty</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Poor infrastructure</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Climate Change</p>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Warring Conflict</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Flood waste</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Unforseen events</p>
                    </div>
                </div>
                <!--To be filled-->

                <h6>The Idea</h6>
                <p class="mb-4">if everyone will share what he or she knows then at the end of day, everyone would
                    otherwise contribute almost equally a solution to solving that problem.<br>We introduce a data
                    practice - <span><i>open-data<i></span>
                </p>

                <p class="mb-4">the introduction of <i>open data</i> will tremendously contribute to global yield
                    outputs and help mitigate unforseen natural disasters that will impact negatively on agricultural
                    produce.
                </p>
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="img/use_this.jpg"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4" id="service">What we will do to <span
                    class="text-primary">end world hunger</span></h1>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/sign_that_deal.jpg" alt="" style="height: 490px">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-building text-primary"></i>
                    </div>

                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Fundraise</h4>
                        <p>Join the challenge to raise money to end world hunger</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-home text-primary"></i>
                    </div>

                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Lead</h4>
                        <p>Find our women leadership network and empowerment team</p>
                        <small>comming soon..</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/use_this.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-drafting-compass text-primary"></i>
                    </div>

                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Partner</h4>
                        <p>Aiming to collaborate with data providing organizations</p>
                    </div>
                </div>
            </div>
            <!-- Services End -->

            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Pricing</h1>
                <p class="lead">It will be a one time payment of our yearly subcription for individual farmers. but
                    our goal is to interact more with farmers association as it will be less thedious to communicate
                    over a large number of farmers in efffect to that, there will be a 60% discount
                </p>
            </div>

            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Individual pricing</h4>
                    </div>

                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">N25,000<small class="text-muted">/ yr</small></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Data Connectivity</li>
                            <li>Data Visualisation</li>
                            <li>Performance analysis</li>
                            <li>Weather Forecast</li>
                        </ul>

                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign Now</button>
                    </div>
                </div>

                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">farmers group</h4>
                    </div>

                    <div class="card-body">
                        <h3 class="card-title pricing-card-title">N10,000<small class="text-muted">/
                                yr</small></h3>
                        <h1 class="card-title pricing-card-title"><small class="text-muted"></small></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Data Connectivity</li>
                            <li>Data Visualisation</li>
                            <li>Performance analysis</li>
                            <li>Weather Forecast</li>
                        </ul>

                        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                    </div>
                </div>

                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal"></h4>
                    </div>

                    {{-- <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                    <li>30 users included</li>
                    <li>15 GB of storage</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                    </div> --}}
                </div>



                <!-- Appointment Start -->
                <div id="apply" class="container-fluid py-6 px-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="mb-4">
                                <h1 class="display-5 text-uppercase mb-4">JOIN OUR <span
                                        class="text-primary">TEAM</span>
                                </h1>
                            </div>

                            <p class="mb-5">At Thehungerproject, we collectively beleive a better world is
                                possible, the future is great-and to build it, we all together need to be in the
                                driver's seat of change. Wether your job is accounting, data
                                analysis/engineering,web development or consulting, we at Thehungerproject will be
                                united and ignited by supporting change makers in every parts of our community and
                                at large. We value privilege and cultivating opportunities for every one to leanr
                                and grow
                            </p>
                        </div>

                        <div class="col-lg-8">
                            <div class="bg-light text-center p-5">
                                <form method="post" action="{{ url('apply') }}">

                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control border-0"
                                                placeholder="Your Name" name="name" style="height: 55px;">
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <input type="email" class="form-control border-0"
                                                placeholder="Your Email" name="email" style="height: 55px;">
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control border-0"
                                                placeholder="Position To Apply" name="int_position"
                                                style="height: 55px;">
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control border-0"
                                                placeholder="Full Address" name="address" style="height: 55px;">
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control border-0" rows="5" name="message" placeholder="a message for Thehungerproject"></textarea>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Submit
                                                Request</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Appointment End -->

                <div id="app">

                    @include('flash-message')


                    @yield('content')

                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif


                <!-- Footer Start -->
                <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
                    <div class="row g-5">
                        <div class="col-lg-6 pe-lg-5">
                            <a href="index.html" class="navbar-brand">
                                <h1 class="m-0 display-4 text-uppercase text-white" id="footer-heading">
                                    Thehungerproject</h1>
                            </a>

                            <p>An important step towards solving the SDG goal-2(Thehungerproject) is to allow
                                farmers unrestricted access to agricultural big data, we aim to acheive this through
                                <a class="text-primary" href="https://sparcopen.org/open-data/">open data</a>
                            </p>

                            <p><i class="fa fa-map-marker-alt me-2"></i>Code plateau Campus, No. 10, Dagwom Du way,
                                Jos, Nigeria
                            </p>

                            <p><i class="fa fa-phone-alt me-2">+2348101213083</i>+2348101213083</p>

                            <p><i class="fa fa-envelope me-2"></i>zerohunger@gmail.com</p>

                            <div class="d-flex justify-content-start mt-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i
                                        class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <div class="row g-5">
                                <div class="col-sm-6">
                                    <h4 class="text-white text-uppercase mb-4">Quick Links</h4>
                                    <div class="d-flex flex-column justify-content-start">
                                        <a class="text-white-50 mb-2" href="#about"><i
                                                class="fa fa-angle-right me-2"></i>About Us</a>
                                        <a class="text-white-50 mb-2" href="#service"><i
                                                class="fa fa-angle-right me-2"></i>Our Services</a>
                                        <a class="text-white-50" href="contact.html"><i
                                                class="fa fa-angle-right me-2"></i>Contact Us</a>
                                    </div>
                                </div>

                                <div class="col-sm-6"></div>

                                <div class="col-sm-12">
                                    <h4 class="text-white text-uppercase mb-4">Newsletter</h4>
                                    <div class="w-100">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-light"
                                                style="padding: 20px 30px;" placeholder="Your Email Address"><button
                                                class="btn btn-primary px-4">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="py-4 px-5 text-center text-md-start">
                            <p class="mb-0">&copy; <a class="text-primary" href="#">Thehungerproject</a>.
                                All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                        class="bi bi-arrow-up"></i>
                </a>

                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/waypoints/waypoints.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/tempusdominus/js/moment.min.js"></script>
                <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
                <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
                <script src="lib/isotope/isotope.pkgd.min.js"></script>
                <script src="lib/lightbox/js/lightbox.min.js"></script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>
            </div>
        </div>
    </div>
</body>

</html>
