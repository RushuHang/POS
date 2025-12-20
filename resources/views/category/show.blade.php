<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $category->name ?? 'Category Details' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h1 class="text-2xl font-bold mb-4">{{ $category->name }}</h1>
                    
                    <p class="mb-4"><strong>Description:</strong> {{ $category->description ?? 'No description available.' }}</p>

                    <p><strong>Created at:</strong> {{ $category->created_at->format('d M Y') }}</p>
                    <p><strong>Updated at:</strong> {{ $category->updated_at->format('d M Y') }}</p>

                    <a href="{{ route('category.index') }}" class="mt-4 inline-block text-blue-500 hover:underline">
                        &larr; Back to Categories
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
