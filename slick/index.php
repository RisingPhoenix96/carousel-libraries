<?php
include './parts/header.php';

include './parts/slick_nav.php';
?>

<div class="page-wrap">

    <h2 class="carousel-type-title">Standard Slider</h2>

    <div class="wrapper">
        <div class="carousel -side-arrows slider">

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

        <div class="controls slick-standard-controls">
            <button class="carousel-control centered-carousel-prev prev">◀</button>
            <button class="carousel-control centered-carousel-next next">▶</button>
        </div>
    </div>

    <h2 class="carousel-type-title">Standard Slider - Animated</h2>

    <div class="wrapper">
        <div class="carousel -side-arrows slider-animated" style="overflow:hidden;">

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

        <div class="controls slick-standard-animated-controls">
            <button class="carousel-control centered-carousel-prev prev">◀</button>
            <button class="carousel-control centered-carousel-next next">▶</button>
        </div>
    </div>

</div>

<script>
    $(function() {

        $('.slider').slick({

            'autoplay': true,
            'autoplaySpeed': '3500',
            'infinite': true,
            'slidesToShow': 1,
            'slidesToScroll': 1,
            'dots': true,
            'speed': 1500,
            'arrows': true,
            'prevArrow': $('.slick-standard-controls .prev'),
            'nextArrow': $('.slick-standard-controls .next'),

        });

        $('.slider-animated').slick({

            'autoplay': true,
            'autoplaySpeed': '3500',
            'infinite': true,
            'slidesToShow': 1,
            'slidesToScroll': 1,
            'dots': true,
            'speed': 1500,
            'arrows': true,
            'prevArrow': $('.slick-standard-animated-controls .prev'),
            'nextArrow': $('.slick-standard-animated-controls .next'),
            'fade': true,

        })

    });
</script>

<?php
include './parts/footer.php';
?>