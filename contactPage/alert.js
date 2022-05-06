function alertUser() {
  var form = document.getElementById("commentForm");
  var formValues = form.elements();
  window.alert(formValues);
  // if(!isCorrectLength())

  window.alert("Form has been submitted!");
}

function isCorrectLength(comment) {
  // must be between 6 and 10
  input_length = comment.length;

  if (input_length < 800) {
    return true;
  } else {
    return false;
  }
}
