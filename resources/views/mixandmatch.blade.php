<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Rifold</title>
</head>

<body class="bg-gray-100">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col items-center">

            <div class="mb-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" width="186" height="42" />
                </a>
            </div>

            <div class="flex space-x-6">
                <a href="{{ route('home') }}" >Home</a>
                <a href="{{ route('about') }}" >About</a>
                <a href="{{ route('katalog') }}" >Katalog</a>
                <a href="{{ route('mixandmatch') }}" >Mix and Match</a>
            </div>

        </div>
    </nav>

</body>

</html>
