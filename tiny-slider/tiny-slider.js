$(function () {

    // Standard single slide gallery
    const tnsStandardSlider = tns({

        container: '.tiny-standard-slider-wrap',
        items: 1,
        loop: true,
        nav: false,
        mouseDrag: true,
        arrowKeys: false,
        touch: true,
        controls: true,
        controlsContainer: '.tns-standard-controls',

    });

});

$(function () {

    // Standard carousel
    const tnsStandardCarousel = tns({

        container: '.tiny-standard-carousel-wrap',
        items: 1,
        loop: true,
        nav: true,
        navPosition: 'bottom',
        mouseDrag: true,
        arrowKeys: false,
        touch: true,
        controls: true,
        //controlsPosition: 'bottom',
        //controlsText: ['prev', 'next'],
        controlsContainer: '.tns-standard-carousel-controls',
        //autoplayPosition: 'bottom',
        center: true,
        //gutter: 5,
        //edgePadding: 50,

        responsive: {
            640: {
                items: 2
            },
            960: {
                items: 3
            }
        }

    });

});

$(function () {

    // Centred carousel
    const tnsCenteredCarousel = tns({

        container: '.tiny-centered-carousel-wrap',
        items: 1,
        loop: true,
        nav: true,
        navPosition: 'bottom',
        mouseDrag: true,
        arrowKeys: false,
        touch: true,
        controls: true,
        //controlsPosition: 'bottom',
        //controlsText: ['prev', 'next'],
        controlsContainer: '.tns-centered-carousel-controls',
        //autoplayPosition: 'bottom',
        center: true,
        //gutter: 5,

        responsive: {
            640: {
                items: 2
            },
            960: {
                items: 1,
                edgePadding: 230,
            }
        }

    });

});

$(function () {

    // Centred carousel
    const tnsLazyCarousel = tns({

        container: '.tiny-lazy-carousel-wrap',
        items: 1,
        loop: true,
        nav: true,
        navPosition: 'bottom',
        mouseDrag: true,
        arrowKeys: false,
        touch: true,
        controls: true,
        //controlsPosition: 'bottom',
        //controlsText: ['prev', 'next'],
        controlsContainer: '.tns-lazy-carousel-controls',
        //autoplayPosition: 'bottom',
        center: true,
        lazyload: true,
        //"lazyloadSelector": ".tns-lazy",

        responsive: {
            640: {
                items: 2
            },
            960: {
                items: 1,
                edgePadding: 230,
            }
        }

    });

});