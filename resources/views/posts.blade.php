<x-layout>
    @if (Route::currentRouteName() === "categories")
        <a class="w-max hover:underline text-xs text-slate-400" href="/">Home</a>
    @endif
    @foreach ($posts as $post)
    <article class="flex flex-col gap-y-1 rounded-xl border-solid border-2 p-4 w-full">
        <h2 class="text-2xl"> {!! $post->title !!} </h2>
        <span class="text-sm text-blue-500">by {{ $post->user->username }}</span>
        <a href="/categories/{{ $post->category->slug }}" class="hover:bg-orange-200 rounded-full bg-orange-100 text-orange-600 text-xs w-max my-2 py-1 px-2 font-bold leading-none">
            {{ strtoupper($post->category->name) }}
        </a>
        <div>
            {!! $post->excerpt !!}
        </div>
        <a class="bg-blue-600 hover:bg-orange-600 mt-8 px-2 py-1 rounded m-x-auto w-max text-white" href="/posts/{{ $post->slug }}">Read more</a>
    
    </article>
    @endforeach
</x-layout>