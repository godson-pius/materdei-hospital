<?php
$title = "Mater Dei - Specialist Hospital"; include('./config.php');
?>

<?php include('./components/header.php'); ?>

<div class="side-nav-responsive">
    <div class="container">
        <div class="dot-menu">
            <div class="circle-inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
            </div>
        </div>

        <div class="container">
            <div class="side-nav-inner">
                <div class="side-nav justify-content-center align-items-center">
                    <div class="side-item">
                        <div class="option-item">
                            <i class='search-btn bx bx-search'></i>
                            <i class='close-btn bx bx-x'></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text">

                                        <button class="search-button" type="submit">
                                            <i class="bx bx-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="add-cart-btn">
                                <a href="#" class="cart-btn-icon">
                                    <i class='bx bx-shopping-bag'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Navbar Area -->

<!-- Banner Area -->
<div class="banner-area banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="banner-content">
                    <span>MATER DEI SPECIALIST HOSPITAL</span>
                    <h1>Your Health is Our Responsibility</h1>
                    <p>Get your appointment through online and remain safe at your home. Because your safety is our
                        first priority.</p>
                    <div class="banner-btn">
                        <a href="appointment.html" class="appointment-btn">Request Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-img">
        <img src="assets/img/home-one/home-one-img.png" alt="Images">
    </div>
    <div class="banner-shape">
        <div class="shape1">
            <img src="assets/img/home-one/shape1.png" alt="Images">
        </div>
        <div class="shape2">
            <img src="assets/img/home-one/shape2.png" alt="Images">
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Banner Bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-bottom-card">
                    <i class='flaticon-call'></i>
                    <div class="content">
                        <span>Get Emergency Service At 24/7</span>
                        <h3><a href="tel:+8-(123)-456-789-12">+8 (123) 456 789 12</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Bottom End -->

<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="assets/img/about-img/about.png" alt="Images">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>We Are Your Trusted Friend</h2>
                        <p><?= $hospital_name; ?> is a trusted name of Medical Services who is always at your side and your health is
                            our first priority.</p>
                        <p>
                            <?= $hospital_name; ?> care will be administered through plan-based customizable programs that incorporate
                            partnership between
                            family members and the care givers for long term illness or disease management.
                        </p>
                    </div>
                    <div class="about-card">
                        <i class='flaticon-24-hours bg-one'></i>
                        <div class="content">
                            <span>24/7 Support</span>
                            <p>We provide exceptional and compassionate care to our patients. </p>
                        </div>
                    </div>

                    <div class="about-card">
                        <i class='flaticon-ambulance-2 bg-two'></i>
                        <div class="content">
                            <span>Emergency Support</span>
                            <p>We are always here 24hrs of day to help you out.</p>
                        </div>
                    </div>

                    <div class="about-btn">
                        <a href="about" class="default-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Appointment Area -->
<?php include('./components/appointment.php'); ?>
<!-- Appointment Area End -->

<!-- Service Area -->
<?php include('./components/services.php'); ?>
<!-- Service Area End -->
<?php include('./components/consultancy.php'); ?>
<!-- Consultancy Area -->

<!-- Consultancy Area End -->

<!-- Doctors Area -->
<?php include('./components/doctors.php'); ?>
<!-- Doctors Area End -->

<!-- Emergency Area -->
<div class="emergency-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="emergency-content">
                    <h2>Get <b>Emergency</b> Care 24/7</h2>
                    <p>We are always at your side. We are 24 hours available for you in emergency situation.</p>
                    <div class="emergency-icon-content">
                        <i class="flaticon-24-hours-1"></i>
                        <h3><a href="tel:+8-(123)-456-789-12">+8 (123) 456 789 12</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="emergency-shape">
        <img src="assets/img/emergency/emergency-shape.png" alt="Images">
    </div>
</div>
<!-- Emergency Area End -->

<!-- Blog Area -->
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our News & Articles</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
            <p>
                We provide excellent services for your ultimate good health. Here are some articles included
                for your better understanding that we are always keep you healthy.
            </p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="blog-details.html">
                        <img src="assets/img/blog/blog-img.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>
                                <i class="flaticon-calendar-1"></i>
                                August 31, 2020
                                <span>
                                    <a href="#">Healthcare</a>
                                </span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html"> Lockdowns Leads to Fewer Peo - Ple Seeking Medical Care</a>
                        </h3>
                        <p>Victoria’s State of Emergency (SOE) measures resulted in almost 40 per cent less people prese
                            nting to Alfred Health’s....</p>
                        <a href="blog-details.html" class="more-btn">
                            Read More <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="blog-details.html">
                        <img src="assets/img/blog/blog-img2.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>
                                <i class="flaticon-calendar-1"></i>
                                August 24, 2020
                                <span>
                                    <a href="#">Medicine</a>
                                </span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html"> Emergency Medicine Research Course for the Doctors</a>
                        </h3>
                        <p>Victoria’s State of Emergency (SOE) measures resulted in almost 40 per cent less people prese
                            nting to Alfred Health’s....</p>
                        <a href="blog-details.html" class="more-btn">
                            Read More <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="blog-details.html">
                        <img src="assets/img/blog/blog-img2.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>
                                <i class="flaticon-calendar-1"></i>
                                August 24, 2020
                                <span>
                                    <a href="#">Medicine</a>
                                </span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html"> Emergency Medicine Research Course for the Doctors</a>
                        </h3>
                        <p>Victoria’s State of Emergency (SOE) measures resulted in almost 40 per cent less people prese
                            nting to Alfred Health’s....</p>
                        <a href="blog-details.html" class="more-btn">
                            Read More <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>

           

            <div class="col-lg-12">
                <div class="blog-more-btn">
                    <a href="news" class="default-btn">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-shape-icon">
        <i class="flaticon-dna"></i>
    </div>
</div>
<!-- Blog Area End -->

<!-- Testimonials Area -->
<?php include('./components/testimonials.php'); ?>
<!-- Testimonials Area End -->

<!-- Brand Area -->
<??>
<!-- Brand Area End -->
<?php include('./components/brand.php'); ?>
<!-- Subscribe Area -->
<?php include('./components/subscribe.php'); ?>
<!-- Subscribe Area End -->

<!-- Footer -->
<?php include('./components/footer.php'); ?>
<!-- End of footer -->


<!-- Jquery Min JS -->
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Nice Select Min JS -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- Wow Min JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/meanmenu.js"></script>
<!-- Datepicker JS -->
<script src="assets/js/datepicker.min.js"></script>
<!-- Ajaxchimp Min JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator Min JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact Form JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>

</body>

</html>