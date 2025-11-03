<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Rifold</title>
</head>

<body class="bg-white">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col items-center">

            <div class="mb-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" width="186" height="42" />
                </a>
            </div>

            <div class="flex space-x-6">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('katalog') }}">Katalog</a>
                <a href="{{ route('mixandmatch') }}">Mix and Match</a>
            </div>

        </div>
    </nav>

    <section>
        <div class="w-full">
            <img src="{{ asset('images/thumbnail.png') }}" alt="thumbnail" class="w-full h-auto object-cover">
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-9">
            <div class="overflow-hidden rounded-1xl shadow hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/kiri.png') }}" alt="Kiri" class="w-full h-full object-cover">
            </div>

            <div class="overflow-hidden rounded-1xl shadow hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/tengah.png') }}" alt="Tengah" class="w-full h-full object-cover">
            </div>

            <div class="overflow-hidden rounded-1xl shadow hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/kanan.png') }}" alt="Kanan" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <section class="about max-w-7xl mx-auto px-4 py-12 flex flex-col md:flex-row items-start justify-between gap-8">

        <div class="md:w-1/2 flex flex-col justify-between">
            <h1 class="text-4xl md:text-8xl font-extrabold leading-tight">
                FOR <br> THE <br> STORIES <br> AHEAD
            </h1>

            <h1 class="text-lg md:text-2xl mt-6 leading-relaxed">
                Dari kota kecil, kami belajar arti kedekatan.
                <br> Dari setiap produk, kami berusaha menghadirkan ketenangan.
                <br> Dan dari setiap pelanggan, kami percaya:
                cerita terbaik masih menunggu di depan sana.
                <br><br>
                Rifold — For The Stories Ahead.
            </h1>
        </div>

        <div class="md:w-1/2 flex justify-end">
            <img src="{{ asset('images/poloovercool.png') }}" alt="about" class="w-230 h-auto">
        </div>

    </section>


    <section class="seller bg-white">
        <div class="max-w-7xl mx-auto px-6 py-16 text-center">
            <h2 class="text-4xl font-bold mb-12 uppercase tracking-wide">RIFOLD Best Seller</h2>

            <div class="flex space-x-6 overflow-x-auto scroll-smooth pb-4 scrollbar-hide">
                <!-- Card 1 -->
                <div
                    class="flex-none w-64 bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-transform hover:scale-105">
                    <img src="{{ asset('images/kiri.png') }}" alt="Best Seller"
                        class="w-full h-64 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                    <p class="text-gray-600">Rp 150.000</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="flex-none w-64 bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-transform hover:scale-105">
                    <img src="{{ asset('images/kiri.png') }}" alt="Best Seller"
                        class="w-full h-64 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                    <p class="text-gray-600">Rp 200.000</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="flex-none w-64 bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-transform hover:scale-105">
                    <img src="{{ asset('images/kiri.png') }}" alt="Best Seller"
                        class="w-full h-64 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                    <p class="text-gray-600">Rp 300.000</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="flex-none w-64 bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-transform hover:scale-105">
                    <img src="{{ asset('images/kiri.png') }}" alt="Best Seller"
                        class="w-full h-64 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                    <p class="text-gray-600">Rp 350.000</p>
                </div>

                <!-- Card 5 -->
                <div
                    class="flex-none w-64 bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-transform hover:scale-105">
                    <img src="{{ asset('images/kiri.png') }}" alt="Best Seller"
                        class="w-full h-64 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                    <p class="text-gray-600">Rp 400.000</p>
                </div>
            </div>

            <div class="mt-12">
                <a href="{{ route('katalog') }}"
                    class="inline-block bg-black text-white px-8 py-3 rounded-md border border-black
         hover:bg-white hover:text-black transition-colors duration-300">
                    View All
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-[#FAF2E4] border-t border-black">
        <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8 border-b border-black">
            <div class="md:col-span-1 flex flex-col justify-between">
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    FOR THE <br> STORIES <br> AHEAD
                </h2>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-4">Company</h3>
                <ul class="space-y-2 text-gray-800">
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Address</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-4">Contact</h3>
                <ul class="space-y-2 text-gray-800">
                    <li><a href="#" class="hover:underline">WhatsApp</a></li>
                    <li><a href="mailto:rifold@gmail.com" class="hover:underline">rifold@gmail.com</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-4">Follow us</h3>
                <ul class="space-y-2 text-gray-800">
                    <li><a href="#" class="hover:underline">Instagram</a></li>
                    <li><a href="#" class="hover:underline">TikTok</a></li>
                    <li><a href="#" class="hover:underline">Facebook</a></li>
                </ul>
            </div>
        </div>

        <div class="text-center py-10">
            <h1 class="text-6xl md:text-8xl font-extrabold tracking-widest">RIFOLD.ID</h1>
        </div>
    </footer>

</body>

</html>
