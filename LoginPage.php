<!DOCTYPE html>
  <html lang="en" dir="ltr">

    <head>
      <meta charset="utf-8">
      <title>Contact Me</title>
      <link rel="stylesheet" href="css/styles.css" >
    </head>

    <body>
        <h1 class="big-title">Hello, welcome to my digital portfolio</h1>
      <hr/>
      <h2>Login</h1>
      <?php
      session_start();

      if (isset($_SESSION['error'])) {
        echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
      }
      ?>
      <form method="post" action="login_handler.php">
         <div>name: <input type="text" name="name"/></div>
         <Br/>
         <div>email: <input type="email" name="email"/></div>
         <Br/>
         <div><input type="submit" name="Login"/></div>

    </body>
  </html>
