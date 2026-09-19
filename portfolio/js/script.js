// Portfolio JavaScript

document.addEventListener("DOMContentLoaded", function () {

    console.log("Portfolio website loaded successfully!");

    // Welcome message on Home page
    const homeTitle = document.querySelector(".home h1");

    if (homeTitle) {
        console.log("Welcome to Sivasankari's Portfolio!");
    }


    // Contact form validation
    const contactForm = document.querySelector(".contact form");

    if (contactForm) {

        contactForm.addEventListener("submit", function (event) {

            const name = document.querySelector('input[name="name"]').value.trim();
            const email = document.querySelector('input[name="email"]').value.trim();
            const subject = document.querySelector('input[name="subject"]').value.trim();
            const message = document.querySelector('textarea[name="message"]').value.trim();

            if (name === "" || email === "" || subject === "" || message === "") {

                alert("Please fill in all fields.");

                event.preventDefault();

                return;
            }


            // Email validation
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email)) {

                alert("Please enter a valid email address.");

                event.preventDefault();

                return;
            }


            alert("Form submitted successfully!");

        });

    }


    // Highlight current navigation page
    const currentPage = window.location.pathname.split("/").pop();

    const navLinks = document.querySelectorAll(".nav-links a");

    navLinks.forEach(function (link) {

        const linkPage = link.getAttribute("href");

        if (linkPage === currentPage) {
            link.style.color = "#38bdf8";
            link.style.fontWeight = "bold";
        }

    });

});