<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Roosc') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 text-gray-800 antialiased font-sans flex flex-col justify-between">
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600 hover:text-indigo-700 transition">
                    {{ config('app.name', 'Roosc') }}
                </a>
                <nav class="flex space-x-6">
                    <a href="{{ url('/') }}" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">Home</a>
                    <a href="{{ url('/about') }}" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">About</a>
                    <a href="{{ url('/contact') }}" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="py-10 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <footer class="border-t border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ config('app.name', 'Roosc') }}. All rights reserved.
        </div>
    </footer>
</body>
</html>