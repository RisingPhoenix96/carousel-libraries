<?php
include './parts/header.php';

include './parts/tiny_slider_nav.php';
?>

<h2 class="carousel-type-title">Lazy Carousel</h2>

<div class="wrapper">
    <div class="carousel -side-arrows tiny-lazy-carousel-wrap">

        <div class="slide">
            <img class="image tns-lazy-img" src="https://picsum.photos/500/200?random=1" data-src="https://picsum.photos/500/200?random=1"></img>
            <p class="title">Title 1</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image tns-lazy-img" src="https://picsum.photos/500/200?random=2" data-src="https://picsum.photos/500/200?random=2"></img>
            <p class="title">Title 2</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image tns-lazy-img" src="https://picsum.photos/500/200?random=3" data-src="https://picsum.photos/500/200?random=3"></img>
            <p class="title">Title 3</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image tns-lazy-img" src="https://picsum.photos/500/200?random=4" data-src="https://picsum.photos/500/200?random=4"></img>
            <p class="title">Title 4</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image tns-lazy-img" src="https://picsum.photos/500/200?random=5" data-src="https://picsum.photos/500/200?random=5"></img>
            <p class="title">Title 5</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image tns-lazy-img" src="https://picsum.photos/500/200?random=6" data-src="https://picsum.photos/500/200?random=6"></img>
            <p class="title">Title 6</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

    </div>

    <div class="controls tns-lazy-carousel-controls">
        <button class="carousel-control centered-carousel-prev prev">◀</button>
        <button class="carousel-control centered-carousel-next next">▶</button>
    </div>
</div>

<script>
    $(function() {

        // Lazy carousel
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
</script>

<?php
include './parts/footer.php';
?>