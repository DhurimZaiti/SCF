<?php 
	session_start();

      include_once('config.php');
  
      if (empty($_SESSION['username'])) {
            header("Location: login.php");
      }

      $sql = "SELECT * FROM users";

      $selectUsers = $conn->prepare($sql);
      $selectUsers->execute();

      $users_data = $selectUsers->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Dr PRO template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<title>Index</title>
</head>
<body>
<?php 
include_once('header.php');
?>

<main>
  <div class="d-flex justify-content-center align-items-center py-3 mb-3 border-bottom">
    <h1 class="h1">Dashboard</h1>
  </div>
  <?php if($_SESSION['is_admin'] == 'true') { ?>
    <div class="container">
      <h2>Users</h2>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users_data as $user_data) { ?>
          <tr>
            <td class="text-dark"><strong> <?php echo $user_data['id']; ?>       </strong></td>
            <td class="text-dark"><strong> <?php echo $user_data['name']; ?>     </strong></td>
            <td class="text-dark"><strong> <?php echo $user_data['username']; ?> </strong></td>
            <td class="text-dark"><strong> <?php echo $user_data['email']; ?>    </strong></td>
            <td> <a href="editUsers.php?id=<?= $user_data['id']; ?>">Update</a> </td>
            <td> <a href="deleteUsers.php?id=<?= $user_data['id']; ?>">Delete</a> </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
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


