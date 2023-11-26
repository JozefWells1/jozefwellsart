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

    <title>About me</title>

    <!-- Logo -->
    <link rel="icon" href="favicon.ico">
  </head>
  <body>
    <!-- Navigation -->

    <section id="navigation">
        <header class="header">
          <a href="#" class="title-header">Jozef Wells</a>
          <nav class="navbar">
            <a href="#title">About</a>
            <a href="#">Gallery</a>
            <a href="#">Contact</a>
            <a href="#">Services</a>
            <a href="logout.php">Logout</a>
          </nav>
        </header>
    </section>

    <h1 class="big-title"> About me</h1>
  </body>
</html>
