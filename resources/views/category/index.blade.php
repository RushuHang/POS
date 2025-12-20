<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
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
                                    <td>
                                        <a href="{{ route('category.show', $category->id) }}" class="text-blue-500 hover:underline">show details</a>
                                    </td>
                                     <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('category.edit', $category->id) }}" class="text-blue-500 hover:underline mr-2">update</a>

                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline"
                                            onclick="return confirm('Are you sure you want to delete this category?')">
                                            delete
                                        </button>
                                    </form>
                                </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <a href="{{ route('category.create') }}" class="text-blue-500 hover:underline">create category</a>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
