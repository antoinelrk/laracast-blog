<x-layout>
    <x-setting heading="Manage posts">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $post->title }}
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @php
                                            $classes = 'px-2 inline-flex text-xs leading-5 font-semibold rounded-full';

                                            if ($post->published_at !== null) {
                                                $classes .= ' bg-green-100 text-green-800';
                                            } else {
                                                $classes .= ' bg-yellow-100 text-yellow-800';
                                            }
                                        @endphp
                                        <span
                                            class="{{ $classes }}"
                                            >
                                            {{ $post->published_at ? 'Published' : 'Pending' }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-xs font-bold">
                                        <a href="/admin/posts/{{ $post->id }}/edit" class="text-white bg-blue-500 py-1 px-4 rounded-full uppercase hover:bg-blue-600">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>