<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $site->title()->html() ?> &middot; <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="twitter:image" content="http://themes.yordanoff.net/kompact/kompact.jpg" />
    <meta name="og:image" content="http://themes.yordanoff.net/kompact/kompact.jpg" />
    <link rel="shortcut icon" href="<?php echo $site->url() ?>/assets/images/favicon.ico" type="image/x-icon" />
    <?= css('assets/css/main.css') ?>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?= js('assets/scripts/animsition.min.js') ?>
</head>
<body>

    <aside>
        <?php snippet('menu') ?>
    </aside>

    <div id="canvas">

        <header class="header wrap-fluid cf" role="banner">
            <div class="wrap-fluid">
                <a href="<?= url() ?>" class="logo al" rel="home"><?= $site->title()->html() ?></a>
            </div>

            <div class="hamburger-container">
                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </header>

        <div id="container">
