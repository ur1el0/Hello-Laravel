<x-layout>
    <x-slot:title>About Us</x-slot:title>

    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-100 p-8 sm:p-12">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">About Us</h1>
        <p class="text-gray-600 leading-relaxed mb-4">
            Welcome to {{ config('app.name', 'Roosc') }}! We are dedicated to providing clean, modern, and efficient web applications.
        </p>
        <p class="text-gray-600 leading-relaxed">
            Built with Laravel, Tailwind CSS, and Vite.
        </p>
    </div>
</x-layout>
