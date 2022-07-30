<?php
$title = "Contact - Mater Dei Specialist Hospital"; include('./config.php');
include('./components/header.php'); // Include the header.php file.

if (isset($_POST['contact'])) {
    $fullname = CHECK_INPUT(SANITIZE($_POST['fullname']));
    $email = CHECK_INPUT(SANITIZE($_POST['email']));
    $phone = CHECK_INPUT(SANITIZE($_POST['phone']));
    $subject = CHECK_INPUT(SANITIZE($_POST['subject']));
    $message = CHECK_INPUT(ALLOW_SAFE_SYMBOLS(SANITIZE($_POST['message'])));

    $sql = "INSERT INTO messages (fullname, email, phone, subject, message) VALUES ('$fullname', '$email', '$phone', '$subject', '$message')";

    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo "<script>alert('Message sent successfully')</script>";
    } else {
        echo "<script>alert('Something went wrong')</script>";
    }

}
?>

<!-- Inner Banner -->
<div class="inner-banner inner-bg2" style="<?= $banner; ?>">
    <div class="container">
        <div class="inner-title">
            <h3>Contact Us</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Contact Us</li>
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

<!-- Contact Area -->
<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-widget-right">
                    <h3>Contact Info</h3>
                    <p><?= $hospital_name; ?></p>
                    <ul class="contact-list">
                        <li>
                            <i class='flaticon-pin'></i>
                            <div class="content">
                                <?= $venue; ?>
                            </div>
                        </li>
                        <li>
                            <i class='flaticon-phone-call'></i>
                            <div class="content">
                                <a href="tel:<?= $hospital_num; ?>"><?= $num_design; ?></a>
                            </div>
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <div class="content">
                                <a href="hello@medizo.com">hello@<?= $site_name; ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="contact-form">
                    <h2>Get in Touch</h2>
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="fullname" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" required
                                        data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="msg_subject" class="form-control" required
                                        data-error="Please enter your subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                        required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" name="contact" class="default-btn">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-shape">
        <img src="assets/img/shape/shape2.png" alt="Images">
    </div>
</div>
<!-- Contact Area End -->

<!-- Map Area -->
<div class="map-area">
    <div class="container-fluid m-0 p-0">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.707244885316!2d7.517941814105141!3d6.431640626010368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a131e6a40ed7%3A0x8900110f95145c71!2sESBS%20Bus%20stop!5e0!3m2!1sen!2sng!4v1659046313641!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- Map Area End -->

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