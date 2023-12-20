<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $post->title ?></title>
</head>
<body>
    <a href="/">Go Back</a>
    <article>
        <h2><?= $post->title ?></h2>
        <p><?= $post->body ?></p>
    </article>
</body>
</html>