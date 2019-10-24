<?php
include './parts/header.php';

include './parts/bootstrap_slider_nav.php';
?>

<div class="page-wrap">

    <h2 class="carousel-type-title">Standard Slider</h2>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            <li data-target="#carouselExampleControls" data-slide-to="3"></li>
            <li data-target="#carouselExampleControls" data-slide-to="4"></li>
            <li data-target="#carouselExampleControls" data-slide-to="5"></li>
        </ol>
        <!--/.Indicators-->
        <div class="carousel-inner">
            <div class="slide carousel-item active">
                <img class="image" src="https://picsum.photos/928/300?random=1"></img>
                <p class="title">Title 1</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
                <div class="mask rgba-black-strong"></div>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=2"></img>
                <p class="title">Title 2</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=3"></img>
                <p class="title">Title 3</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=4"></img>
                <p class="title">Title 4</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=5"></img>
                <p class="title">Title 5</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=6"></img>
                <p class="title">Title 6</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h2 class="carousel-type-title">Standard Slider - Animated</h2>

    <div id="carouselExampleControlsAnimated" class="carousel carousel-fade slide" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControlsAnimated" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControlsAnimated" data-slide-to="1"></li>
            <li data-target="#carouselExampleControlsAnimated" data-slide-to="2"></li>
            <li data-target="#carouselExampleControlsAnimated" data-slide-to="3"></li>
            <li data-target="#carouselExampleControlsAnimated" data-slide-to="4"></li>
            <li data-target="#carouselExampleControlsAnimated" data-slide-to="5"></li>
        </ol>
        <!--/.Indicators-->
        <div class="carousel-inner">
            <div class="slide carousel-item active">
                <img class="image" src="https://picsum.photos/928/300?random=1"></img>
                <p class="title">Title 1</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
                <div class="mask rgba-black-strong"></div>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=2"></img>
                <p class="title">Title 2</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=3"></img>
                <p class="title">Title 3</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=4"></img>
                <p class="title">Title 4</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=5"></img>
                <p class="title">Title 5</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>

            <div class="slide carousel-item">
                <img class="image" src="https://picsum.photos/928/300?random=6"></img>
                <p class="title">Title 6</p>
                <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                <a href="#" class="button-link">Read More</a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControlsAnimated" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControlsAnimated" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<script>
    $(function() {

        $('#carouselExampleControlsAnimated .title, #carouselExampleControlsAnimated .desc, #carouselExampleControlsAnimated .button-link').css('transition', 'all 0.3s ease');

        $('#carouselExampleControlsAnimated .title').css({
            'position': 'relative',
            'left': 0 + 'px',
            'opacity': 1
        });
        $('#carouselExampleControlsAnimated .desc').css({
            'opacity': 1
        });
        $('#carouselExampleControlsAnimated .button-link').css({
            'position': 'relative',
            'opacity': 1,
            'bottom': 0 + 'px'
        });

        $('#carouselExampleControlsAnimated').on('slid.bs.carousel', function() {
            $('#carouselExampleControlsAnimated .title').css({
                'left': 0 + 'px',
                'opacity': 1
            });
            $('#carouselExampleControlsAnimated .desc').css({
                'opacity': 1
            });
            $('#carouselExampleControlsAnimated .button-link').css({
                'opacity': 1,
                'bottom': 0 + 'px'
            });
        });
        $('#carouselExampleControlsAnimated').on('slide.bs.carousel', function() {
            $('#carouselExampleControlsAnimated .title').css({
                'left': -25 + 'px',
                'opacity': 0
            });
            $('#carouselExampleControlsAnimated .desc').css({
                'opacity': 0
            });
            $('#carouselExampleControlsAnimated .button-link').css({
                'opacity': 0,
                'bottom': -25 + 'px'
            });
        });

    });
</script>

<?php
include './parts/footer.php';
?>