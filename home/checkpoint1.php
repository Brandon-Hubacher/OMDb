<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="checkpoint1.css" />
    <link rel="stylesheet" href="/navigationBar.css" />
    <title>OMDB</title>
    <meta name="description" content="Genres page" />
  </head>

  <body>
    <!-- NAVIGATION Link-->
    <img id="logo" src="../images/logo.png" alt="LOGO" />
    <nav id="nav">
      <ul id="nav-links">
        <li>
          <a href="/home/checkpoint1.html">Home</a>
        </li>
        <li>
          <a href="/genres/genres.html">Genres</a>
        </li>
        <li>
          <a href="/favorites/favorites.html">Favorites</a>
        </li>
        <li>
          <a href="/watched movies/watched_movies.html">Watched Movies</a>
        </li>
        <li>
          <a href="/contact/contact.html">Contact Us</a>
        </li>
      </ul>

      <div id="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <form id="searchForm" action="checkpoint1.php" method="get">
      <div id="topnavContainer">
        <input
          id="search"
          type="text"
          name="searchTerm"
          placeholder="Search OMDb: Movies"
        />
        <a href="landingpage.html">Sign Up</a>
        <a href="landingpage.html">Login In</a>
      </div>
      <div id="content">
        <div id="movie-slider"></div>
      </div>
    </form>
    <script>
      console.log("EMBEDDED JAVASCRIPT");
      const form = document.getElementById("searchForm");
      const searchInput = document.querySelector("input");
      //var resultsList = document.querySelector("#results");
      //resultsList.location.href = "/searchPage/searchPage.html";

      //const BASE_URL = "https://polar-woodland-00821.herokuapp.com/";

      //console.log("iside checkpoint1.js");

      form.addEventListener("keydown", function (event) {
        console.log("key was pressed");
        // TODO: Don't run if search bar is empty
        if (event.code === "Enter") {
          console.log("enter has been pressed");
          var searchTerm = searchInput.value;
          console.log("the search term is: " + searchTerm);
          var url = "/searchPage/searchPage.html?search=" + encodeURIComponent(searchTerm);

          document.location.href = url;
          event.preventDefault();
        }
      });
    </script>


    <!-- <ul id="results"></ul> -->

    <!-- <script src="checkpoint1.js" charset="utf-8"></script> -->


    <div id="table1">
      <script src="/hover.js"></script>
    </div>
    <br /><br />

    <!-- MAIN BANNER FOR MOVIES-->
    <div class="banner">
      <div class="banner__contents">
        <h1 class="banner__title">The Batman</h1>
        <div class="banner__buttons">
          <button class="banner__button">
            <a href="https://www.youtube.com/watch?v=mqqft2x_Aa4"></a>Play
          </button>
        </div>
        <h1 class="banner__description">
          When the Riddler, a sadistic serial killer, begins murdering key
          political figures in Gotham, Batman is forced to investigate the
          city's hidden corruption and question his family's involvement.
        </h1>
      </div>
      <div class="banner--fadeBottom"></div>
    </div>

    <!--Movie Rows for homepage for top genre-->

    <div class="row">
      <br /><br />
      <h2>Critics's Top Picks</h2>
      <div class="row_posters">
        <img src="/images/batman.jpg" class="row_poster row_posterlarge" />
        <img src="/images/dune.jpg" class="row_poster row_posterlarge" />
        <img src="/images/old.jpg" class="row_poster row_posterlarge" />
        <img src="/images/kingsman.jpg" class="row_poster row_posterlarge" />
      </div>
    </div>

    <div class="row">
      <br />
      <h2>Trending now</h2>
      <div class="row_posters">
        <img src="/images/trumpDog.jpg" class="row_poster" />
        <img src="/images/trumpDog.jpg" class="row_poster" />
        <img src="/images/trumpDog.jpg" class="row_poster" />
        <img src="/images/trumpDog.jpg" class="row_poster" />
        <img src="/images/trumpDog.jpg" class="row_poster" />
        <img src="/images/trumpDog.jpg" class="row_poster" />
      </div>
    </div>

    <div class="row">
      <br />
      <h2>International Movies</h2>
      <div class="row_posters">
        <img src="/images/gregAbbott.png" class="row_poster" />
        <img src="/images/gregAbbott.png" class="row_poster" />
        <img src="/images/gregAbbott.png" class="row_poster" />
        <img src="/images/gregAbbott.png" class="row_poster" />
        <img src="/images/gregAbbott.png" class="row_poster" />
        <img src="/images/gregAbbott.png" class="row_poster" />
      </div>
    </div>

    <div class="footer-dark">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3 item">
              <h3>Quick links</h3>
              <ul>
                <li><a href="/contact/contact.html">Contact us</a></li>
                <li><a href="landingpage.html">About us</a></li>
                <li><a href="landingpage.html">Careers</a></li>
              </ul>
            </div>

            <div class="col-md-6 item text">
              <br /><br />
              <h3>Info</h3>
              <p>
                A website where you can search your favorite movies to see the
                cast, plot, ratings, etc...
              </p>
              <br />
              <p>
                Creators: Brandon Hubacher, Taran Nudurumati, Zachary Moss,
                Komail Wahab
              </p>
            </div>
            <div class="col item social">
              <a href="#"><i class="icon ion-social-facebook"></i></a
              ><a href="#"><i class="icon ion-social-twitter"></i></a
              ><a href="#"><i class="icon ion-social-snapchat"></i></a
              ><a href="#"><i class="icon ion-social-instagram"></i></a>
            </div>
          </div>
          <p class="copyright">Seal Team Six © 03/07/2022</p>
        </div>
      </footer>
    </div>
    <script src="/omdb.js"></script>
  </body>
</html>
