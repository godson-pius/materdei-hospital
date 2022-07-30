<?php
$title = "Doctors - Mater Dei Specialist Hospital"; include('./config.php');
?>

<?php include('./components/header.php'); ?>

<!-- Inner Banner -->
<div class="inner-banner inner-bg9" style="<?= $banner; ?>">
    <div class="container">
        <div class="inner-title">
            <h3>Meet Our Experts</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Doctors</li>
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

<!-- Doctor Tab Area -->
<div class="doctor-tab-area pt-100 pb-70">
    <div class="container">
        <div class="tab doctor-tab text-center">
            <!-- <ul class="tabs">
                <li>
                    <a href="#">Cardiology</a>
                </li>

                <li>
                    <a href="#">Urology</a>
                </li>

                <li>
                    <a href="#">Neurology</a>
                </li>

                <li>
                    <a href="#">Gynecology</a>
                </li>

                <li>
                    <a href="#">Pediatric</a>
                </li>

                <li>
                    <a href="#">Pulmonary</a>
                </li>
            </ul> -->

            <div class="tab_content current active pt-45">
                <div class="tabs_item current">
                    <div class="doctor-tab-item">
                        <div class="row">

                            <?php 
            $doctors = EXECUTE_QUERY(SELECT_ALL('doctors', 'doctor_id'));
            foreach ($doctors as $doctor) {
                extract($doctor); ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="doctors-item">
                                    <div class="doctors-img">
                                        <a href="doctors-details?doc=<?= $doctor_id ?>">
                                            <img src="assets/img/doctors/doctor.png" alt="Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h3><a href="doctors-details?doc=<?= $doctor_id ?>"><?= $fullname; ?></a></h3>
                                        <span><?= $specialty; ?></span>
                                        <ul class="social-link">
                                            <li>
                                                <a href="mailto:<?= $email; ?>"
                                                    target="_blank"><?= substr($fullname, 0, 1); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="doctor-tab-shape">
        <div class="shape1">
            <img src="assets/img/doctors/doctors-shape3.png" alt="Images">
        </div>

        <div class="shape2">
            <img src="assets/img/doctors/doctors-shape4.png" alt="Images">
        </div>
    </div>
</div>
<!-- Doctor Tab Area End -->

<!-- Appointment Area -->
<?php include('./components/appointment.php'); ?>
<!-- Appointment Area End -->

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