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
    <title>Yellow is No Longer a Color</title>
  </head>
  <body>
    No one liked yellow anyway, so we're glad it's no longer a color.
  </body>
</html>
