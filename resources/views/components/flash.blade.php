@if (session('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="text-green-600 bg-green-100 fixed py-2 px-4 rounded bottom-3 right-3 text-sm"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif

@if (session('info'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="text-blue-600 bg-blue-100 fixed py-2 px-4 rounded bottom-3 right-3 text-sm"
    >
        <p>{{ session('info') }}</p>
    </div>
@endif

@if (session('error'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="text-red-600 bg-red-100 fixed py-2 px-4 rounded bottom-3 right-3 text-sm"
    >
        <p>{{ session('error') }}</p>
    </div>
@endif

@if (session('warning'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="text-yellow-700 bg-yellow-200 fixed py-2 px-4 rounded bottom-3 right-3 text-sm"
    >
        <p>{{ session('warning') }}</p>
    </div>
@endif