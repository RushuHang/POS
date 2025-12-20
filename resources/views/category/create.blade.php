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

                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <label id="name" for="name">Category Name</label>
                        <input type="text" name="name" id="name" required>
                        <label id="description"   for="description">description</label>
                        <input type="text" name="description" id="description" required>

                    <button type="submit">Save</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
