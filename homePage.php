<?php
  session_start();

  if(!isset($_SESSION['authenticated'])) {
    header('Location: LoginPage.php');
    exit;
  }

  if(isset($_SESSION['authenticated']) && !$_SESSION['authenticated']) {
    header('Location: LoginPage.php');
    exit;
  }

  require_once 'Dao.php';
  $dao = new Dao();

  //echo "<pre>" . print_r($_SESSION,1) . "</pre>";
?>

<html>

<head>
  <meta charset="utf-8">

  <title>Jozef Wells</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS stylesheet -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/8b6ff90ac6.js" crossorigin="anonymous"></script>

  <!-- Logo -->
  <link rel="icon" href="favicon.ico">

</head>

<body>

  <!-- Navigation -->

  <section id="navigation">
      <header class="header">
        <a href="#" class="logo">Jozef Wells</a>
        <nav class="navbar">
          <a href="#title">About</a>
          <a href="#">Gallery</a>
          <a href="#">Contact</a>
          <a href="#">Services</a>
          <a href="#">Tutorials</a>
        </nav>
      </header>
  </section>

  <!-- Title -->

  <section id="title">
    <div class="container-fluid">
      <div class="row">
          <h1 class="big-title">My Art</h1>
      </div>
    </div>
  </section>

  <!-- Pictures -->

  <section id="pictures">

    <div class="flex-container">
        <div class="flex-box">
          <img class="drawing"src="images/IMG_22.jpg" alt="logan-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMAG0203.jpg" alt="girl1-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMAG0194.jpg" alt="boy1-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMAG0252.jpg" alt="painting1-img">
        </div>

        <div class="flex-box">
          <img id= dog class="drawing"src="images/IMAG0277.jpg" alt="dog-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMG_14.jpg" alt="joker-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMG_20.jpg" alt="audreyHepburn-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMG_0125.jpg" alt="wonderwoman-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMG_201.jpg" alt="painting1-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMG_0519.jpg" alt="dog-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMG_0549.jpg" alt="joker-img">
        </div>

        <div class="flex-box">
          <img class="drawing"src="images/IMG_1486.jpg" alt="audreyHepburn-img">
        </div>
    </div>

  </section>

  <!-- Footer -->

  <footer id="footer">

    <div class="container-fluid">
      <i class="social-icon fa-brands fa-twitter"></i>
      <i class="social-icon fa-brands fa-facebook-f"></i>
      <i class="social-icon fa-brands fa-instagram"></i>
      <i class="social-icon fa-solid fa-envelope"></i>

      <p>© Copyright Jozef Wells</p>
    </div>

  </footer>

</body>

</html>
