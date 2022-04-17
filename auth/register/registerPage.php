<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../auth.css" />
    <title>Sign Up</title>
  </head>
  <body>
    <h1>Sign Up</h1>
    <form action="register.php" method="POST">
      <label for="username">Username</label><br />
      <input type="text" id="username" name="username" />

      <br />

      <label for="password">Password</label><br />
      <input type="text" id="password" name="password" />

      <br />

      <button type="submit">Sign Up</button>

      <p>Already have an account? <a href="../login/loginPage.php">Login</a></p>
    </form>

    <?php
      if(isset($_GET['error']))
      {
        echo '<font color="#FF0000"><p>That username is taken</p>';
      }
    ?>
  </body>
</html>
