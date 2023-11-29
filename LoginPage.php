<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="stylesheet" href="css/LoginStyles.css" >
    </head>

    <body>
      <div class="container">
        <h1 class="big-title">Hello!</h1>
        <h1 class="big-title">Welcome to my digital portfolio</h1>
        <form class="login-form"method="post" action="login_handler.php">
            <h2>Login</h2>
            <?php
            session_start();

            if (isset($_SESSION['error'])) {
              echo '<p class="error">' . $_SESSION['error'] . '</p>';
              unset($_SESSION['error']);
            }
            ?>

           <label for="user">Name:</label>
           <div><input type="text" name="name" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user'] : '' ?>" /></div>
           <Br/>
           <label for="email">Email:</label>
           <div><input type="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>" /></div>
           <Br/>
           <div><input type="submit" name="Login"/></div>
        </form>
      </div>
    </body>
  </html>
