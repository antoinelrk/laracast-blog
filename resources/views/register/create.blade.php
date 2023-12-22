<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="POST" class="mt-10">
                @csrf
                <!-- Username -->
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>
    
                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="username"
                        id="username"
                        value="{{ old('username') }}"
                        required
                    >
    
                </div>

                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Name
                    </label>
    
                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        required
                    >

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
    
                </div>

                <!-- E-Mail -->
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        E-Mail
                    </label>
    
                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                    >
    
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
    
                    <input
                        type="password"
                        class="border border-gray-400 p-2 w-full"
                        name="password"
                        id="password"
                        required
                    >
    
                </div>

                <!-- Password confirmation -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password Confirmation
                    </label>
    
                    <input
                        type="password"
                        class="border border-gray-400 p-2 w-full"
                        name="password_confirmation"
                        id="password_confirmation"
                        required
                    >
    
                </div>

                <!-- Submit button -->
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>