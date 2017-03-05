<?php snippet('header') ?>

<div class="wrap-fluid">

    <article class="article index">

        <header>
            <h1><?= $page->title()->kirbytext() ?></h1>
        </header>

        <div class="text">
            <?= $page->text()->kirbytext() ?>
        </div>

        <?php if( page('blog') ): ?>
            <br />

            <p class="article-date">
                <?= $page->date('F jS, Y') ?>
            </p>
        <?php endif; ?>

    </article>

    <hr />

    <?php if( page('blog') ): ?>
        <?php if($page->hasNextVisible() ): ?>
            <strong>Read Next</strong> <br />
            <a href="<?= $page->nextVisible()->url(); ?>" class="h1"><?= $page->nextVisible()->title(); ?></a> &rarr;
        <?php else: ?>
            <strong>End.</strong> <br />
            <a href="<?= $site->url(); ?>" class="h1">Start over</a> &rarr;
        <?php endif; ?>
    <?php endif; ?>

    <hr />
</div>

<?php snippet('footer') ?>
