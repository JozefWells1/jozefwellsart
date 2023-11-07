<!DOCTYPE html>
  <html lang="en" dir="ltr">

    <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="css/LoginStyles.css" >
    </head>

    <body>
      <h1 class="big-title">Hello, welcome to my digital portfolio</h1>
      <form class="login-form"method="post" action="login_handler.php">
          <h2>Login</h2>
          <?php
          session_start();

          if (isset($_SESSION['error'])) {
            echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
          }
          ?>
         <p>Name:</p>
         <div><input type="text" name="name"/></div>
         <Br/>
         <p>Email:</p>
         <div><input type="email" name="email"/></div>
         <Br/>
         <div><input type="submit" name="Login"/></div>
      </form>
    </body>
  </html>
