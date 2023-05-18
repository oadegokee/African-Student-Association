document.addEventListener("DOMContentLoaded", function() {
    var toggle = document.querySelector(".toggle");
    var nav = document.querySelector(".nav");
    var header = document.querySelector(".header");

    toggle.addEventListener("click", function() {
        if (nav.classList.contains("active")) {
            nav.classList.remove("active");
            header.classList.remove("active");
            this.querySelector("#navIcon").src = "./images/nav-icon.png";
        } else {
            nav.classList.add("active");
            header.classList.add("active");
            this.querySelector("#navIcon").src = "./images/x icon.png";
        }
    });
});
