$(function () {

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

    $('.centered-carousel-wrap').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        center: true,

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