<?= $this->extend("layouts/default"); ?>

<?= $this->section("title") ?>
    Article
<?= $this->endSection() ?>

<?= $this->section("content") ?>
    <h1><?= esc($article->title)?></h1>
    <?php if($article->image):?>
        <img src="<?= url_to("Article\image::get",$article->id)?>">
        <?=form_open("articles/".$article->id."/image/delete")?>
        <button>delete</button>
        </form>
    <?php else: ?>
        <a href="<?=url_to('Article\Image::new',$article->id)?>">Edit Article image</a>
    <?php endif;?>
    <p><?= esc($article->content)?></p>

    <?php if($article->isOwner() || auth()->user()->can('articles.edit')):?>
        <a href="<?= url_to("Articles::edit",$article->id) ?>">Edit Article</a>
    <?php endif; ?>
    <br/>
    <?php if($article->isOwner() || auth()->user()->can('articles.delete')):?>
        <a href="<?= url_to("Articles::confirmDelete",$article->id) ?>">Delete Article</a>
        <!--        url_to("Url associata al metodo in routes",parametro/i) -->
        <!--        url_to("Articles::edit",$articles["id"])                -->
        <!--                articles / edit  / 1                            -->
    <?php endif; ?>
<?= $this->endSection() ?>