<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mix and Match - Rifold</title>
</head>

<body class="bg-white">

    @include('components.navbar')

    {{-- Judul --}}
    <header class="text-center mt-8 mb-6">
        <h1 class="text-3xl font-semibold text-gray-700">Mix and Match</h1>
    </header>

    {{-- Galeri --}}
    <main class="max-w-6xl mx-auto px-4 mb-16">
        <div class="columns-1 sm:columns-2 md:columns-3 gap-4 space-y-4">
            {{-- Gambar-gambar mix & match --}}
            <img src="{{ asset('images/mix1.png') }}" alt="Mix 1" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix2.png') }}" alt="Mix 2" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix3.png') }}" alt="Mix 3" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix4.png') }}" alt="Mix 4" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix5.png') }}" alt="Mix 5" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix6.png') }}" alt="Mix 6" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix7.png') }}" alt="Mix 7" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix8.png') }}" alt="Mix 8" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix9.png') }}" alt="Mix 9" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix10.png') }}" alt="Mix 10" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix11.png') }}" alt="Mix 11" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix12.png') }}" alt="Mix 12" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix13.png') }}" alt="Mix 13" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix14.png') }}" alt="Mix 14" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix15.png') }}" alt="Mix 15" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix16.png') }}" alt="Mix 16" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix17.png') }}" alt="Mix 17" class="rounded-lg w-full object-cover">
            <img src="{{ asset('images/mix18.png') }}" alt="Mix 18" class="rounded-lg w-full object-cover">
        </div>
    </main>

    @include('components.footer')
</body>

</html>
