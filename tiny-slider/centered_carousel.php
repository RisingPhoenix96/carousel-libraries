<?php
include './parts/heading.php';

include './parts/tiny_slider_nav.php';
?>

<div class="wrapper">
    <div class="carousel -side-arrows tiny-centered-carousel-wrap">

        <div class="slide">
            <img class="image" src="https://picsum.photos/500/200?random=1"></img>
            <p class="title">Title 1</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/500/200?random=2"></img>
            <p class="title">Title 2</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/500/200?random=3"></img>
            <p class="title">Title 3</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/500/200?random=4"></img>
            <p class="title">Title 4</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/500/200?random=5"></img>
            <p class="title">Title 5</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

        <div class="slide">
            <img class="image" src="https://picsum.photos/500/200?random=6"></img>
            <p class="title">Title 6</p>
            <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
            <a href="#" class="button-link">Read More</a>
        </div>

    </div>

    <div class="controls tns-centered-carousel-controls">
        <button class="carousel-control centered-carousel-prev prev">◀</button>
        <button class="carousel-control centered-carousel-next next">▶</button>
    </div>
</div>

<script>
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
</script>

<?php
include './parts/footer.php';
?>