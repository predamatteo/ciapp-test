<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title><?= $this->renderSection('title') ?></title>
</head>
<body>
    <nav>
        <a href="<?= url_to('/') ?>"> Test di DEV </a>
        <?php if(auth()->loggedIn()): ?>
            Hello, <?=esc(auth()->user()->first_name)?>
            <a href="<?= url_to("articles")?>">Articles</a>
            <?php if(auth()->user()->inGroup('admin')):?>
                <a href="<?= url_to("admin/users")?>">Users</a>
            <?php endif; ?>
            <a href="<?= url_to("logout")?>">Log out</a>
        <?php else: ?>
            <a href="<?= url_to("login")?>">Test</a>
        <?php endif; ?>
    </nav>

    <?php if (session()->has("message")): ?>
        <p><?=session("message");?></p>
    <?php endif; ?>
    <?php if (session()->has("error")): ?>
        <p><?=session("error");?></p>
    <?php endif; ?>
    <?= $this->renderSection('content') ?>
</body>
</html>