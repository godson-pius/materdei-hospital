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

        <?php 
        $news = EXECUTE_QUERY(SELECT_ALL_LIMIT('news', 'news_id', 0, 3));
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