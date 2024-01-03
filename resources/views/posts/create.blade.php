<x-layout>
    <section class="py-8 max-w-lg mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <x-panel>
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Title
                    </label>
                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="title"
                        id="title"
                        value="{{ old('title') }}"
                        required
                    >
    
                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Thumbnail
                    </label>

                    <input
                        type="file"
                        name="thumbnail"
                        id="thumbnail"
                    >
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Excerpt
                    </label>
    
                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        value="{{ old('excerpt') }}"
                        required
                    ></textarea>
                
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Body
                    </label>
    
                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="body"
                        id="body"
                        value="{{ old('body') }}"
                        required
                    ></textarea>
                
                    @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Category
                    </label>
    
                    <select
                        name="category_id"
                        required>
                        <option disabled selected>- Select a category -</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }} {{ old('category_id') == $category->id ? 'selected' : '' }}">{{ ucfirst($category->name) }}</option>
                        @endforeach
                    </select>
                
                    @error('category_id')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>
    </section>
</x-layout>