<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <?php foreach ($posts as $post): ?>
        <?= $post; ?>
    <?php endforeach; ?>
</body>
</html>