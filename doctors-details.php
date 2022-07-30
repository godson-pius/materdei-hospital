<?php
$title = "Doctors - Mater Dei Specialist Hospital"; include('./config.php');
include('./components/header.php'); // Include the header.php file.

if (isset($_GET['doc'])) {
    $id = $_GET['doc'];

    $get_doc = EXECUTE_QUERY(SELECT_WHERE('doctors', 'doctor_id', $id));
    foreach ($get_doc as $doc) {
        extract($doc);
    }
}
?>

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg10" style="<?= $banner; ?>">
            <div class="container">
                <div class="inner-title">
                    <h3><?= $fullname; ?></h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Doctors Details</li>
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

        <!-- Doctors Details Area -->
        <div class="doctors-details-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="doctors-details-img">
                            <img src="assets/img/doctors/doctor.png" alt="Images">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="doctors-details-content">
                            <h3><?= $fullname; ?></h3>
                            <span><?= $degree; ?></span>
                            <ul class="doctors-details-list">
                                <li>Specialization: <?= $specialty; ?></li>
                                <li>Phone: <a href="tel:<?= $phone; ?>"><?= $phone; ?></a></li>
                                <li>Email: <a href="mailto:<?= $email; ?>"><?= $email; ?></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="doctors-details-text">
                            <p>
                            The leadership of <?= $hospital_name; ?> is counselled by a Board of Advisors. This Advisory Board provides information, advice and assistance to the hospital on a broad range of subjects, including operational efficiencies, government and community matters, fundraising, and overall growth and profitability of the business. Membership of the Board is drawn from capable and connected individuals within and outside Nigeria who have an interest in the mission of the hospital. 
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="doctors-details-shape">
                <img src="assets/img/doctors/doctors-shape4.png" alt="Images">
            </div>
        </div>
        <!-- Doctors Details Area End -->

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