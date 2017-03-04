<?php snippet('header') ?>

<header class="wrap-fluid">
    <h1><?= $page->title()->html() ?></h1>
    <div class="intro text">
        <?= $page->text()->kirbytext() ?>
    </div>
</header>

<hr />

<section class="wrap-fluid">
    <?php snippet('listing') ?>
</section>

<?php snippet('footer') ?>
