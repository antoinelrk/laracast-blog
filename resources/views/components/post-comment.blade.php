@props(['comment'])

<article class="flex bg-gray-100 p-6 border border-gray-200 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img class="rounded-xl" src="https://i.pravatar.cc/60?u={{ $comment->id }}" width="60" height="60" alt="">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->name }}</h3>
            <p clas="text-xs">
                Posted on 
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>

        <p>{!! $comment->body !!}</p>
    </div>
</article>