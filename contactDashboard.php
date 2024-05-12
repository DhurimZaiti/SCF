<?php 
	session_start();

      include_once('config.php');
  
      if (empty($_SESSION['username'])) {
            header("Location: login.php");
      }

      $sql = "SELECT * FROM contact";

      $selectAppointments = $conn->prepare($sql);
      $selectAppointments->execute();

      $contact_data = $selectAppointments->fetchAll();
?>
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

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: May 10 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


<main>
  <div class="d-flex justify-content-center align-items-center py-3 mb-3 border-bottom">
    <h1 class="h1">Inquiries</h1>
  </div>
  <?php if($_SESSION['is_admin'] == 'true') { ?>
    <div class="container">
      <h2 class="mb-3 text-center"  >Inquiries</h2>
      <div class="row mb-3 text-center">

        <div class="col-3">
        <a href="index.php" class='btn btn-darkgreen'>Go Home</a>
        </div>    
        <div class="col-3">
        <a href="dashboard.php" class='btn btn-darkgreen'>Dashboard</a>
        </div>    
        <div class="col-3">
          <a href="contactDashboard.php" class='btn btn-darkgreen'>Contact Inquiries</a>
        </div>    
        <div class="col-3">
          <a href="plasticBottleDash.php" class='btn btn-darkgreen'>Plastic Bottle Requests</a>
        </div>  
      </div>
      <div class="row mb-3 text-center">

        <div class="col-6">
        <a href="glassBottleDash.php" class='btn btn-darkgreen'>Glass Bottle Requests</a>
        </div>    
        <div class="col-6">
        <a href="reportDash.php" class='btn btn-darkgreen'>Reports</a>
        </div>    
        </div>  
    </div>
    <div class="container">
      <table class="table table-striped table-sm">
          <thead>
            <tr class="text-center" >
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($contact_data as $contact) { ?>
              <tr class="text-dark text"> 
                <td><strong> <?php echo $contact['contact_id']; ?>      </strong></td>
                <td><strong> <?php echo $contact['contact_name']; ?>    </strong></td>
                <td><strong> <?php echo $contact['contact_email']; ?>   </strong></td>
                <td><strong> <?php echo $contact['contact_subject']; ?> </strong></td>
                <td><strong> <?php echo $contact['contact_message']; ?> </strong></td>

              </tr>
            <?php } ?>
          </tbody>
      </table>

    </div>
      

    </div>


  <?php } ?>

</main>

      


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/custom.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    </body>
</html>
