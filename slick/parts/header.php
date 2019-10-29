<?php

$page_info = array(
    'title' => 'Slick',
    'body_id' => 'slick',
);

include "../includes/header.php";

?>

<script src="/slick/slick.min.js"></script>

<h1 class="banner -owl-carousel-banner">
    <?= $page_info['title']; ?><br />
    <a href="/" class="home-link">Front Page</a>
</h1>

<div class="page-wrap">