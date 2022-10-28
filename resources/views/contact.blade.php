<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Thehungerproject contact page</title>
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
                <h1 class="m-0 display-4 text-uppercase text-white"></i>Thehungerproject</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url("/about")}}" class="nav-item nav-link">About</a>
                    <a href="{{ url("/#service")}}" class="nav-item nav-link">Service</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link active">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>

        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Contact</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Please <span class="text-primary">Feel Free</span> To Contact Us
            </h1>
        </div>

        <div class="row gx-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" style="height: 600px; width:">
                <p>Digital tools and data science are fastly accelerating innovation<br>and transforming the old era of
                    farming
                </p>

                <h5><span class="text-primary">You a farmer, Enlightened and want to experience<br>the era of open
                        information?</span>
                </h5>

                <p>Trust Us<span class="text-primary"> With Your Data</span></p>
            </div>

            <!--farmers contact form-->
            <div class="col-lg-6">
                <div id="data-form" class="contact-form bg-light p-5">
                    <form method="post" action="{{ url('farm-data') }}" class="row g-3">

                        @csrf
                        <!--Full Name-->
                        <div class="col-12">
                            <input type="text" class="form-control border-0" name="name" placeholder="Your Name"
                                style="height: 55px;" required>
                        </div>
                        <!--End of Full Nam-->

                        <!--Email-->
                        <div class="col-12">
                            <input type="email" class="form-control border-0" name="email" placeholder="your email"
                                style="height: 55px;" required>
                        </div>
                        <!--End of email-->

                        <!--Contact detail-->
                        <div class="col-12 col-sm-6">
                            <input type="tel" class="form-control border-0" name="number" placeholder="contact"
                                style="height: 55px;" required>
                        </div>
                        <!--End of contact-->

                        <!--Address-->
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" name="address" placeholder="address"
                                style="height: 55px;" required>
                        </div>
                        <!--End Of address-->

                        <div class="col-12">
                            <input type="text" class="form-control border-0" name="service_request"
                                placeholder="service to request" style="height: 55px;" required>
                        </div>

                        <div class="col-12">
                            <textarea class="form-control border-0" rows="4" name="experience" placeholder="Please share with us your worst farming experience" required></textarea>
                        </div>

                        <div class="col-12">
                            <textarea class="form-control border-0" rows="3" name="problem"
                                placeholder="Kindly share some of the problems encountered during farming season" required></textarea>
                        </div>

                        <div class="col-12">
                            <textarea class="form-control border-0" rows="3" name="solution"
                                placeholder="How where you were able to solve those problem them?" required></textarea>
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control border-0" name="flood_experience"
                                placeholder="Have your farmland experienced flood or disaster of any kind before? Yes/No"
                                style="height: 55px;" required>
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control border-0" name="farm_location"
                                placeholder="Where was your farmland located?" style="height: 55px;" required>
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control border-0" name="flood_impact"
                                placeholder="Were you able to make harvest after such an event? Yes/No"
                                style="height: 55px;" required>
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control border-0" name="recovery"
                                placeholder="Where you able to recover your lost? Yes/No" style="height: 55px;"
                                required>
                        </div>

                        <div class="col-12">
                            <input type="number" step="any" class="form-control border-0" name="cost_peryear"
                                placeholder="How much does it cummulatively cost yearly in your fields?"
                                style="height: 55px;" required>
                        </div>

                        <div class="col-12">
                            <input type="number" step="any" class="form-control border-0" name="profit_made"
                                placeholder="Total proceeds made from selling crops were?" style="height: 55px;"
                                required>
                        </div>

                        {{-- <!--checkbox-->
                        <div>
                            <input type="checkbox" name="perm_to_share" class="" placeholder="" required> <small>Do you agree for
                                your data to be shared amongst others for this project development?</small>
                        </div>
                        <!--end-of-checkbox--> --}}

                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end of farmers form data-->
        </div>
    </div>
    <!-- Contact End -->

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
    <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">Thehungerproject</a>. All Rights
                    Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

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
</body>

</html>
