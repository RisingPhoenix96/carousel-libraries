$(function () {

    // Standard carousel

    $('.standard-slider-wrap').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1,
        navText: ["<button class='carousel-control centered-carousel-prev prev'>&#9664;</button>", "<button class='carousel-control centered-carousel-next next'>&#9654;</button>"],
    });

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

    // Lazy carousel

    $('.lazy-carousel-wrap').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        center: false,
        lazyLoad: true,
        //lazyLoadEager: 1,
        navText: ["<button class='carousel-control centered-carousel-prev prev'>&#9664;</button>", "<button class='carousel-control centered-carousel-next next'>&#9654;</button>"],

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

    // Animated carousel

    $('.animated-carousel-wrap').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<button class='carousel-control centered-carousel-prev prev'>&#9664;</button>", "<button class='carousel-control centered-carousel-next next'>&#9654;</button>"],

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

});