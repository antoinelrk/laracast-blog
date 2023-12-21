@props(['category'])

<a class="block text-left px-3 text-sm leading-8 hover:bg-blue-500 focus:bg-blue-500 hover:text-white w-full"
    href="{{ isset($category) ? "/categories/{$category->slug}" : '/' }}">
    {{ isset($category) ? ucwords($category->name) : 'All' }}
</a>