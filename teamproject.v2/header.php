<?php
require("User.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>H.A.D NUTRITION</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
  <!--for icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!--for login and register page-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <style type="text/css">
      body{ font: 14px sans-serif; }
      .wrapper{ width: 350px; padding: 20px; }


  </style>
</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">GOOD FOODS, HAPPY KIDS</span>
    <span class="site-heading-lower">H.A.D NUTRITION</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
          <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">@@@@@@@@@@@@</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <!--<ul class="navbar-nav mx-auto">-->
            <ul class="navbar-nav mx-auto navbar-left">
                      <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="index.php"><h4>Home</h4>
                          <span class="sr-only">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="about.php"><h4>About</h4></a>
                      </li>
                      <?php echo (!isset($_SESSION['user_id'])) ? '':
                        '<li class="nav-item px-lg-4">
                          <a class="nav-link text-uppercase text-expanded" href="order.php"><h4>Order</h4></a>
                        </li>';
                      ?>
                      <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="contactus.php"><h4>Contact Us</h4></a>
                      </li>
            </ul>
            <ul class="navbar-nav mx-auto navbar-right">
                    <?php echo (isset($_SESSION['user_id'])) ? '': '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href="login_user.php"><h4>Log in</h4></a></li>'; ?>
                    <?php echo (isset($_SESSION['user_id'])) ? '': '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href="register_user.php" ><h4>Register</h4></a></li>'; ?>
                    <?php echo (isset($_SESSION['user_id'])) ? '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href="history.php"><h4>Order History</h4></a></li>':''; ?>
                    <?php echo (isset($_SESSION['user_id'])) ? '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href="logout_user.php"><h4>Logout ('.User::getUserById($_SESSION['user_id'])->getLogin().')</h4></a></li>' : ''; ?>

              </ul>
           </div>
     </div>
  </nav>
