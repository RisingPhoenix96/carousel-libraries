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
        navText: ["<button class='centered-carousel-prev'>Prev</button>", "<button class='centered-carousel-next'>Next</button>"],

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