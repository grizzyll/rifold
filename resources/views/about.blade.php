<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>NRifold</title>
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

    <section class="judul max-w-7xl mx-auto px-4 py-12">
        <div class="md:col-span-1 flex flex-col justify-between">
            <h2 class="text-4xl md:text-9xl font-extrabold leading-tight">
                FOR <br> THE <br> STORIES <br> AHEAD
            </h2>
        </div>
    </section>

<section class="sejarah bg-white py-12">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center gap-8">

    <div class="flex-shrink-0 md:w-1/2">
      <img src="{{ asset('images/kiri.png') }}" alt="Sejarah" class="rounded-lg shadow-lg w-full object-cover">
    </div>
    
    <article class="md:w-1/2 text-gray-800 text-justify leading-relaxed">
      <p class="text-start mb-4">
        Rifold lahir di kota kecil pada 2019 dengan semangat besar. Berawal dari obrolan sederhana antar sahabat yang percaya bahwa pakaian bukan sekadar kain, tetapi medium untuk menyimpan cerita,
        Rifold tumbuh menjadi brand yang menghadirkan makna di setiap detailnya. <br><br>
        That’s what it’s all about.
      </p>
    </article>
  </div>
</section>

</body>

</html>
