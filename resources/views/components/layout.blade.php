<!doctype html>

<head>
    <title>Laravel From Scratch Blog</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 space-x-8 flex">
                <a href="/" class="text-xs font-bold uppercase hover:text-blue-500 flex items-center">Home Page</a>

                @auth
                    <x-dropdown class="flex" class="flex relative">
                        <x-slot name="trigger">
                            <button class="relative text-xs font-bold uppercase hover:text-blue-500 flex items-center">Welcome, {{ auth()->user()->name }}</button>
                        </x-slot>
                        <x-dropdown-item href="/admin" :active="request()->is('admin')">Dashboard</x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                        <x-dropdown-item
                            x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()"
                            class="cursor-pointer font-bold text-red-500 hover:text-white text-xs flex items-center">
                            Log Out
                        </x-dropdown-item>

                        <form id="logout-form" class="hidden" action="/logout" method="POST">@csrf</form>
                    </x-dropdown>
                    
                @else
                    <a href="/register" class="text-xs font-bold uppercase hover:text-blue-500  flex items-center">Register</a>
                    <a href="/login" class="text-xs font-bold uppercase hover:text-blue-500  flex items-center">Log In</a>
                @endauth

                <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        {{ $slot }}

        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="lg:flex text-sm">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                placeholder="Your email address"
                                class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none" />
                        </div>

                        <button
                            type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3
                                    rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <x-flash />
</body>
