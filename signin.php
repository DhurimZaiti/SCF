<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EARTHTRADE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>
<body class="bg-light">

<?php 
include_once('header.php');
?>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-4 offset-4 mt-5">
                <div class="form-signin mt-5">
                    <form action="add.php" method="post">
                        <h1 class="h2 mb-3 fw-bold">Sign Up</h1>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Name">
                            <label for="floatingInput">Name</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Username">
                            <label for="floatingInput">Username</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Email">
                            <label for="floatingInput">Email</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" name="password" id="floatingInput" placeholder="Password">
                            <label for="floatingInput">Password</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" name="confirm_password" id="floatingInput" placeholder="Confirm password">
                            <label for="floatingInput">Confirm password</label>
                        </div>

                        <div class="checkbox mb-3 text-dark">
                            <label for="">
                                <input type="checkbox" value="remember-me" name="" id=""> Remember Me
                            </label>
                        </div>

                        <span>Already have an account? </span> <a href="login.php" class="color-red fw-bold">Log In</a>

                    </form>
                    <div class="btn-lg btn btn-darkgreen rounded-3 mt-5 text-center">Log In</div>

                </div>
            </div>
        </div>
    </div>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
