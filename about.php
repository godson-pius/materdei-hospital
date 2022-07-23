<?php
$title = "About - Mater Dei Specialist Hospital"; include('./config.php');
?>

<?php include('./components/header.php'); ?>

<!-- Inner Banner -->
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>About Us</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <div class="inner-banner-shape">
        <div class="shape1">
            <img src="assets/img/inner-banner/inner-banner-shape1.png" alt="Images">
        </div>
        <div class="shape2">
            <img src="assets/img/inner-banner/inner-banner-shape2.png" alt="Images">
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-right-img">
                    <img src="assets/img/about-img/about-img2.jpg" alt="Images">
                    <div class="about-open-hours">
                        <h3>Open Hours</h3>
                        <ul>
                            <li>
                                Monday
                                <span> 24hrs</span>
                            </li>
                            <li>
                                Tuesday
                                <span> 24hrs</span>
                            </li>
                            <li>
                                Wednesday
                                <span> 24hrs</span>
                            </li>
                            <li>
                                Thursday
                                <span> 24hrs</span>
                            </li>
                            <li>
                                Friday
                                <span> 24hrs</span>
                            </li>
                            <li>
                                Saturday
                                <span> 24hrs</span>
                            </li>
                            <li>
                                Sunday
                                <span> 24hrs</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>We Are Your Trusted Friend</h2>
                        <p><?= $hospital_name; ?> is a trusted name of Medical Services who is always at your side and
                            your health is
                            our first priority.</p>
                        <p>
                            <?= $hospital_name; ?> care will be administered through plan-based customizable programs
                            that incorporate
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Brand Area -->
<?php include('./components/brand.php'); ?>
<!-- Brand Area End -->

<!-- Doctors Area -->
<?php include('./components/doctors.php'); ?>
<!-- Doctors Area End -->

<!-- Serve Area End -->
<div class="serve-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <h2>See How We Serve Our Patients</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
        </div>

        <div class="serve-btn-area">
            <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn"><i class='bx bx-play'></i></a>
        </div>
    </div>
</div>
<!-- Serve Area End -->

<!-- Testimonials Area -->
<?php include('./components/testimonials.php'); ?>
<!-- Testimonials Area End -->

<!-- Emergency Area Two -->
<div class="emergency-area-two ptb-100">
    <div class="container">
        <div class="emergency-area-bg">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="emergency-content emergency-content-ptb">
                        <h2>Get <b>Emergency</b> Care 24/7</h2>
                        <p>We are always at your side. We are 24 hours available for you in emergency situation.</p>
                        <div class="emergency-icon-content">
                            <i class="flaticon-24-hours-1"></i>
                            <h3><a href="tel:+8-(123)-456-789-12">+8 (123) 456 789 12</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="emergency-img">
                        <img src="assets/img/emergency/emergency-img.png" alt="Images">
                    </div>
                </div>
            </div>
            <div class="emergency-shape-2">
                <img src="assets/img/emergency/emergency-shape.png" alt="Images">
            </div>
        </div>
    </div>
</div>
<!-- Emergency Area Two End -->

<!-- Footer Area -->
<?php include('./components/footer.php'); ?>
<!-- Footer Area End -->


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