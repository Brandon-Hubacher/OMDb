// window.onload = function () {
//   var url = document.location.href;
//   var imdbID = url.split("=")[1];
//   console.log(imdbID);
// };

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
  }

  getMovie(imdbID).then(showMovie);
};
