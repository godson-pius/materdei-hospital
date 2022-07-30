<?php
$title = "News - Mater Dei Specialist Hospital"; include('./config.php');
?>

<?php include('./components/header.php'); ?>

<!-- Inner Banner -->
<div class="inner-banner inner-bg4" style="<?= $banner; ?>">
    <div class="container">
        <div class="inner-title">
            <h3> News & Articles </h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li> News & Articles </li>
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

<!-- Blog Area -->
<div class="blog-area blog-area-item pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our News & Articles</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
            <p>
                Get to know more about your health and the hospital
            </p>
        </div>
        <div class="row pt-45">

        <?php 
        $news = EXECUTE_QUERY(SELECT_ALL('news', 'news_id'));
        foreach ($news as $article) {
            extract($article); ?>
        <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="news-detail?news=<?= FORMAT_URL($title); ?>">
                        <img src="assets/img/blog/news.png" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>
                                <i class="flaticon-calendar-1"></i>
                                    <?= HUMAN_DATE($created_at); ?>
                                <span>
                                    <a href="#">News & Article</a>
                                </span>
                            </li>
                        </ul>
                        <h3>
                            <a href="news-detail?news=<?= FORMAT_URL($title); ?>"><?= $title; ?></a>
                        </h3>
                        <p><?= substr($content, 0, 100); ?>...</p>
                        <a href="news-detail?news=<?= FORMAT_URL($title); ?>" class="more-btn">
                            Read More <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
           

        </div>
    </div>
    <div class="blog-shape-icon">
        <i class="flaticon-dna"></i>
    </div>
</div>
<!-- Blog Area End -->

<!-- Subscribe Area -->
<?php include('./components/subscribe.php'); ?>
<!-- Subscribe Area End -->

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