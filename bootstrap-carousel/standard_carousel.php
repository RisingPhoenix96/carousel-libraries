<?php
include './parts/header.php';

include './parts/bootstrap_slider_nav.php';
?>

<div class="page-wrap">

    <h2 class="carousel-type-title">Standard Carousel</h2>

    <div id="carouselExampleControlsMulti" class="carousel slide carousel-multi-item" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControlsMulti" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControlsMulti" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slide card">
                    <img class="image" src="https://picsum.photos/928/300?random=1"></img>
                    <p class="title">Title 1</p>
                    <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                    <a href="#" class="button-link">Read More</a>
                    <div class="mask rgba-black-strong"></div>
                </div>

                <div class="slide card">
                    <img class="image" src="https://picsum.photos/928/300?random=2"></img>
                    <p class="title">Title 2</p>
                    <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                    <a href="#" class="button-link">Read More</a>
                </div>

                <div class="slide card">
                    <img class="image" src="https://picsum.photos/928/300?random=3"></img>
                    <p class="title">Title 3</p>
                    <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                    <a href="#" class="button-link">Read More</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="slide card">
                    <img class="image" src="https://picsum.photos/928/300?random=4"></img>
                    <p class="title">Title 4</p>
                    <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                    <a href="#" class="button-link">Read More</a>
                </div>

                <div class="slide card">
                    <img class="image" src="https://picsum.photos/928/300?random=5"></img>
                    <p class="title">Title 5</p>
                    <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                    <a href="#" class="button-link">Read More</a>
                </div>

                <div class="slide card">
                    <img class="image" src="https://picsum.photos/928/300?random=6"></img>
                    <p class="title">Title 6</p>
                    <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus pariatur nam asperiores tenetur iste sit. Repellendus voluptatem odio ipsa quisquam ullam quis.</p>
                    <a href="#" class="button-link">Read More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControlsMulti" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControlsMulti" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<script>

</script>

<?php
include './parts/footer.php';
?>