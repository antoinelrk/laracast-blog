@props(['heading'])

<section class="py-8 max-w-5xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">{{ $heading }}</h1>

    <div class="flex">
        <aside class="w-64 pr-16">
            <h4 class="font-semibold mb-4">Links</h4>

            <ul>
                <li class="py-2">
                    <a
                        href="/admin"
                        class="{{ request()->is('admin') ? 'text-white bg-blue-500 hover:bg-blue-500 pointer-events-none font-semibold' : '' }}
                            hover:bg-gray-100 flex py-2 pl-2 rounded"
                        >Dashboard</a>
                </li>
            </ul>

            <h4 class="font-semibold my-4">Posts</h4>
            <ul>
                {{-- <li class="border-t pt-2"> --}}
                <li>
                    <a
                        href="/admin/posts"
                        class="{{ request()->is('admin/posts') ? 'text-white bg-blue-500 hover:bg-blue-500 pointer-events-none font-semibold' : '' }}
                            hover:bg-gray-100 flex py-2 pl-2 rounded"
                        >All Posts
                    </a>
                </li>
                <li class="pt-2">
                    <a
                        href="/admin/posts/create"
                        class="{{ request()->is('admin/posts/create') ? 'text-white bg-blue-500 hover:bg-blue-500 pointer-events-none font-semibold' : '' }}
                            hover:bg-gray-100 flex py-2 pl-2 rounded"
                        >New Post
                    </a>
                </li>
            </ul>
        </aside>
    
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>