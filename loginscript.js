
var navLinks = document.getElementById("navLinks");
navLinks.style.right = "-200px";

function showMenu() {
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-200px";
}

function hideMenuOnClick() {
    // Get all anchor elements within navLinks
    var menuLinks = navLinks.querySelectorAll("a");

    // Add a click event listener to each anchor element
    menuLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            // Hide the menu when an anchor is clicked
            hideMenu();
        });
    });
}
hideMenuOnClick();

// After filling out the login form this is going to redirect user to logout.php

document.querySelector('.submit-btn').addEventListener('click', function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the values of the username and password fields
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Initialize a flag to check if validations pass
    var validationPassed = true;

    // Check if fields are not empty
    if (!username || !password) {
        validationPassed = false;
        alert("Musí být vyplněno Username a Password.");
    }

    // Check password length and strength
    if (
        password.length < 8 ||
        !/[A-Z]/.test(password) ||
        !/[a-z]/.test(password) ||
        !/[0-9]/.test(password) ||
        !/[!@#$%^&*]/.test(password)
    ) {
        validationPassed = false;
        alert("Heslo musí obsahovat minimálně 8 znaků a musí obsahovat velké písmeno, malé písmeno, číslici a speciální znak.");
    }

    // Redirect the user to the "logout.php" page if all validations pass
    if (validationPassed) {
        window.location.href = 'logout.php';
    }
});
