<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Admin Dashboard</title>
    </head>
    <body class="bg-gray-100">

  @include('components.navbar')

  <main class="max-w-7xl mx-auto p-6 flex flex-col md:flex-row gap-6">

    <!-- SIDEBAR FILTER -->
    <aside class="w-full md:w-[25%] bg-white p-6 rounded-lg shadow-md">

      <h2 class="text-lg font-semibold mb-4">Category</h2>
      <ul class="space-y-2 text-sm">
        <li><input type="checkbox" /> Polo Shirt</li>
        <li><input type="checkbox" /> T-Shirt</li>
        <li><input type="checkbox" /> Hoodie</li>
        <li><input type="checkbox" /> Jacket</li>
      </ul>

      <h2 class="text-lg font-semibold mt-6 mb-4">Color</h2>
      <ul class="space-y-2 text-sm">
        <li><input type="checkbox" /> Green</li>
        <li><input type="checkbox" /> White</li>
        <li><input type="checkbox" /> Black</li>
        <li><input type="checkbox" /> Grey</li>
      </ul>
        <h2 class="text-lg font-semibold mt-6 mb-4">Size</h2>
        <ul class="space-y-2 text-sm">
          <li><input type="checkbox" /> S</li>
          <li><input type="checkbox" /> M</li>
          <li><input type="checkbox" /> L</li>
          <li><input type="checkbox" /> XL</li>
        </ul>
    </aside>
    <!-- PRODUCT GRID -->
    <section class="w-full md:w-[75%] grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Example Product Card -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('images/kanan.png') }}" alt="Product Image" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Product Name</h3>
            <p class="text-gray-600 mb-4">$29.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</button>
        </div>
      </div>
      <!-- Repeat Product Cards as needed -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('images/kanan.png') }}" alt="Product Image" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Product Name</h3>
            <p class="text-gray-600 mb-4">$29.99</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</button>
        </div>
      </div>
      <!-- Repeat Product Cards as needed -->
    </section>
    </main>
    </body>
</html>
