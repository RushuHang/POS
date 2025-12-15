<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'POS Sytem') }}</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-black min-h-screen p-6 lg:p-8">

    <!-- Navbar -->
    <header class="w-full flex justify-between items-center mb-6">
        <div class="text-xl font-bold">
            <h1>POS system</h1>
        </div>
        @if (Route::has('login'))
            <nav class="flex gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-5 py-1.5 border rounded-sm">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-5 py-1.5 border rounded-sm">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-5 py-1.5 border rounded-sm">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <!-- Page content -->
   <main class="flex flex-col lg:flex-row items-center lg:items-start justify-center lg:justify-between p-6 lg:p-12 bg-gray-50 dark:bg-gray-900 min-h-screen gap-8">
    <!-- Image -->
    <img src="{{ asset('images/departmentstore.png') }}" alt="Department Store" class="w-full lg:w-auto rounded-lg shadow-lg">


    <!-- Text Content -->
    <div class="lg:ml-8 text-center lg:text-left max-w-lg">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">Welcome to our POS SYSTEM</h2>
        <p class="text-lg lg:text-xl font-medium text-gray-700 dark:text-gray-300 leading-relaxed">
            Our state-of-the-art POS system streamlines your retail operations, making transactions faster, easier, and more accurate. Designed for both small businesses and large enterprises, it manages sales, inventory, and customer data in one intuitive interface. With real-time reporting and seamless integration with modern payment methods, this system ensures your store runs efficiently while providing an exceptional shopping experience for your customers.
        </p>
    </div>
</main>



</body>
</html>
