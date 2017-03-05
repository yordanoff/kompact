<?php snippet('header') ?>

    <div class="section" style="overflow: initial;">

        <div class="grid svg-elastic-wrap">

            <div class="wrap-lg horizontalSlideContainer">

                <div class="slide cursorTrigger">
                    <h1 class="title"><?= $page->title()->html() ?></h1>
                </div>

                <?php
                // Images for the "project" template are sortable. You
                // can change the display by clicking the 'edit' button
                // above the files list in the sidebar.
                foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
                  <div class="slide">
                      <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" class="cursorTrigger" />
                  </div>
                <?php endforeach ?>
                <div class="slide cursorTrigger">
                    <div class="grid">
                        <div class="text col-4 centered">
                            <time class="styled"><?= $page->year() ?></time>
                            <?= $page->text()->kirbytext() ?>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="btn-info">Info</a>
            <a href="#" class="btn-next"><i class="fa fa-unsorted"></i></a>

        </div>

        <?php // <div class="background"></div> ?>

        <svg viewbox="0 0 100 200" preserveAspectRatio="none" class="svg-path">
            <path id="box" d="M0,0 H100 V100 Q50,150 0,100"></path>
        </svg>
    </div>

<?php snippet('footer') ?>
