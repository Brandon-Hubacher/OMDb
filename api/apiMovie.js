// // import fetch from "node-fetch";

// // To fetch more details about a movie
// // https://api.themoviedb.org/3/movie/<movie-id>?api_key=<APIKEY>

// let baseURL = "https://api.themoviedb.org/3/";
// let configData = null;
// let baseImageURL = null;
// let APIKEY = "4512ebfda658bfb30a37da5b059d4167";

// let getConfig = function () {
//   let url = "".concat(baseURL, "configuration?api_key=", APIKEY);
//   return fetch(url)
//     .then((result) => {
//       return result.json();
//     })
//     .then((data) => {
//       baseImageURL = data.images.secure_base_url;
//       configData = data.images;
//       console.log("config:", data);
//       console.log("config fetched");
//       runSearch("jaws");
//     })
//     .catch(function (err) {
//       alert(err);
//     });
// };

// let runSearch = function (keyword) {
//   // let url = baseURL + "search/movie/api_key=" + APIKEY + "&query=" + keyword;
//   let url = "".concat(
//     baseURL,
//     "search/movie?api_key=",
//     APIKEY,
//     "&query=",
//     keyword
//   );

//   searchInfo = fetch(url)
//     .then((result) => result.json())
//     .then((data) => {
//       return data;
//       //return JSON.stringify(data, null, 4);
//     });

//   return getMovie(578);
// };

// let getMovie = function (id) {
//   let url = "".concat(baseURL, "movie/", id, "?api_key=", APIKEY);

//   movieInfo = fetch(url)
//     .then((result) => result.json())
//     .then((data) => {
//       return data;
//     });

//   console.log(movieInfo);
//   return movieInfo;
// };

// getConfig();
