<?php
include './parts/header.php';

include './parts/slick_nav.php';
?>

<h2 class="carousel-type-title">Lazy Carousel</h2>

<div class="wrapper">
    <div class="carousel -side-arrows slick-standard-carousel-wrap">

        <div class="slide">
            <img class="image" data-lazy="https://picsum.photos/480/200?random=1"></img>
            <p class="title">Title 1</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" data-lazy="https://picsum.photos/480/200?random=2"></img>
            <p class="title">Title 2</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" data-lazy="https://picsum.photos/480/200?random=3"></img>
            <p class="title">Title 3</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" data-lazy="https://picsum.photos/480/200?random=4"></img>
            <p class="title">Title 4</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" data-lazy="https://picsum.photos/480/200?random=5"></img>
            <p class="title">Title 5</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" data-lazy="https://picsum.photos/480/200?random=6"></img>
            <p class="title">Title 6</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

    </div>

    <div class="controls tns-standard-carousel-controls">
        <button class="carousel-control centered-carousel-prev prev">◀</button>
        <button class="carousel-control centered-carousel-next next">▶</button>
    </div>
</div>

<script>
    $(function() {

        $('.carousel').slick({

            'autoplay': true,
            'autoplaySpeed': '3500',
            'infinite': true,
            'slidesToShow': 3,
            'slidesToScroll': 1,
            'dots': true,
            'speed': 1500,
            'arrows': true,
            'prevArrow': $('.controls .prev'),
            'nextArrow': $('.controls .next'),
            'centerMode': true,
            'centerPadding': '40px',
            'lazyLoad': 'ondemand',

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

    });
</script>

<?php
include './parts/footer.php';
?>