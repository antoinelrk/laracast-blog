@props(['trigger'])

<div {{ $attributes(['class' => '']) }} x-data="{ show: false }" @click.away="show = false">
    <div @click="show = ! show" {{ $attributes(['class' => '']) }}>
        {{ $trigger }}
    </div>

    <div x-show="show" class="py-2 absolute bg-gray-100 mt-10 rounded-xl w-full z-50 overflow-auto max-h-52">
        {{ $slot }}
    </div>
</div>