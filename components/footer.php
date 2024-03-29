<!-- Footer Area -->
<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3>Contact Info</h3>
                    <p><?= $hospital_name; ?>.</p>
                    <ul class="footer-contact-list">
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
                                <a href="mailto:hello@medizo.com">hello@<?= $site_name; ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <div class="footer-widget">
                    <h3>Important Link</h3>
                    <ul class="footer-list">
                    <li>
                            <a href="appointment" target="_blank">
                                <i class='bx bxs-chevron-right'></i>
                                Appointment
                            </a>
                        </li>
                        <li>
                            <a href="about" target="_blank">
                                <i class='bx bxs-chevron-right'></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="news" target="_blank">
                                <i class='bx bxs-chevron-right'></i>
                                Articles
                            </a>
                        </li>
                        <li>
                            <a href="services" target="_blank">
                                <i class='bx bxs-chevron-right'></i>
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="contact" target="_blank">
                                <i class='bx bxs-chevron-right'></i>
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="faq" target="_blank">
                                <i class='bx bxs-chevron-right'></i>
                                FAQ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h3>Open Hours</h3>
                    <ul class="open-hours-list">
                        <li>
                            Monday
                            <span>12:00 am - 12:00 am</span>
                        </li>
                        <li>
                            Tuesday
                            <span>12:00 am - 12:00 am</span>
                        </li>
                        <li>
                            Wednesday
                            <span>12:00 am - 12:00 am</span>
                        </li>
                        <li>
                            Thursday
                            <span>12:00 am - 12:00 am</span>
                        </li>
                        <li>
                            Friday
                            <span>12:00 am - 12:00 am</span>
                        </li>
                        <li>
                            Saturday
                            <span>12:00 am - 12:00 am</span>
                        </li>
                        <li>
                            Sunday
                            <span>12:00 am - 12:00 am</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget ps-2">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" width="100" alt="Images">
                        </a>
                    </div>
                
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- Copy-Right Area -->
<div class="copy-right-area">
    <div class="container">
        <div class="copy-right-text text-center">
            <p>
                Copyright © <?= date('Y'); ?> <?= $hospital_name; ?> | Developed by
                <a href="https://worldbraintechnology.com" target="_blank">World Brain Technology Ltd</a>
            </p>
        </div>
    </div>
</div>
<!-- Copy-Right Area End -->