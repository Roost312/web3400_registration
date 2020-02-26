document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});

//Matt Kealamakia - Checking URL Params
var url = new URL(document.URL);
var query_string = url.search;
var search_params = new URLSearchParams(query_string); 
var message = search_params.get('message');

switch(message){
  //authenticate.php
  case "Incorrect Username":
    document.getElementById("username").className = "input is-danger"
    document.getElementById("usernameHelp").className = "help is-danger"
    break;
  case "Incorrect Password":
    document.getElementById("password").className = "input is-danger"
    document.getElementById("passwordHelp").className = "help is-danger"
    break;
  //register.php
  case "Invalid Password":
    document.getElementById("rPassword").className = "input is-danger"
    document.getElementById("rPasswordHelp").className = "help is-danger"
    break;
  case "Username Exists":
    document.getElementById("username").className = "input is-danger"
    document.getElementById("usernameHelp").className = "help is-danger"
    break;
  case "Invalid Username":
    document.getElementById("username").className = "input is-danger"
    document.getElementById("usernameInvalid").className = "help is-danger"
    break;
  case "Invalid Email":
    document.getElementById("email").className = "input is-danger"
    document.getElementById("emailHelp").className = "help is-danger"
    break;
  case "Fill out form":
    alert("Please fill out the entire form")
    break;
  default:
    break;
}