<?php
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

<div class="appointment-area appointment-bg pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xxl-5">
                <div class="appointment-img">
                    <img src="assets/img/appointment/appointment.png" alt="Imagessss">
                </div>
            </div>

            <div class="col-lg-6 col-xxl-7">
                <div class="appointment-from">
                    <h2>Get Your Appointment</h2>
                    <p>Easily book an appointment with any of our experienced doctors</p>
                    <form method="post" action="">
                        <div class="row">

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
    <div class="appointment-shape">
        <img src="assets/img/appointment/appointment.png" alt="Imagessss">
    </div>
</div>