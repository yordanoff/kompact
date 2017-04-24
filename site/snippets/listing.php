<?php
    $articles = page('blog')->children()->visible()->sortBy('date', 'desc');
?>
<section>
    <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

            <article class="article index">
                <header>
                    <h2>
                        <a href="<?= $article->url() ?>" class="al"><?= $article->title()->html() ?></a>
                    </h2>
                </header>

                <div class="text">
                    <p>
                        <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                        <a href="<?= $article->url() ?>" class="al article-more">&rarr;</a>
                    </p>
                </div>

                <br />

                <p class="article-date">
                    <?= $article->date('F jS, Y') ?>
                </p>
            </article>

            <hr />

        <?php endforeach ?>
    <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
    <?php endif ?>
</section>
