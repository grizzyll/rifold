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

    <section class="about max-w-7xl mx-auto px-4 py-12 flex flex-col md:flex-row items-start justify-between gap-8">

        <div class="md:w-1/2 flex flex-col justify-between">
            <img src="{{ asset('images/poloovercool.png') }}" alt="about" class="w-230 h-auto">

        </div>

        <div class="md:w-1/2 flex justify-end">
            <h1 class="text-lg md:text-5xl mt-6 leading-relaxed font-poppins">
                Rifold lahir di kota kecil pada 2019 dengan semangat besar.
                Berawal dari obrolan sederhana antar sahabat yang percaya bahwa pakaian bukan sekadar kain,
                tetapi medium untuk menyimpan cerita, Rifold tumbuh menjadi brand yang menghadirkan makna di setiap
                detailnya.
            </h1>
        </div>

    </section>

    <section class="about max-w-7xl mx-auto px-4 py-12 flex flex-col md:flex-row items-start justify-between gap-8">

        <div class="md:w-1/2 flex flex-col justify-between">
            <h1 class="text-lg md:text-4xl mt-6 leading-relaxed font-poppins">
                Di setiap prosesnya—mulai dari pemilihan kain, rancangan desain, hingga detail produksi—Rifold berpegang
                pada nilai:
                hangat, personal, dan soulful. Kami ingin setiap pakaian yang kami buat bukan hanya dipakai,
                tetapi juga menjadi bagian dari perjalanan hidup pemakainya.<br>
                <br> Tagline kami, “For The Stories Ahead”, adalah pengingat bahwa setiap orang sedang menulis kisahnya
                masing-masing.
                Dan Rifold hadir untuk menemani perjalanan itu—entah di momen sederhana sehari-hari, atau di langkah
                besar yang mengubah hidup.
            </h1>
        </div>

        <div class="md:w-1/2 flex justify-end">
            <img src="{{ asset('images/about2.png') }}" alt="about" class="w-230 h-auto">
        </div>

    </section>
    <section class="about max-w-7xl mx-auto px-4 py-12 flex flex-col md:flex-row items-start justify-between gap-8">

        <div class="md:w-1/2 flex flex-col justify-between">
            <img src="{{ asset('images/about3.png') }}" alt="about" class="w-230 h-auto">
        </div>

        <div class="md:w-1/2 flex justify-end">
            <h1 class="text-lg md:text-4xl mt-6 leading-relaxed font-poppins">
                Dari kota kecil, kami belajar arti kedekatan. Dari setiap produk,
                kami berusaha menghadirkan ketenangan. Dan dari setiap pelanggan,
                kami percaya: cerita terbaik masih menunggu di depan sana.
                Rifold — For The Stories Ahead.
            </h1>
        </div>

    </section>

</body>

</html>
