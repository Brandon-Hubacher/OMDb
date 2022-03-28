window.onload = function () {
  console.log("in checkpoint1");
  var url = document.location.href;
  var params = url.split("?")[1].split("&");
  var data = {};
  var tmp;

  for (let i = 0, l = params.length; i < l; ++i) {
    tmp = params[i].split("=");
    data[tmp[0]] = tmp[1];
  }
  var searchArr = data.search.split("%20");
  var searchTerm = "";
  for (let i = 0, l = searchArr.length; i < l; ++i) {
    searchTerm += searchArr[i];
  }
  console.log(searchTerm);
  //document.getElementById('')

  const form = document.querySelector("form");
  const searchInput = document.querySelector("input");
  var resultsList = document.querySelector("#results");
  //resultsList.location.href = "/searchPage/searchPage.html";

  const BASE_URL = "https://polar-woodland-00821.herokuapp.com/";

  // form.addEventListener("keydown", function (event) {
  //   console.log("key was pressed");
  //   // TODO: Don't run if search bar is empty
  //   if (event.code === "Enter") {
  //     console.log("Enter was pressed");
  //     //location.assign("/searchPage/searchPage.html");
  //     document.location.href = "/searchPage/searchPage.html";
  //     console.log("should now be on search page");
  //     processSearch(event);
  //     event.preventDefault();
  //   }
  // });

  getSearchResults(searchTerm).then(showResults);

  function processSearch(event) {
    //const searchTerm = searchInput.value;
    getSearchResults(searchTerm).then(showResults);
    // moveListToSearchPage();
  }

  function getSearchResults(searchTerm) {
    return fetch(`${BASE_URL}search/${searchTerm}`).then((res) => res.json());
  }

  function showResults(results) {
    console.log("inside showResults");
    results.forEach((movie) => {
      const li = document.createElement("li");
      const img = document.createElement("img");
      li.appendChild(img);
      img.src = movie.image;
      const a = document.createElement("a");
      a.textContent = movie.title;
      a.href = "/movie.html?imdbID=" + movie.imdbID;
      li.appendChild(a);
      console.log(li);
      //console.log(li.parentElement);
      resultsList.appendChild(li);
    });
  }

  // function moveListToSearchPage() {
  //   resultsList.location = "/searchPage/searchPage.html";
  //   resultsList.
  // }
};
