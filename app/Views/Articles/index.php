<?php $this->extend('layouts/default'); ?>

<?php $this->section('title'); ?>
    Articles
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
    <h1>
        Articles
    </h1>

    <h4>
        <a href="<?= url_to("Articles::new")?>">
            New
        </a>
    </h4>

    <?php foreach ($articles as $article): ?>
        <h2>
            <a href="<?= site_url('/articles/'.$article->id)?>">
                <?=esc($article->title)?>
            </a>
        </h2>
        <em>By <?=esc($article->first_name)?></em>
        <p>
            <?=esc($article->content)?>
        </p>
    <?php endforeach; ?>
    <?= $pager->simpleLinks();?>
<?php $this->endSection(); ?>
