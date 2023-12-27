<x-guest-layout>
    <x-slot name="header">
        {{ __('Book Reviews') }}
    </x-slot>
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-blue-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <img src="/images/book1.webp" alt="Book Cover" class="mb-4 rounded-lg w-full h-64 object-contain">
            <h2 class="text-2xl font-bold mb-2 text-blue-500">Hide and Seek</h2>
            <p class="text-gray-700 mb-4">A captivating review of Book 1 with insightful analysis.</p>
            <a href="#" class="text-blue-500 hover:underline">Read Review</a>
        </div>
        <div class="bg-green-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <img src="/images/book2.jpg" alt="Book Cover" class="mb-4 rounded-lg w-full h-64 object-contain">
            <h2 class="text-2xl font-bold mb-2 text-green-500">The Adventure Playbook</h2>
            <p class="text-gray-700 mb-4">Explore the review of Book 2 and discover its literary merits.</p>
            <a href="#" class="text-green-500 hover:underline">Read Review</a>
        </div>
        <div class="bg-yellow-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <img src="/images/book3.jpg" alt="Book Cover" class="mb-4 rounded-lg w-full h-64 object-contain">
            <h2 class="text-2xl font-bold mb-2 text-yellow-500">A Journey to the Moon</h2>
            <p class="text-gray-700 mb-4">Dive into the world of Book 3 with this comprehensive book review.</p>
            <a href="#" class="text-yellow-500 hover:underline">Read Review</a>
        </div>
    </div>
</x-guest-layout>
