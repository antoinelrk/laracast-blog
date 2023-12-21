<x-layout>
    @include ('_posts-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured-card :post="$posts[0]" />

        <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>
    </main>

    {{-- @if (Route::currentRouteName() !== "home")
        <a class="w-max hover:underline text-xs text-slate-400" href="/">Home</a>
    @endif
    @foreach ($posts as $post)
    <article class="flex flex-col gap-y-1 rounded-xl border-solid border-2 p-4 w-full">
        <h2 class="text-2xl"> {!! $post->title !!} </h2>
        <a class="text-sm text-blue-500 hover:underline" href="/authors/{{ $post->author->username }}">by {{ $post->author->name }}</a>
        <a href="/categories/{{ $post->category->slug }}" class="hover:bg-orange-200 rounded-full bg-orange-100 text-orange-600 text-xs w-max my-2 py-1 px-2 font-bold leading-none">
            {{ strtoupper($post->category->name) }}
        </a>
        <div>
            {!! $post->excerpt !!}
        </div>
        <a class="bg-blue-600 hover:bg-orange-600 mt-8 px-2 py-1 rounded m-x-auto w-max text-white" href="/posts/{{ $post->slug }}">Read more</a>
    
    </article>
    @endforeach --}}
</x-layout>