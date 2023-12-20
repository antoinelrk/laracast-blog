<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <h1>My Blog</h1>
    <?php foreach ($posts as $post): ?>
        <h2>
            <a href="/posts/<?= $post->slug ?>"><?= $post->title ?></a>
        </h2>
        <div>
            <?= $post->excerpt ?>
        </div>
    <?php endforeach; ?>
</body>
</html>