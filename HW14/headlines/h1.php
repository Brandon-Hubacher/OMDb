<?php
  session_start();
  $_SESSION['current_url'] = "http" . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  if(!isset($_COOKIE['login']))
  {
    authenticate();
  }

  function authenticate() {
    header("Location: ../loginPage.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="headline.css">
    <title>Longhorns Rename to Longhares</title>
  </head>
  <body>
    <p>
      In very surprising news, The University of Texas at Austin has changed
      their mascot from the beloved longhorn to the longhare, a rabbit.
    </p>
  </body>
</html>
