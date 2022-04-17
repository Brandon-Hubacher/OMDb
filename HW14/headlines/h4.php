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
    <title>Bevo Speaks His First Word</title>
  </head>
  <body>
    Everyone's favorite university mascot just spoke his first word and it is
    football.
  </body>
</html>
