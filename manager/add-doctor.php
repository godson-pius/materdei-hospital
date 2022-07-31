<?php
    require_once('prepared/prepared.php');

    if (isset($_POST['submit'])) {
        $fullname = CHECK_INPUT(SANITIZE($_POST['fullname']));
        $email = CHECK_INPUT(SANITIZE($_POST['email']));
        $contact = CHECK_INPUT(SANITIZE($_POST['contact']));
        $specialty = CHECK_INPUT(SANITIZE($_POST['specialty']));
        $degree = CHECK_INPUT(SANITIZE($_POST['degree']));
        $password = CHECK_INPUT(SANITIZE(ENCRYPT($_POST['password'])));

            if (!empty($_FILES['pics'])) {
                $pics = sanitize($_FILES['pics']['name']);
                $picsTmp = $_FILES['pics']['tmp_name'];
                move_uploaded_file($picsTmp, "../doctor/pics/$pics");
                
            $sql = "INSERT INTO doctors (fullname, degree, specialty, phone, email, password, image) VALUES ('$fullname', '$degree', '$specialty', '$contact', '$email', '$password', '$pics')";
    
        $result = VALIDATE_QUERY($sql);
    
        if ($result) {
            echo "<script>alert('New Doctor Added Successfully!');</script>";
        } else {
            echo "<script>alert('Something went wrong')</script>";
        }
        } else {
            echo "<script>alert('Something went wrong with upload! Try again')</script>";
        }
    
    }
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Add Doctor - Mater Dei Specialist Hospital</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo.png">
    <link href="./css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">

                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="../assets/img/logo.png" width="50"
                                                alt="logo"></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Add New Doctor</h4>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Fullname</strong></label>
                                            <input type="text" name="fullname" required class="form-control"
                                                placeholder="Dr. Sharon">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Contact</strong></label>
                                            <input type="contact" name="contact" required class="form-control"
                                                placeholder="09092...">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" required class="form-control"
                                                placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Specialty</strong></label>
                                            <input type="specialty" name="specialty" required class="form-control"
                                                placeholder="Dentist">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Degree</strong></label>
                                            <input type="degree" name="degree" required class="form-control"
                                                placeholder="Bsc, HND, OND">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" required class="form-control"
                                                value="Password">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Doc Picture
                                                    (Optional)</strong></label>
                                            <input type="file" name="pics" class="form-control">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="submit"
                                                class="btn bg-white text-primary btn-block">Proceed</button>
                                        </div>
                                        <div class="new-account mt-3">
                                            <p class="text-white">Return back? <a class="text-white"
                                                    href="index">Dashboard</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

</body>

</html>