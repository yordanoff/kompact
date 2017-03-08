<ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
        <a class="al <?php e($p->isOpen(), ' active') ?>" href="<?php echo $p->url() ?>">
            <?php echo $p->title()->html() ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>
