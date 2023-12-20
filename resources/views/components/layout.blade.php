<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/app.css">
</head>
<body class="flex flex-col gap-y-4 p-3">
    <h1 class="text-3xl">My Blog</h1>
    {{ $slot }}
</body>
</html>