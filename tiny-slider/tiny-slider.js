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