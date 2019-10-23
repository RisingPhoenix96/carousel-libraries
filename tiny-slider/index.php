<?php
include './parts/header.php';

include './parts/tiny_slider_nav.php';
?>

<div class="page-wrap">

    <h2 class="carousel-type-title">Standard Slider</h2>

    <div class="wrapper">
        <div class="carousel -side-arrows tiny-standard-slider-wrap">

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/200?random=1"></img>
                <p class="title">Title 1</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/200?random=2"></img>
                <p class="title">Title 2</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/200?random=3"></img>
                <p class="title">Title 3</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/200?random=4"></img>
                <p class="title">Title 4</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/200?random=5"></img>
                <p class="title">Title 5</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide">
                <img class="image" src="https://picsum.photos/928/200?random=6"></img>
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

</div>

<script>
    $(function() {

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
</script>

<?php
include './parts/footer.php';
?>