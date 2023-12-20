<x-layout>
    <a class="w-max underline text-slate-500/70" href="/">Go Back</a>
    <article class="flex flex-col gap-y-1">
        <h2 class="text-2xl">{{ $post->title }}</h2>
        <p class="rounded bg-slate-300/30 p-4">{{ $post->body }}</p>
    </article>
</x-layout>