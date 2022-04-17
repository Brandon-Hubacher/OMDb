<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Array of userid:password from passwd.txt
    $loginsArr = file("../passwd.txt");

    // If valid username and password
    // Username and password text validation must be done in js
    if(!validSignUp($loginsArr, $username))
    {
      header("Location: ./registerPage.php?error=1");
    }
    else
    {
      /**
       * Important note!
       * 
       * Writing an echo statement here and then trying to redirect user to login page
       * was giving an error saying
       * 
       * Warning: Cannot modify header information - headers already sent by (line 24)
       * in on line 35
       */
      // Open signup text file to write to it
      $file = fopen("../passwd.txt", "a");

      // Append sign up text file with updated info
      fwrite($file, "\r\n" . $username . ":" . $password);

      // Close signup text file
      fclose($file);

      header("Location: ../login/loginPage.php");
      exit;
    }


    function validSignUp($loginsArr, $username) {
      $valid = false;

      if(count($loginsArr) == 0) { $valid = true; }

      if(!$valid)
      {
        $valid = true;
        for($i = 0; $i < count($loginsArr); $i++)
        {
          $pair = explode(":", $loginsArr[$i]);
          if($username == $pair[0])
          {
            $valid = false;
            break;
          }
          //fwrite($file, $textArr[$i] . "\r\n");
        }
      }

      return $valid;
    }
  ?>