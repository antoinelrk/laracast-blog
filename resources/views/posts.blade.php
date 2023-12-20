<x-layout>
    @foreach ($posts as $post)
    <article class="flex flex-col gap-y-1 rounded-xl border-solid border-2 p-4 w-full">
        <h2 class="text-2xl"> {!! $post->title !!} </h2>
        <h3 class="rounded-full bg-orange-100 text-orange-600 text-xs w-max my-2 py-1 px-2 font-bold leading-none">{{ strtoupper($post->category->name) }}</h3>
        <div>
            {!! $post->excerpt !!}
        </div>
        <a class="bg-blue-600 hover:bg-orange-600 mt-8 px-2 py-1 rounded m-x-auto w-max text-white" href="/posts/{{ $post->slug }}">Read more</a>
    
    </article>
    @endforeach
</x-layout>