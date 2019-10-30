<?php
include './parts/header.php';

include './parts/tiny_slider_nav.php';
?>

<div class="page-wrap">

    <h2 class="carousel-type-title">Standard Slider</h2>

    <div class="wrapper">
        <div class="carousel -side-arrows tiny-standard-slider-wrap">

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=1"></img>
                <p class="title">Title 1</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=2"></img>
                <p class="title">Title 2</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=3"></img>
                <p class="title">Title 3</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=4"></img>
                <p class="title">Title 4</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=5"></img>
                <p class="title">Title 5</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=6"></img>
                <p class="title">Title 6</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

        </div>

        <div class="controls tns-standard-controls">
            <button class="carousel-control centered-carousel-prev prev">◀</button>
            <button class="carousel-control centered-carousel-next next">▶</button>
        </div>
    </div>

    <h2 class="carousel-type-title">Standard Slider - Animated</h2>

    <div class="wrapper">
        <div class="carousel -side-arrows tiny-standard-animated-slider-wrap" style="overflow:hidden;">

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=1"></img>
                <p class="title">Title 1</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=2"></img>
                <p class="title">Title 2</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=3"></img>
                <p class="title">Title 3</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=4"></img>
                <p class="title">Title 4</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=5"></img>
                <p class="title">Title 5</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/300?random=6"></img>
                <p class="title">Title 6</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

        </div>

        <div class="controls tns-standard-animated-controls">
            <button class="carousel-control centered-carousel-prev prev">◀</button>
            <button class="carousel-control centered-carousel-next next">▶</button>
        </div>
    </div>

</div>

<script>
    $(function() {

        // Standard single slide gallery
        const tnsStandardSlider = tns({

            autoplay: true,
            autoplayButtonOutput: false,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            speed: 1000,
            container: '.tiny-standard-slider-wrap',
            items: 1,
            loop: true,
            nav: true,
            navPosition: 'bottom',
            mouseDrag: true,
            arrowKeys: false,
            touch: true,
            controls: true,
            controlsContainer: '.tns-standard-controls',
            preventScrollOnTouch: 'force',

        });

        // Animated standard slider
        // Requires Animate.css https://daneden.github.io/animate.css/
        // Carousel wrapper has to have overflow:hidden to make animations look nicer
        const tnsStandardSliderAnimated = tns({

            mode: "gallery",
            animateIn: "zoomIn",
            animateOut: "zoomOut",
            autoplay: true,
            autoplayButtonOutput: false,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            speed: 1000,
            container: '.tiny-standard-animated-slider-wrap',
            items: 1,
            loop: true,
            nav: true,
            navPosition: 'bottom',
            mouseDrag: true,
            arrowKeys: false,
            touch: true,
            controls: true,
            controlsContainer: '.tns-standard-animated-controls',

        });


    });
</script>

<?php
include './parts/footer.php';
?>