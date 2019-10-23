<?php
include './parts/header.php';

include './parts/tiny_slider_nav.php';
?>

<h2 class="carousel-type-title">Thumbnail Carousel</h2>

<div class="wrapper">
    <div class="carousel -side-arrows tiny-thumbnail-carousel-wrap">

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

    <br />

    <div class="tiny-thumbnail-carousel-thumbnail-wrap">
        <img class="image" src="https://via.placeholder.com/200x200.png?text=1" alt="1">
        <img class="image" src="https://via.placeholder.com/200x200.png?text=2" alt="2">
        <img class="image" src="https://via.placeholder.com/200x200.png?text=3" alt="3">
        <img class="image" src="https://via.placeholder.com/200x200.png?text=4" alt="4">
        <img class="image" src="https://via.placeholder.com/200x200.png?text=5" alt="5">
        <img class="image" src="https://via.placeholder.com/200x200.png?text=6" alt="6">
    </div>

    <div class="controls tns-thumbnail-carousel-controls">
        <button class="carousel-control centered-carousel-prev prev">◀</button>
        <button class="carousel-control centered-carousel-next next">▶</button>
    </div>

    <div class="tiny-custom-thumbnails-wrapper"></div>
</div>

<script>
    $(function() {

        // Thumbnail carousel
        const tnsThumbnailCarousel = tns({

            container: '.tiny-thumbnail-carousel-wrap',
            items: 1,
            loop: true,
            nav: true,
            navContainer: '.tiny-thumbnail-carousel-thumbnail-wrap',
            navAsThumbnails: true,
            navPosition: 'bottom',
            mouseDrag: false,
            arrowKeys: false,
            touch: true,
            controls: false,
            controlsContainer: '.tns-thumbnail-carousel-controls',
            center: true,

            responsive: {
                640: {
                    items: 2
                },
                960: {
                    controls: true,
                    items: 1,
                    edgePadding: 230,
                }
            }

        });

        var thumbnails = tns({
            loop: false,
            container: '.tiny-thumbnail-carousel-thumbnail-wrap',
            items: 6,
            mouseDrag: true,
            nav: false,
            controls: false,
            gutter: 5,

            responsive: {
                640: {
                    items: 4,
                },
                960: {
                    items: 6,
                }
            }

        });

        let prev = $("[data-controls='prev']"),
            next = $("[data-controls='next']");

        prev.on('click', function() {
            thumbnails.goTo('prev');
        });
        next.on('click', function() {
            thumbnails.goTo('next');
        });

    });
</script>

<?php
include './parts/footer.php';
?>