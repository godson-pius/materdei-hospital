<?php 
    
    if (isset($_POST['sub'])) {
        $email = CHECK_INPUT(SANITIZE($_POST['email']));
        
        if (CHECK_DUPLICATE('subscribers', 'email', $email)) {
            echo "<script>alert('This email is already on our system')</script>";
        } else {
            $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
            $result = VALIDATE_QUERY($sql);

            if ($result) {
                echo "<script>alert('You have successfully subscribed')</script>";
            } else {
                echo "<script>alert('Something went wrong')</script>";
            }
        }
        
    }
?>

<div class="subscribe-area ptb-100">
    <div class="container">
        <div class="newsletter-area">
            <h2>Subscribe Our <b>Newsletter</b></h2>
            <p>We are always at your side. We are 24 hours avail- able for you in emergency situation.</p>
            <form class="newsletter-form" method="POST">
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" required>
                <button name="sub" class="subscribe-btn" type="submit">
                    Subscribe
                </button>
                <div id="validator-newsletter" class="form-result"></div>
            </form>
        </div>
    </div>
    <div class="subscribe-shape">
        <img src="assets/img/subscribe-img/subscribe-shape.png" alt="Images">
    </div>
</div>