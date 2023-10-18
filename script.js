
var navLinks = document.getElementById("navLinks");
navLinks.style.right = "-200px";

function showMenu() {
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-200px";
}

function hideMenuOnClick() {
    var menuLinks = navLinks.querySelectorAll("a");

    menuLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            // Hide the menu when an anchor is clicked
            hideMenu();
        });
    });
}
hideMenuOnClick();










