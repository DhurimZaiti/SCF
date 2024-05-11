<?php 
      session_start();
      include_once('config.php');

      $id = $_GET['id'];

      $sql = "SELECT * FROM users WHERE id=:id";
      $selectUser = $conn->prepare($sql);
      $selectUser->bindParam(':id', $id);
      $selectUser->execute();
      $user_data = $selectUser->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/personalstyle.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<title>Index</title>
</head>
<body>
	
<?php
include_once('header.php');
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4 mt-5">
                <h1>Edit user details</h1>   
                <div class="table-responsive">
                    <form action="updateUsers.php" method="post">

                        <div class="form-floating mb-2">
                            <input readonly type="number" class="form-control" name="id" id="floatingInput" 
                            value="<?php echo $user_data['id'] ?>">
                            <label for="floatingInput">Id</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Name"
                            value="<?php echo $user_data['name'] ?>">
                            <label for="floatingInput">Name</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Username"
                            value="<?php echo $user_data['username'] ?>">
                            <label for="floatingInput">Username</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Email"
                            value="<?php echo $user_data['email'] ?>">
                            <label for="floatingInput">Email</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-blue" type="submit" name="submit">Change</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

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
</body>
</html>
