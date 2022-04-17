<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // Array of userid:password from passwd.txt
  $loginsArr = file("../passwd.txt");

  if(!validLogIn($loginsArr, $username, $password))
  {
    /**
     * I will note here an issue that I've been stuck with for a bit that is now resolved.
     * 
     * First, I noticed that the issue was not occurring when a proper username and password was entered.
     * Whenever I would enter an incorrect username and/or password, I would get an error saying
     * that $_POST didn't have those variables from the form. This was confusing because there was
     * no issue when entering in valid information. I found that the error was in the code below.
     * 
     * Rather than redirecting the user to "./loginPage.php?error=1", I was redirecting them to
     * "./login.php?error=1", the same php file that handles the processing rather than the actual page.
     * So, it makes sense that $_POST was empty because no form was being submitted when using header().
     */
    header("Location: ./loginPage.php?error=1");
  }
  else
  {
    //header("Location: ")
    if(isset($_SESSION['current_url']))
    {
      //echo $_SESSION['current_url'];
      setcookie("login", "testLogin", time()+120, "/");
      header("Location: " . $_SESSION['current_url']);
    }
    else
    {
      header("Location: ../../homePage/homePage.php");
    }
  }


  function validLogIn($loginsArr, $username, $password) {
    $valid = true;


    if(count($loginsArr) == 0) { $valid = false; }

    if($valid)
    {
      $valid = false;
      for($i = 0; $i < count($loginsArr); $i++)
      {
        $pair = explode(":", $loginsArr[$i]);

        if($username == trim($pair[0]) && $password == trim($pair[1]))
        {
          $valid = true;
          break;
        }
      }
    }

    return $valid;
  }
  ?>