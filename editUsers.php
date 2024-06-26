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

                        <button class="w-100 btn btn-lg btn-darkgreen" type="submit" name="submit">Change</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
