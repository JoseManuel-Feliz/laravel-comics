import './bootstrap';

import "~resources/scss/app.scss";

import.meta.glob([
    '../img/**',
    '../fonts/**',

]);
document.querySelectorAll(".nav-link").forEach((item) =>
    item.addEventListener("click", function (event) {
        event.preventDefault();
        document
            .querySelectorAll(".nav-link")
            .forEach((item) => item.classList.remove("active"));
        this.classList.add("active")
    })
);