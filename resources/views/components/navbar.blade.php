<nav class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col items-center">

        <div class="mb-2">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" width="186" height="42" />
            </a>
        </div>

        <div class="flex space-x-6">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-black transition-colors duration-300">Home</a>
            <a href="{{ route('about') }}"
                class="text-gray-700 hover:text-black transition-colors duration-300">About</a>
            <a href="{{ route('katalog') }}"
                class="text-gray-700 hover:text-black transition-colors duration-300">Katalog</a>
            <a href="{{ route('mixandmatch') }}"
                class="text-gray-700 hover:text-black transition-colors duration-300">Mix and Match</a>
        </div>

    </div>
</nav>
