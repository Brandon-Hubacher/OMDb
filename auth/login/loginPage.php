<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../auth.css">
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
      <label for="username" id="usernameLabel">Username</label><br />
      <input type="text" id="username" name="username" />

      <br />

      <label for="password" id="passwordLabel">Password</label><br />
      <input type="text" id="password" name="password" />

      <br />

      <p>Don't have an account yet? <a href="../register/registerPage.php">Sign Up</a></p>

      <br />

      <!-- Default type for button is submit so it is not included -->
      <button>Login</button>
      <!-- <input type="submit" value="continue" name="Login" /> -->
    </form>

    <?php
      if(isset($_GET['error']))
      {
        echo '<font color="#FF0000"><p>Incorrect username or password</p>';
      }
    ?>
  </body>
</html>
