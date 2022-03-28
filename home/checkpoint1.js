const form = document.querySelector("form");
const searchInput = document.querySelector("input");

const BASE_URL = "https://polar-woodland-00821.herokuapp.com/";

// form.addEventListener('keydown', formSubmitted);

// function formSubmitted()

form.addEventListener("keydown", function (event) {
  if (event.code === "Enter") {
    processSearch(event);
    event.preventDefault();
  }
});

function processSearch(event) {
  const searchTerm = searchInput.value;
  getSearchResults(searchTerm);
}

function getSearchResults(searchTerm) {
  return fetch(`${BASE_URL}search/${searchTerm}`)
    .then((res) => res.json)
    .then((results) => {
      console.log(results);
    });
}
