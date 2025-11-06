<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Rifold - Katalog</title>
    <style>
        .banner {
            width: 100%;
            max-width: 1293px;
            height: 501px;
            object-fit: cover;
            margin: 0 auto;
        }

        .product-card img {
            transition: transform 0.3s ease;
        }

        .product-card:hover img {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- NAVBAR -->
    @include('components.navbar')

    <!-- BANNER -->
    <section class="flex justify-center relative mt-4">
        <img src="{{ asset('images/banner katalog.png') }}" alt="Banner Katalog" class="banner rounded-lg shadow-md" />
    </section>

    <!-- KONTEN -->
    <main class="max-w-[1293px] mx-auto px-4 sm:px-6 lg:px-8 py-10 flex flex-col md:flex-row gap-10">

        <!-- SIDEBAR FILTER -->
        <aside class="w-full md:w-[25%] bg-white rounded-xl shadow-md p-5 h-fit">
            <h2 class="text-lg font-semibold mb-4">Product Type</h2>
            <ul class="space-y-2 text-sm">
                <li><input type="checkbox" checked /> All</li>
                <li><input type="checkbox" /> Flannel Shirts</li>
                <li><input type="checkbox" /> Jackets</li>
                <li><input type="checkbox" /> Polo Shirts</li>
                <li><input type="checkbox" /> T-Shirts</li>
            </ul>

            <h2 class="text-lg font-semibold mt-6 mb-4">Style</h2>
            <ul class="space-y-2 text-sm">
                <li><input type="checkbox" /> Oversized Fit</li>
                <li><input type="checkbox" /> Regular Fit</li>
                <li><input type="checkbox" /> Boxy Fit</li>
                <li><input type="checkbox" /> Casual wear</li>
            </ul>

            <h2 class="text-lg font-semibold mt-6 mb-4">Price Range</h2>
            <ul class="space-y-2 text-sm">
                <li><input type="checkbox" /> &lt; Rp100.000</li>
                <li><input type="checkbox" /> Rp100.000 – Rp130.000</li>
                <li><input type="checkbox" /> &gt; Rp130.000</li>
            </ul>
        </aside>

        <!-- PRODUK GRID -->
        <section class="w-full md:w-[75%]">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">

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
                    <p class="text-gray-600">Rp 150.000</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="flex-none w-64 bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-transform hover:scale-105">
                    <img src="{{ asset('images/kiri.png') }}" alt="Best Seller"
                        class="w-full h-64 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                    <p class="text-gray-600">Rp 150.000</p>
                </div>
            </div>
        </section>

    </main>
    @include('components.footer')
</body>

</html>
