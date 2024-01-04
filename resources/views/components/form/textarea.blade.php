@props(['name'])

<x-form.field>
    <label for="{{ $name }}" class="block mb-2 uppercase font-bold text-xs text-gray-700">
        {{ ucwords($name) }}
    </label>

    <textarea
        class="border border-gray-200 p-2 w-full rounded"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        required
    ></textarea>

    <x-form.error :name="$name" />
</x-form.field>
