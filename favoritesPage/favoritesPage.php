<?php
  session_start();
  $_SESSION['current_url'] = "http" . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  if(!isset($_COOKIE['username']))
  {
    authenticate();
  }

  function authenticate() {
    header("Location: ../auth/login/loginPage.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="favoritesPage.css" />
    <link rel="stylesheet" href="../navBar.css" />
    <title>Favorites</title>
  </head>
  <body style="background: black;">
    <?php
      $db_server = 'spring-2022.cs.utexas.edu';
      $db_username = 'cs329e_bulko_branhub';
      $db_password = 'marble+dwell8Inform';
      $db_dbName = 'cs329e_bulko_branhub';

      $mysqli = new mysqli($db_server, $db_username, $db_password, $db_dbName);

      if($mysqli->connect_errno) {
        die('CUSTOM Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli-> connect_error);
      }

      // Create query to see if username is correct
      // $db_table = 'website_auth';
      //$query = "SELECT * FROM website_auth WHERE username = \"$username\"";

      // Check if movie is in movie table, if not add it
      $query_get_favorites = "SELECT movie.title, movie.url FROM website_auth JOIN has_favorite ON website_auth.username = has_favorite.username JOIN movie ON has_favorite.movieID = movie.movieID WHERE website_auth.username = \"$_COOKIE[username]\"";
      $result = $mysqli->query($query_get_favorites);

      if (!$result) {
        die("Query failed: ($mysqli->error <br> SQL query = $query");
      }
      else
      {
	echo '<h1>Your Favorites</h1>';
	echo '<div style="text-align: center;" id="favoritesContainer">';
        echo '<ul>';

        while($row = $result->fetch_assoc())
        {
          echo '<li>' . '<a href=' . $row['url'] . ' id="favoriteLink">' . $row['title'] . '</a>' . '</li><br>';
        }

        echo '</ul>';
	echo '</div>';
      }
    ?>
    <script src="../createHead.js"></script>
    <script src="../navBar.js"></script>
  </body>
</html>
