<?php
include './parts/header.php';

include './parts/slick_nav.php';
?>

<h2 class="carousel-type-title">Thumbnail Carousel</h2>

<div class="wrapper">
    <div class="carousel -side-arrows carousel-main">

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=1"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=2"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=3"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=4"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=5"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=6"></img>
        </div>

    </div>

    <div class="carousel-thumbnails">
        <img class="image" src="https://via.placeholder.com/400x400.png?text=1" alt="1">
        <img class="image" src="https://via.placeholder.com/400x400.png?text=2" alt="2">
        <img class="image" src="https://via.placeholder.com/400x400.png?text=3" alt="3">
        <img class="image" src="https://via.placeholder.com/400x400.png?text=4" alt="4">
        <img class="image" src="https://via.placeholder.com/400x400.png?text=5" alt="5">
        <img class="image" src="https://via.placeholder.com/400x400.png?text=6" alt="6">
    </div>

    <!-- <div class="controls tns-standard-carousel-controls">
        <button class="carousel-control centered-carousel-prev prev">◀</button>
        <button class="carousel-control centered-carousel-next next">▶</button>
    </div> -->
</div>

<h2 class="carousel-type-title">Thumbnail Carousel - Captions as Thumbnails</h2>

<div class="wrapper">

    <div class="carousel -side-arrows carousel-main-captions">

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=7"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=8"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=9"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=10"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=11"></img>
        </div>

        <div class="slide" style="border:0;">
            <img class="image" data-lazy="https://picsum.photos/900/450?random=12"></img>
        </div>

    </div>

    <div class="carousel-thumbnails-captions">
        <div class="caption">
            <p class="title">Caption 1</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
        </div>
        <div class="caption">
            <p class="title">Caption 2</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
        </div>
        <div class="caption">
            <p class="title">Caption 3</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
        </div>
        <div class="caption">
            <p class="title">Caption 4</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
        </div>
        <div class="caption">
            <p class="title">Caption 5</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
        </div>
        <div class="caption">
            <p class="title">Caption 6</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
        </div>
    </div>

    <!-- <div class="controls tns-standard-carousel-controls">
        <button class="carousel-control centered-carousel-prev prev caption-prev">◀</button>
        <button class="carousel-control centered-carousel-next next caption-next">▶</button>
    </div> -->

</div>

<script>
    $(function() {

        $('.carousel-main').slick({

            'autoplay': true,
            'autoplaySpeed': '3500',
            'infinite': true,
            'slidesToShow': 1,
            'slidesToScroll': 1,
            'fade': true,
            'dots': true,
            'speed': 1500,
            'arrows': true,
            'prevArrow': $('.controls .prev'),
            'nextArrow': $('.controls .next'),
            'lazyLoad': 'ondemand',
            'asNavFor': '.carousel-thumbnails',

            responsive: [

                {
                    breakpoint: 769,
                    settings: {
                        'slidesToShow': 2,
                    }
                }, {
                    breakpoint: 641,
                    settings: {
                        'slidesToShow': 1,
                    }
                }, {
                    breakpoint: 481,
                    settings: {
                        'centerMode': false,
                        'slidesToShow': 1,
                    }
                }

            ]

        });

        $('.carousel-thumbnails').slick({

            'slidesToShow': 3,
            'slidesToScroll': 1,
            'asNavFor': '.carousel-main',
            'dots': false,
            'centerMode': true,
            'focusOnSelect': true,
            'speed': 1500,

            'responsive': [

                {
                    breakpoint: 641,
                    settings: {
                        'slidesToShow': 2,
                    }
                }, {

                    breakpoint: 481,
                    settings: {
                        'slidesToShow': 1,
                    }

                }

            ]

        });

    });

    // With captions

    $(function() {

        $('.carousel-main-captions').slick({

            'autoplay': true,
            'autoplaySpeed': '3500',
            'infinite': true,
            'slidesToShow': 1,
            'slidesToScroll': 1,
            'fade': true,
            'dots': true,
            'speed': 1500,
            'arrows': true,
            'prevArrow': $('.caption-prev'),
            'nextArrow': $('.caption-next'),
            'lazyLoad': 'ondemand',
            'asNavFor': '.carousel-thumbnails-captions',

            responsive: [

                {
                    breakpoint: 769,
                    settings: {
                        'slidesToShow': 2,
                    }
                }, {
                    breakpoint: 641,
                    settings: {
                        'slidesToShow': 1,
                    }
                }, {
                    breakpoint: 481,
                    settings: {
                        'centerMode': false,
                        'slidesToShow': 1,
                    }
                }

            ]

        });

        $('.carousel-thumbnails-captions').slick({

            'slidesToShow': 1,
            'slidesToScroll': 1,
            'asNavFor': '.carousel-main-captions',
            'dots': false,
            'centerMode': true,
            'centerPadding': '200px',
            'focusOnSelect': true,
            'speed': 1500,

            'responsive': [

                {
                    breakpoint: 641,
                    settings: {
                        'centerMode': false,
                        'slidesToShow': 1,
                    }
                }, {

                    breakpoint: 481,
                    settings: {
                        'centerMode': false,
                        'slidesToShow': 1,
                    }

                }

            ]

        });

    });
</script>

<?php
include './parts/footer.php';
?>