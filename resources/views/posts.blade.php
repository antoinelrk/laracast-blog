<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/app.css">
</head>
<body class="flex flex-col gap-y-8 p-3">
    <h1 class="text-3xl">My Blog</h1>
    @foreach ($posts as $post)
    <article class="flex flex-col gap-y-1 rounded bg-slate-300/30 p-4">
        <h2 class="text-2xl"> {{ $post->title }} </h2>
        <div>
            {{ $post->excerpt }}
        </div>
        <a class="bg-blue-600 hover:bg-orange-600 mt-8 px-2 py-1 rounded m-x-auto w-max text-white" href="/posts/{{ $post->slug }}">Read more</a>

    </article>
    @endforeach
</body>
</html>