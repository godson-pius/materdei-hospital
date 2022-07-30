<?php
$title = "News - Mater Dei Specialist Hospital"; include('./config.php');
include('./components/header.php');

if (isset($_GET['news'])) {
    $title = $_GET['news'];
    $title = RETURN_URL($title);

    $get_news = EXECUTE_QUERY(SELECT_WHERE('news', 'title', $title));
    foreach ($get_news as $doc) {
        extract($doc);
    }
}
?>

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg3" style="<?= $banner; ?>">
            <div class="container">
                <div class="inner-title">
                    <h3><?= $title; ?> </h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>News Details </li>
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

        <!-- Blog Details Area -->
        <div class="blog-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-article">
                            <div class="blog-article-img">
                                <!-- <img src="assets/img/blog/blog-details1.jpg" alt="Images"> -->
                                <div style="background-image: url(assets/img/blog/news.png); width: 1140px; height: 450px; background-size: cover; background-position: center;">

                                </div>
                            </div>
                            <div class="blog-status">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> <?= HUMAN_DATE($created_at); ?></li>
                                    <!-- <li><i class='flaticon-envelope'></i> 32 Comments</li> -->
                                </ul>
                            </div>

                            <div class="article-content">
                                <h2><?= $title; ?></h2>
                                <p>
                                    <?= $content; ?>
                                </p>
                            </div>

                            <div class="blog-article-more">
                        <h2>Other News</h2>
                        <div class="row">
                            <?php 
                                $news = EXECUTE_QUERY(SELECT_ALL_LIMIT('news', 'news_id', 0, 2));
                                foreach ($news as $article) {
                                    extract($article); ?>
                            <div class="col-lg-6 col-md-6">
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

                            <!-- <div class="comments-wrap">
								<h3 class="title">Comments (03)</h3>
								<ul>
									<li>
										<img src="assets/img/blog/blog-profile1.jpg" alt="Image">
										<h3>Henry Lana</h3>
										<span>17th May,2020</span>
										<p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                                            magna aliqua. Ut enim ad minim.
                                        </p>
										<a href="#"> Reply</a>
                                    </li>
								</ul>
                            </div>

                            <div class="comments-form">
                                <div class="contact-form">
                                    <h2>Leave a comment</h2>
                                    <form id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">
                                                    Post A Comment
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
        <!-- Blog Details Area End -->

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