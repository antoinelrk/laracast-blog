@auth
<x-panel>
    <form action="{{ route('comment.store', $post) }}" method="POST">
        @csrf

        <header class="flex items-center">
            <img class="rounded-xl" src="https://i.pravatar.cc/40?u={{ auth()->id() }}" width="40" height="40" alt="">

            <h2 class="ml-4">Want to participate?</h2>
        </header>

        <div class="mt-10">
            <textarea
                name="body"
                class="w-full text-sm focus:outline-none focus:ring"
                rows="5"
                required
                placeholder="Quick, thing of something to say!"></textarea>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <x-submit-button>Post</x-submit-button>
        </div>
    </form>
</x-panel>
@else
<p class="font-semibold">
    <a class="text-blue-700 hover:underline" href="{{ route('register.create') }}">Register</a> or <a class="text-blue-700 hover:underline" href="{{ route('session.create') }}">log in</a> to leave a comment.
</p>
@endauth