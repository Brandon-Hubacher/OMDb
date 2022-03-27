//import fetch from "node-fetch";
import cheerio from "cheerio";

// movie title to search will be appended to the end of this URL
const url = "https://www.imdb.com/find?s=tt&ttype=ft&ref_=fn_ft&q=";

searchMovie(searchedMovieTitle);

// make a request for the search results of the movieTitle
function searchMovie(movieTitle) {
  let response = window
    .fetch(`${url}${movieTitle}`)
    .then((response) => response.text())
    .then((body) => {
      const movies = [];
      const $ = cheerio.load(body);
      $(`.findResult`).each(function (i, element) {
        const $element = $(element);
        const $image = $element.find("td a img");
        const $title = $element.find("td.result_text a");
        const movie = {
          image: $image.attr("src"),
          title: $title.text(),
        };
        movies.push(movie);
      });

      return movies;
    });
}
