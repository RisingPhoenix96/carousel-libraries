$(function () {

    // Standard carousel

    $('.standard-carousel-wrap').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,

        responsive: {
            0: {
                items: 1
            },
            640: {
                items: 2
            },
            960: {
                items: 3
            }
        }
    });

    // Centered carousel

    $('.centered-carousel-wrap').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        center: true,
        navText: ["<button class='carousel-control centered-carousel-prev prev'>&#9664;</button>", "<button class='carousel-control centered-carousel-next next'>&#9654;</button>"],

        responsive: {
            0: {
                items: 1
            },
            640: {
                items: 2
            }
        }
    });

});