<x-layout>
    <a class="w-max underline text-slate-500/70" href="/">Go Back</a>
    <article class="flex flex-col gap-y-1">
        <h2 class="text-2xl pl-4">{!! $post->title !!}</h2>
        {!! $post->body !!}
    </article>
</x-layout>