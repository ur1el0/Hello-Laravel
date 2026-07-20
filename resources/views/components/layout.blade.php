<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Roosc') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 text-gray-800 antialiased font-sans">
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-900">Roosc</a>
                <nav class="space-x-4">
                    <a href="{{ url('/') }}" class="text-sm text-gray-600 hover:text-gray-900">Home</a>
                    <a href="{{ url('/about') }}" class="text-sm text-gray-600 hover:text-gray-900">About</a>
                    <a href="{{ url('/contact') }}" class="text-sm text-gray-600 hover:text-gray-900">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <footer class="border-t bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ config('app.name', 'Roosc') }}. All rights reserved.
        </div>
    </footer>
</body>
</html>