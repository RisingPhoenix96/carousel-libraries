<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>jQuery Carousel Libraries <?php if (isset($page_info['title'])) {
                                            echo "| " . $page_info['title'];
                                        } ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/carousel/owl.theme.default.min.css">
    <?php if ($page_info['body_id'] === 'bootstrap-carousel') : ?>
        <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.css">
    <?php endif; ?>
    <script src="/content/jquery.js"></script>
</head>

<body <?php if (isset($page_info['body_id'])) {
            echo "id = " . $page_info['body_id'] . "";
        } ?>>