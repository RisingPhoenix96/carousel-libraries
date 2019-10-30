<?php
include './parts/header.php';

include './parts/slick_nav.php';
?>

<div class="page-wrap">

    <h2 class="carousel-type-title">Grid Mode</h2>

    <div class="wrapper">
        <div class="carousel -side-arrows slider">

            <div class="slide nest-parent">
                <img class="image" src="https://picsum.photos/id/10/300/300"></img>
                <img class="image" src="https://picsum.photos/id/20/300/300"></img>
                <img class="image" src="https://picsum.photos/id/30/300/300"></img>
            </div>
            <div class="slide">
                <img class="image" src="https://picsum.photos/300/300?random=2"></img>
            </div>
            <div class="slide nest-parent">
                <img class="image" src="https://picsum.photos/id/40/300/300"></img>
                <img class="image" src="https://picsum.photos/id/50/300/300"></img>
                <img class="image" src="https://picsum.photos/id/60/300/300"></img>
            </div>
            <div class="slide">
                <img class="image" src="https://picsum.photos/300/300?random=4"></img>
            </div>
            <div class="slide nest-parent">
                <img class="image" src="https://picsum.photos/id/70/300/300"></img>
                <img class="image" src="https://picsum.photos/id/80/300/300"></img>
                <img class="image" src="https://picsum.photos/id/90/300/300"></img>
            </div>
            <div class="slide">
                <img class="image" src="https://picsum.photos/300/300?random=6"></img>
            </div>
            <div class="slide">
                <img class="image" src="https://picsum.photos/300/300?random=7"></img>
            </div>
            <div class="slide">
                <img class="image" src="https://picsum.photos/300/300?random=8"></img>
            </div>
            <div class="slide nest-parent">
                <img class="image" src="https://picsum.photos/id/100/300/300"></img>
                <img class="image" src="https://picsum.photos/id/110/300/300"></img>
                <img class="image" src="https://picsum.photos/id/120/300/300"></img>
            </div>
            <div class="slide">
                <img class="image" src="https://picsum.photos/300/300?random=10"></img>
            </div>
            <div class="slide">
                <img class="image" src="https://picsum.photos/300/300?random=11"></img>
            </div>
            <div class="slide nest-parent">
                <img class="image" src="https://picsum.photos/id/130/300/300"></img>
                <img class="image" src="https://picsum.photos/id/140/300/300"></img>
                <img class="image" src="https://picsum.photos/id/160/300/300"></img>
            </div>

        </div>

        <div class="controls slick-standard-controls">
            <button class="carousel-control centered-carousel-prev prev">◀</button>
            <button class="carousel-control centered-carousel-next next">▶</button>
        </div>
    </div>

</div>

<script>
    $(function() {

        $('.slider').slick({

            'autoplay': false,
            'autoplaySpeed': '3500',
            'infinite': true,
            'slidesToShow': 1,
            'slidesToScroll': 1,
            'draggable': false,
            'dots': true,
            'speed': 500,
            'arrows': true,
            'prevArrow': $('.slick-standard-controls .prev'),
            'nextArrow': $('.slick-standard-controls .next'),
            'mobileFirst': true,
            'rows': 3,
            'slidesPerRow': 4,

            responsive: [{
                breakpoint: 960,
                settings: {
                    'speed': 1500,
                }
            }]

        });

        $('.nest-parent').slick({

            'autoplay': true,
            'autoplaySpeed': '3500',
            'infinite': true,
            'slidesToShow': 1,
            'slidesToScroll': 1,
            'dots': false,
            'speed': 1500,
            'arrows': false,

        });

        $('.slick-list .slick-slide').css('margin', '0');
        $('.slide').css('border', '0');

    });
</script>

<?php
include './parts/footer.php';
?>