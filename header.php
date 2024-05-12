<?php

session_start();

?>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">EARTHTRADE</h1>
      </a>

      <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="index.php#hero" class="">Home</a></li>
        <li><a href="index.php#selling">Sell</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#report">Report</a></li>
        <li><a href="index.php#services">Services</a></li>
        <li><a href="index.php#team">Team</a></li>
        <li><a href="index.php#pricing">Pricing</a></li>
        <li><a href="index.php#contact">Contact</a></li>
        <?php if(isset($_SESSION['is_admin'])){ ?>
          <?php if( $_SESSION['is_admin'] == 'true'){?>
            <li class="dropdown">
                <a href="#"><span>Admin Tools</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="contactDashboard.php">Contact Inquiries</a></li>
                    <li><a href="plasticBottleDash.php">Plastic Bottle Requests</a></li>
                    <li><a href="glassBottleDash.php">Glass Bottle Requests</a></li>
                    <li><a href="reportDash.php">Reports</a></li>
                </ul>
            </li>
          <?php } ?>
        <?php } ?>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>



        <!-- Log in & Sign Up -->
				<?php if(!isset($_SESSION['username'])){?>
          <a class="btn-getstarted" href="signin.php">Get Started</a>
				<?php }else{ ?>
          <a class="btn-getstarted" href="logout.php">Log Out</a>
				<?php } ?>

    </div>
  </header>

  <main class="main"></main>

  