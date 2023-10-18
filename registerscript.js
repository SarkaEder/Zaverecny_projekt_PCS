
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

//--------------------------------------------------------

// After filling out the registration form this is going to redirect user to login.php. Also Checking the password strenght.

//This is checking the paswword strength



// Add a click event listener to the registration button
document.getElementById("register-btn").addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default form submission behavior

    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var validationPassed = true;

    // Check if fields are not empty
    if (!username || !password || !email) {
        validationPassed = false;
        alert("Musí být vyplněno Username, Password a Email.");
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

    // Check if the email contains the '@' character
    if (!email.includes('@')) {
        validationPassed = false;
        alert("Email musí obsahovat znak '@'.");
    }

    // If all validations passed, you can redirect
    if (validationPassed) {
        window.location.href = 'login.php';
    }
});
