@props(['trigger'])

<div class="w-full" x-data="{ show: false }" @click.away="show = false">
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="z-50 py-2 w-full absolute bg-gray-100 mt-2 rounded-xl">
        {{ $slot }}
    </div>
</div>