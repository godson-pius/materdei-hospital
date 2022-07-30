<?php
    if (isset($_POST['send_c'])) {
        $doctor = CHECK_INPUT(SANITIZE($_POST['doctor']));
        $fullname = CHECK_INPUT(SANITIZE($_POST['fullname']));
        $email = CHECK_INPUT(SANITIZE($_POST['email']));
        $phone = CHECK_INPUT(SANITIZE($_POST['phone']));

        $sql = "INSERT INTO consultations (fullname, email, phone, doctor) VALUES ('$fullname', '$email', '$phone', '$doctor')";

        $result = VALIDATE_QUERY($sql);

        if ($result) {
            echo "<script>alert('Doctor will be notified.')</script>";
        } else {
            echo "<script>alert('Something went wrong')</script>";
        }

    }
?>

<div class="consultancy-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="consultancy-img">
                    <img src="assets/img/consultancy/consultancy-img.png" alt="Images">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="consultancy-content">
                    <h2>Need Online Consultancy?</h2>
                    <p>Just fill up the form and get consultation with our professional doctors in few minutes.
                    </p>

                    <div class="consultancy-form">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="fullname" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="phone" name="phone" id="phone" class="form-control" required
                                            data-error="Please enter your phone number" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control" name="doctor">
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

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" name="send_c" class="default-btn">
                                        Get Online Consultancy
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