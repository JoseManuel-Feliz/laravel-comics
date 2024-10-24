import './bootstrap';

import "~resources/scss/app.scss";

import.meta.glob([
    '../img/**',
    '../fonts/**',

]); document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.href === window.location.href) {
        link.classList.add("active");
    }
});
