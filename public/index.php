<?php
require_once "../vendor/autoload.php";
require_once "webpack/assets.php";
$faker = Faker\Factory::create();
?>
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
                <p class="main-logo header-one">Logo</p>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="row">
            <article class="column col-12 col-med-6 col-lrg-8">
                <div class="bc-light-grey panel panel-padding">
                    <h1><?= $faker->text(50) ?></h1>
                    <p><?= $faker->paragraph ?></p>
                    <p><?= $faker->paragraph ?></p>
                    <p><?= $faker->paragraph ?></p>
                </div>
            </article>
            <article class="column col-12 col-med-6 col-lrg-4">
                <div class="bc-light-grey panel panel-padding">
                    <h1><?= $faker->text(50) ?></h1>
                    <p><?= $faker->paragraph ?></p>
                </div>
            </article>
        </div>
        <div class="row">
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-light-grey panel panel-padding">
                     <h1><?= $faker->text(50) ?></h1>
                    <p><?= $faker->paragraph ?></p>
                </div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-light-grey panel panel-padding">
                     <h1><?= $faker->text(50) ?></h1>
                    <p><?= $faker->paragraph ?></p>
                </div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-light-grey panel panel-padding">
                     <h1><?= $faker->text(50) ?></h1>
                    <p><?= $faker->paragraph ?></p>
                </div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-light-grey panel panel-padding">
                     <h1><?= $faker->text(50) ?></h1>
                    <p><?= $faker->paragraph ?></p>
                </div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-light-grey panel panel-padding">
                     <h1><?= $faker->text(50) ?></h1>
                    <p><?= $faker->paragraph ?></p>
                </div>
            </article>
            <article class="column col-12 col-sml-6 col-med-4 col-lrg-3">
                <div class="bc-light-grey panel panel-padding">
                     <h1><?= $faker->text(50) ?></h1>
                    <p><?= $faker->paragraph ?></p>
                </div>
            </article>
        </div>
    </main>
</div>
<script src="assets/<?= assets('main.js') ?>"></script>
</body>
</html>
