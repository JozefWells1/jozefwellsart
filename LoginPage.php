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

      <div class="row">

        <form method="post" action="login_handler.php">
          <div class="input-field">
            <label>Name:</label>
            <input type="text" name="user_name"><br />
          </div>
          <div class="input-field">
            <label>Email(optional):</label>
            <input type="email" name="user_email"><br />
          </div>

          <button type="submit" formaction="homePage.php"> Login </button>
        </form>
      </div>

    </body>
  </html>
