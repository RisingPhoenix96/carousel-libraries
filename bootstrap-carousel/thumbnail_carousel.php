<?php
include './parts/header.php';

include './parts/bootstrap_slider_nav.php';
?>

<div class="page-wrap">

    <h2 class="carousel-type-title">Thumbnail Carousel</h2>

    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg" alt="Third slide">
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-thumb" data-slide-to="0" class="active" style="width:auto;">
                <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" width="100" style="display:block;">
            </li>
            <li data-target="#carousel-thumb" data-slide-to="1" style="width:auto;">
                <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" width="100" style="display:block;">
            </li>
            <li data-target="#carousel-thumb" data-slide-to="2" style="width:auto;">
                <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" width="100" style="display:block;">
            </li>
        </ol>
    </div>

</div>

<script>

</script>

<?php
include './parts/footer.php';
?>