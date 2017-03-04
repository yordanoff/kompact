<?php snippet('header') ?>

<div class="wrap-fluid">
    <h1><?= $page->title()->kirbytext() ?></h1>
    <div>
        <?= $page->text()->kirbytext() ?>
        <?php if( page('blog') ): ?>
            <br />
            <p class="article-date">
                <?= $page->date('F jS, Y') ?>
            </p>
        <?php endif; ?>
    </div>

    <hr />

    <?php if( page('blog') ): ?>
        <?php if($page->hasNextVisible() ): ?>
            <strong>Read Next</strong> <br />
            <a href="<?= $page->nextVisible()->url(); ?>" class="h1"><?= $page->nextVisible()->title(); ?></a>&rarr;
        <?php else: ?>
            <strong>End.</strong> <br />
            <a href="<?= $site->url(); ?>" class="h1">Start over</a>&rarr;
        <?php endif; ?>
    <?php endif; ?>

    <hr />
</div>

<?php snippet('footer') ?>
