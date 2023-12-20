<x-layout>
    <a class="w-max hover:underline text-xs text-slate-400" href="/">Home</a>
    <article class="flex flex-col gap-y-4 pl-4">
        <h2 class="text-5xl m-auto">{!! $post->title !!}</h2>
        <h3 class="m-auto rounded-full bg-orange-100 text-orange-600 text-sm w-max py-1 px-2 font-bold leading-none">{{ strtoupper($post->category->name) }}</h3>
        {!! $post->body !!}
    </article>
</x-layout>