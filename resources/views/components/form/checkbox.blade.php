@props([
    'name',
    'label' => $name
])

<x-form.field>
    <input type="checkbox" id="{{ $name }}" name="{{ $name }}" class="hidden type-checkbox">
    <label for="{{ $name }}" class="cursor-pointer flex items-center w-max">
        <div class="relative p-0.5 bg-gray-500 inline-block w-10 h-6 rounded-full cursor-pointer">
            <div
                id="toggle-indicator"
                class="absolute h-5 w-5 my-auto bg-white rounded-full shadow-md ">
            </div>
        </div>
        <span class="ml-2 text-gray-600">{{ ucwords($label) }}</span>
    </label>
</x-form.field>