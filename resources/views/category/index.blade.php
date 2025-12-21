<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $category->name ?? 'Category Details' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h1 class="text-xl text-center font-bold mb-4">All Categories</h1>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Description
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200">
                            @foreach($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                        
                                            {{ $category->name }}
                                       
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                        {{ $category->description }}
                                    </td>
                                    <td class="px-6 py-4 flex gap-4">
                                        <x-button href="{{ route('category.show', $category->id) }}">
                                            show details
                                        </x-button>

                                        <x-button href="{{ route('category.edit', $category->id) }}">
                                            update
                                        </x-button>
                                        <div>
                                        @include('category.delete', ['category' => $category])
                                        </div>
                                    </td>

                                    </form>
                                </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        <x-button href="{{ route('category.create') }}">
                                            create category
                                        </x-button>                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
