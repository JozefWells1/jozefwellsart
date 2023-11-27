<!DOCTYPE html>

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

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-3.7.1.min.js"></script>

  <title>Jozef Wells</title>

  <!-- CSS stylesheet -->
  <link rel="stylesheet" href="css/HomeStyles.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/8b6ff90ac6.js" crossorigin="anonymous"></script>

  <!-- Logo -->
  <link rel="icon" href="favicon.ico">

</head>

<body>

  <!-- Navigation -->

  <section id="navigation">
      <header class="header">
        <a href="#" class="title-header">Jozef Wells</a>
        <nav class="navbar">
          <a href="#">About</a>
          <a href="#" class="active">Gallery</a>
          <a href="#">Contact</a>
          <a href="#">Services</a>
          <a href="logout.php">Logout</a>
        </nav>
      </header>
  </section>

  <!-- Title -->
<div class="background-container">
  <img class="background" src="images/background.jpg" alt="background">
  <section id="title">
    <div class="row">
      <?php
      $username = $_SESSION['user'];
      echo "<h2>Welcome, $username!</h2>";
      ?>
      <h1 class="big-title">Gallery</h1>
    </div>
  </section>

  <!-- Pictures -->


    <div class="container">

      <div class="image-container">
        <div class="drawing"><img src="images/IMG_22.jpg" alt="logan-img"></div>
        <div class="drawing"><img src="images/IMAG0203.jpg" alt="girl1-img"></div>
        <div class="drawing"><img src="images/IMAG0194.jpg" alt="boy1-img"></div>
        <div class="drawing"><img src="images/IMAG0252.jpg" alt="painting1-img"></div>
        <div class="drawing"><img src="images/IMAG0277.jpg" alt="dog-img"></div>
        <div class="drawing"><img src="images/IMG_14.jpg" alt="joker-img"></div>
        <div class="drawing"><img src="images/IMG_20.jpg" alt="audreyHepburn-img"></div>
        <div class="drawing"><img src="images/IMAG0047.jpg" alt="wonderwoman-img"></div>
        <div class="drawing"><img src="images/IMG_2013.jpg" alt="einstein-img"></div>
<!--         <div class="drawing"><img src="images/IMG_0519.jpg" alt="murdock-img"></div> -->
        <div class="drawing"><img src="images/IMG_201.jpg" alt="bikePainting-img"></div>
        <div class="drawing"><img src="images/IMG_1486.jpg" alt="flower-img"></div>
        <div class="drawing"><img src="images/IMAG0011.jpg" alt="madsmikkelsen-img"></div>
        <div class="drawing"><img src="images/IMAG0050.jpg" alt="girl3-img"></div>
        <div class="drawing"><img src="images/IMAG0216.jpg" alt="girl2-img"></div>
<!--         <div class="drawing"><img src="images/IMG_0542.jpg" alt="kobe-img"></div> -->
        <div class="drawing"><img src="images/IMG_20160.jpg" alt="deadpool-img"></div>
<!--         <div class="drawing"><img src="images/IMG_0553.jpg" alt="guySuit-img"></div> -->
        <div class="drawing"><img src="images/IMG_20170.jpg" alt="pennywise-img"></div>
        <div class="drawing"><img src="images/IMG_200.jpg" alt="girlSmoking-img"></div>
        <div class="drawing"><img src="images/IMG1.jpg" alt="marylinMonroe-img"></div>
        <div class="drawing"><img src="images/IMG2.jpg" alt="phoenixJoker-img"></div>
        <div class="drawing"><img src="images/IMG123.jpg" alt="jokers-img"></div>
        <div class="drawing"><img src="images/IMG23.jpg" alt="sketches-img"></div>
        <div class="drawing"><img src="images/IMAG0048.jpg" alt="comicJoker-img"></div>
        <div class="drawing"><img src="images/IMAG0046.jpg" alt="woman1-img"></div>
        <div class="drawing"><img src="images/IMAG012.jpg" alt="waterDrop-img"></div>
    </div>

    <div class="popup-image">
      <span>&times;</span>
      <img src="images/IMG_22.jpg" alt="logan-img">
  </div>

  </section>
</div>

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
<script src="javascript/script.js"></script>
</body>

</html>
