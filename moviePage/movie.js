window.onload = function () {
  const BASE_URL = "https://polar-woodland-00821.herokuapp.com/";
  const url = document.location.href;
  const imdbID = url.split("=")[1];
  console.log(imdbID);

  function getMovie(imdbID) {
    return fetch(`${BASE_URL}movie/${imdbID}`).then((res) => res.json());
  }

  function showMovie(movie) {
    console.log(movie);
    console.log(movie.title);

    var spanTitle = document.querySelector("#title");
    spanTitle.textContent = movie.title;

    var spanImdbRating = document.querySelector("#imdbRating");
    spanImdbRating.textContent = movie.imdbRating;

    var spanDatePublished = document.querySelector("#datePublished");
    spanDatePublished.textContent = movie.datePublished;

    var spanContentRating = document.querySelector("#contentRating");
    spanContentRating.textContent = movie.rating;

    var spanRunTime = document.querySelector("#runTime");
    spanRunTime.textContent = movie.runTime;

    var imgPoster = document.querySelector("#poster");
    imgPoster.src = movie.poster;

    var genresList = document.querySelector("#genresList");
    // movie.genres.array.forEach((element) => {
    //   const li = document.createElement("li");
    //   li.textContent = element;
    //   genresList.appendChild(li);
    // });
    const li = document.createElement("li");
    li.innerHTML = movie.genres;
    genresList.appendChild(li);

    var spanSummary = document.querySelector("#summary");
    spanSummary.textContent = movie.summary;
  }

  // I believe this helps ensure that the scraper always gets all the information
  setTimeout(getMovie(imdbID).then(showMovie), 1000);
};
