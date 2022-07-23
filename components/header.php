<!doctype html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">


    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/logo.png">
</head>

<body>
    <!-- Pre Loader -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
    <!-- End Pre Loader -->

    <!-- Top Header Start -->
    <header class="top-header top-header-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="header-left">
                        <div class="header-left-card">
                            <ul>
                                <li>
                                    <div class="head-icon">
                                        <i class='bx bx-mail-send'></i>
                                    </div>
                                    <a href="mailto:hello@<?= $site_name; ?>">hello@<?= $site_name; ?></a>
                                </li>

                                <li>
                                    <div class="head-icon">
                                        <i class='bx bx-time-five'></i>
                                    </div>
                                    <a href="#">Monday - Sunday: 24hrs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="header-right">
                        <div class="top-social-link">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-google-plus'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Top Header End -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="assets/img/logo.png" width="" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" width="50" alt="Logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="index" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="about" class="nav-link">
                                    About
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about" class="nav-link">
                                            Know Us
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="doctors" class="nav-link">
                                            Meet our doctors
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="services" class="nav-link">
                                    Services
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services" class="nav-link">
                                            Radiotherapy
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="services" class="nav-link">
                                            Surgery
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="news" class="nav-link">
                                    News
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="contact" class="nav-link">
                                    Contact
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="contact" class="nav-link">
                                            Get to us
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq" class="nav-link">
                                            FAQ
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <!-- <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <i class='search-btn bx bx-group'></i>
                                <i class='close-btn bx bx-x'></i>
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="email" type="text">

                                            <input type="password" name="pwd" id="pwd" placeholder="password">

                                            <button class="search-button" type="submit">
                                                <i class="bx bx-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>