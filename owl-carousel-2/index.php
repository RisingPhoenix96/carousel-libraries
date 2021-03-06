<?php

$page_info = array(
    'title' => 'Owl Carousel 2',
    'body_id' => 'owl-carousel',
);

include "../includes/header.php";

?>

<h1 class="banner -owl-carousel-banner">Owl Carousel 2</h1>

<div class="page-wrap">

    <h2 class="carousel-type-title">Standard Slider</h2>

    <?php include "./parts/standard_slide.php"; ?>

    <h2 class="carousel-type-title">Standard Carousel</h2>

    <?php include "./parts/standard_carousel.php"; ?>

    <h2 class="carousel-type-title">Centered Carousel</h2>

    <?php include "./parts/centered_carousel.php"; ?>

    <h2 class="carousel-type-title">Lazy Carousel</h2>

    <?php include "./parts/lazy_carousel.php"; ?>

</div>

<script src="/owl-carousel-2/owl-slide.js"></script>

<?php include "../includes/footer.php" ?>