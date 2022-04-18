<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="homePage.css" />
    <link rel="stylesheet" href="../navBar.css"/>
    <title>OMDB</title>
    <meta name="description" content="Genres page">
  </head>

  <body>




    <!-- NAVIGATION Link-->
    <div id = 'table1'>
      <script src="hover.js"></script>

    </div><br><br>

    <!-- MAIN BANNER FOR MOVIES-->
    <div class="banner">
      <div class="banner__contents">
        <h1 class="banner__title">The Batman</h1>
        <div class="banner__buttons">
          <button class="banner__button"><a href="https://www.youtube.com/watch?v=mqqft2x_Aa4"></a>Play</button>
        </div>
        <h1 class="banner__description">
          When the Riddler, a sadistic serial killer, begins murdering key political figures in Gotham,
         Batman is forced to investigate the city's hidden corruption and question his family's involvement.
        </h1>
      </div>
      <div class="banner--fadeBottom"></div>
    </div>

    
    <!--Movie Rows for homepage for top genre-->

    <div class="row">  <br><br>
      <h2> Critics's Top Picks</h2>
      <div class="row_posters">
        <!-- <script src="modal.js"></script> -->

        <!-- Image 1 -->
        <div class="container">
          <img src="../images/batman.jpg" class="row_poster row_posterlarge image">
          <div class="overlay">
            <div class="text">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="container">
          <img src="../images/dune.jpg" class="row_poster row_posterlarge image">          
          <div class="overlay">  
            <div class="text">
              Title: Dune <br>
              Year: 2021 <br>
              Rating: PG-13 <br>
              Length: 2h 35m <br>
            </div>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="container">
          <img src="../images/old.jpg" class="row_poster row_posterlarge image">          
          <div class="overlay">  
            <div class="text">
              Title: Dune <br>
              Year: 2021 <br>
              Rating: PG-13 <br>
              Length: 2h 35m <br>
            </div>
          </div>
        </div>

        <!-- Image 4 -->
        <div class="container">
          <img src="../images/kingsman.jpg" class="row_poster row_posterlarge image">          
          <div class="overlay">
            <div class="text">
              Title: Dune <br>
              Year: 2021 <br>
              Rating: PG-13 <br>
              Length: 2h 35m <br>
            </div>
          </div>
        </div>
      </div>
    </div>  


    <div class="row">  <br>
      <h2> Trending now</h2>
      <div class="row_posters">

        <!-- Image 1 -->
        <div class="container">
          <img src="../images/deepWater.png" class="row_poster image" width="">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

        <!-- Image 1 -->
        <div class="container">
          <img src="../images/turningRed.png" class="row_poster image">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

        <!-- Image 1 -->
        <div class="container">
          <img src="../images/windfall.png" class="row_poster image">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

        <!-- Image 1 -->
        <div class="container">
          <img src="../images/godfather.png" class="row_poster image">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

        <!-- Image 1 -->
        <div class="container">
          <img src="../images/blackCrab.jpg" class="row_poster image">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">  <br>
      <h2> International Movies</h2>
      <div class="row_posters">
        <!-- Image 1 -->
        <div class="container">
          <img src="../images/trainToBusan.png" class="row_poster image" height="500px" width="200px">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="container">
          <img src="../images/godfather.png" class="row_poster image">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="container">
          <img src="../images/amour.png" class="row_poster image">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

        <!-- Image 4 -->
        <div class="container">
          <img src="../images/roma.png" class="row_poster image">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

        <!-- Image 1 -->
        <div class="container">
          <img src="../images/13assassins.png" class="row_poster image">          
          <div class="overlay">
            <div class="text_international">
              Title: The Batman <br>
              Year: 2022 <br>
              Rating: PG-13 <br>
              Length: 2h 56m <br>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="footer-dark">
      <footer>
          <div class="container2">
              <div class="row">
                  <div class="col-sm-6 col-md-3 item">
                      <h3>Quick links</h3>
                      <h3>Info</h3>
                      <p>A website where you can search your favorite movies to see the cast, plot, ratings, etc...</p>
                      <br>
                      <p>Creators: Brandon Hubacher, Taran Nudurumati, Zachary Moss, Komail Wahab </p>
                      <ul>
                          <li><a href="../contactPage/contactPage.html">Contact us</a></li>
                          <li><a href="../dummyPage.html">About us</a></li>
                          <li><a href="../dummyPage.html">Careers</a></li>
                      </ul>
                  </div>

                  <div class="col-md-6 item text"> <br><br>
                      <!-- <h3>Info</h3>
                      <p>A website where you can search your favorite movies to see the cast, plot, ratings, etc...</p>
                      <br>
                      <p>Creators: Brandon Hubacher, Taran Nudurumati, Zachary Moss, Komail Wahab </p> -->
                  </div>
                  <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
              </div>
              <p class="copyright">Seal Team Six © 03/07/2022</p>
          </div>
      </footer>
  </div>
  <script src="../createHead.js"></script>
  <script src="../navBar.js"></script>
</body>
</html>