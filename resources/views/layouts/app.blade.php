<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Rilawacrm</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/img/fav.png" title="Favicon" sizes="16x16" /> -->

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/lib/all.min.css" />
    <link rel="stylesheet" href="assets/css/lib/animate.css" />
    <link rel="stylesheet" href="assets/css/lib/jquery.fancybox.css" />
    <link rel="stylesheet" href="assets/css/lib/lity.css" />
    <link rel="stylesheet" href="assets/css/lib/swiper.min.css" />
    
</head>

<body>
     
     <!-- ====== start navbar ====== -->
     <nav class="navbar navbar-expand-lg navbar-light style-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo_lgr.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase">
                <li class="nav-item">
                        <a class="nav-link" href="{{route('/home')}}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('/feature')}}">
                            Features
                            <small class="hot alert-danger text-danger">hot</small>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('/pricing')}}">
                            Pricing
                           
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('/contact')}}">
                            <img src="assets/img/icons/nav_icon/price.png" alt="" class="icon-15 me-1">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <a href="https://app.rilawacrm.com/login" class="search-icon me-4">
                            <span><i class="bi bi-person"></i></span>
                        </a>
                        <a href="https://app.rilawacrm.com/signup" class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold">
                            <span>Get Started <i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                    </div>
                </div>
                <!-- <div class="nav-side">
                    <div class="d-flex align-items-center">
                        
                       
                    </div>
              
                    
                     <div class="d-flex align-items-center">
    
                     <a href="page-contact-app.html" class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold">
                            <span>Join iteck Hub <i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                        <p>------</p>
                        <a href="https://app.rilawacrm.com/login" class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold">
                        <i class="bi bi-person"></i>
                            <span>Login<i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

   
<div>
    @yield('content')
</div>


<!-- ====== request ====== -->
    <script src="assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="assets/js/lib/wow.min.js"></script>
    <script src="assets/js/lib/jquery.fancybox.js"></script>
    <script src="assets/js/lib/lity.js"></script>
    <script src="assets/js/lib/swiper.min.js"></script>
    <script src="assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="assets/js/lib/jquery.counterup.js"></script>
    <script src="assets/js/lib/pace.js"></script>
    <script src="assets/js/lib/scrollIt.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

