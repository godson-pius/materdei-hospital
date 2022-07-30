<?php
$title = "FAQ - Mater Dei Specialist Hospital"; include('./config.php');
include('./components/header.php'); 

if (isset($_POST['send_a'])) {
    $doctor = CHECK_INPUT(SANITIZE($_POST['doctor']));
    $fullname = CHECK_INPUT(SANITIZE($_POST['fullname']));
    $email = CHECK_INPUT(SANITIZE($_POST['email']));
    $phone = CHECK_INPUT(SANITIZE($_POST['phone']));
    $gender = CHECK_INPUT(SANITIZE($_POST['gender']));
    $age = CHECK_INPUT(SANITIZE($_POST['age']));
    $address = CHECK_INPUT(SANITIZE($_POST['address']));
    $message = CHECK_INPUT(ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['message'])));
    $date = $_POST['a_date'];

    $sql = "INSERT INTO appointments (doctor, fullname, email, phone, age, address, message, gender, booked_date) VALUES ('$doctor', '$fullname', '$email', '$phone', '$age', '$address', '$message', '$gender', '$date')";

    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo "<script>alert('Appointment booked successfully')</script>";
    } else {
        echo "<script>alert('Something went wrong')</script>";
    }

}

?>


        <!-- Inner Banner -->
        <div class="inner-banner inner-bg2" style="<?= $banner; ?>">
            <div class="container">
                <div class="inner-title">
                    <h3>Appointment</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Appointment</li>
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

        <!-- Appointment Widget -->
        <div class="appointment-widget pt-100 pb-70">
            <div class="container">
                <div class="row ">
                  

                    <div class="col-lg-12">
                        <div class="appointment-widget-form">
                            <div class="appointment-from">
                                <h2>Get Your Appointment</h2>
                                <p>Online Easily During This Corona Pandemic</p>
                                <form method="post" action="">
                        <div class="row">

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control" name="doctor" required>
                                        <option value="" disabled selected>Select Doctor</option>
                                        <?php 
                                            $doctors = EXECUTE_QUERY(SELECT_ALL('doctors', 'doctor_id'));
                                            foreach ($doctors as $doctor) {
                                                extract($doctor); ?>
                                                <option value="<?= $fullname; ?>"><?= $fullname; ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="fullname" class="form-control" required
                                        data-error="Please enter your name" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="phone" name="phone" class="form-control" required
                                        data-error="Please enter your phone" placeholder="phone">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <input type="number" name="age" required class="form-control" placeholder="Age">
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="address" class="form-control" id="address" placeholder="Address" required></textarea>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" placeholder="Message" required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-group" id="">
                                        <input type="date" name="a_date" class="form-control" placeholder="Select Date" required>
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" name="send_a" class="default-btn">
                                    Book An Appointment
                                </button>
                            </div>
                        </div>
                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Appointment Widget End -->

        <!-- Emergency Area -->
        <div class="emergency-area ptb-100" style="background-image: url(assets/img/emergency/emergency.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="emergency-content">
                            <h2>Get <b>Emergency</b> Care 24/7</h2>
                            <p>We are always at your side. We are 24 hours available for you in emergency situation.</p>
                            <div class="emergency-icon-content">
                                <i class="flaticon-24-hours-1"></i>
                                <h3><a href="tel:<?= $hospital_num; ?>"><?= $num_design; ?></a></h3>
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

        <!-- Brand Area -->
        
        <!-- Brand Area End -->

        <!-- Footer Area -->
        <?php include('./components/footer.php'); ?>>
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