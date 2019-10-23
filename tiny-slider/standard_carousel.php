<?php
include './parts/header.php';

include './parts/tiny_slider_nav.php';
?>

<h2 class="carousel-type-title">Standard Carousel</h2>

<div class="wrapper">
    <div class="carousel -side-arrows tiny-standard-carousel-wrap">

        <div class="slide">
            <img class="image" src="https://picsum.photos/320/200?random=1"></img>
            <p class="title">Title 1</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/320/200?random=2"></img>
            <p class="title">Title 2</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/320/200?random=3"></img>
            <p class="title">Title 3</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/320/200?random=4"></img>
            <p class="title">Title 4</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/320/200?random=5"></img>
            <p class="title">Title 5</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/320/200?random=6"></img>
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
</script>

<?php
include './parts/footer.php';
?>