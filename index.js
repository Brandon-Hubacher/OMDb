import express from "express";

// There was difficulty importing because I had to figure out the new import and export functionality
import { searchMovies, getMovie } from "./scraper.js";

const app = express();

app.get("/", (req, res) => {
  res.json({
    message: "Scraping is Fun!",
  });
});

// path will look like: /search/star wars
app.get("/search/:title", (req, res) => {
  searchMovies(req.params.title).then((movies) => {
    res.json(movies);
  });
});

// path will look like: /movie/tt0076759
app.get("/movie/:imdbID", (req, res) => {
  getMovie(req.params.imdbID).then((movie) => {
    res.json(movie);
  });
});

const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Listening on ${port}`);
});
