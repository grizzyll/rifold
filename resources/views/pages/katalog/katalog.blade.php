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
  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col items-center">
      <div class="mb-2">
        <a href="{{ route('home') }}">
          <img src="{{ asset('images/logo.png') }}" alt="logo" width="186" height="42" />
        </a>
      </div>
      <div class="flex space-x-6 font-medium text-gray-700">
        <a href="{{ route('home') }}" class="hover:text-black">Home</a>
        <a href="{{ route('about') }}" class="hover:text-black">About</a>
        <a href="{{ route('katalog') }}" class="hover:text-black">Katalog</a>
        <a href="{{ route('mixandmatch') }}" class="hover:text-black">Mix and Match</a>
      </div>
    </div>
  </nav>

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

        <!-- PRODUK 1 -->
        <div class="product-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
          <img src="{{ asset('images/cactus green.png') }}" alt="Overcool Micro Pique Polo"
            class="w-full h-56 object-contain bg-gray-50 p-4" />
          <div class="p-4 text-center">
            <h3 class="text-base font-semibold text-gray-800">Overcool Micro Pique Polo</h3>
            <p class="text-gray-500 mt-1 text-sm">Rp 149.000</p>
          </div>
        </div>

        <!-- PRODUK 2 -->
        <div class="product-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
          <img src="{{ asset('images/polo_white.png') }}" alt="White Polo Classic"
            class="w-full h-56 object-contain bg-gray-50 p-4" />
          <div class="p-4 text-center">
            <h3 class="text-base font-semibold text-gray-800">White Polo Classic</h3>
            <p class="text-gray-500 mt-1 text-sm">Rp 149.000</p>
          </div>
        </div>

        <!-- PRODUK 3 -->
        <div class="product-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
          <img src="{{ asset('images/polo_black.png') }}" alt="Black Polo Essential"
            class="w-full h-56 object-contain bg-gray-50 p-4" />
          <div class="p-4 text-center">
            <h3 class="text-base font-semibold text-gray-800">Black Polo Essential</h3>
            <p class="text-gray-500 mt-1 text-sm">Rp 149.000</p>
          </div>
        </div>

      </div>
    </section>

  </main>
  @include('components.footer')
</body>
</html>
