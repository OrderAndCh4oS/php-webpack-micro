<?php require_once "webpack/assets.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="assets/<?= assets('main.css') ?>">
</head>
<body>
<div class="page-wrapper">
    <header class="container">
        <div class="row">
            <div class="column col-12">
                <h1 class="main-logo">Logo</h1>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="row">
            <article class="column col-12 col-sml-4 col-med-3 col-lrg-1">
                <div class="bc-grey panel panel-padding"></div>
            </article>
            <article class="column col-12 col-sml-8 col-med-9 col-lrg-11">
                <div class="bc-grey panel panel-padding"></div>
            </article>
        </div>
        <div class="row">
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-grey panel panel-padding"></div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-grey panel panel-padding"></div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-grey panel panel-padding"></div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-grey panel panel-padding"></div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-grey panel panel-padding"></div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-grey panel panel-padding"></div>
            </article>
        </div>
    </main>
</div>
<script src="assets/<?= assets('main.js') ?>"></script>
</body>
</html>
