<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/app.css">
</head>
<body class="flex flex-col gap-y-8 p-3">
    <a class="w-max underline text-slate-500/70" href="/">Go Back</a>
    <article class="flex flex-col gap-y-1">
        <h2 class="text-2xl">{{ $post->title }}</h2>
        <p class="rounded bg-slate-300/30 p-4">{{ $post->body }}</p>
    </article>
</body>
</html>