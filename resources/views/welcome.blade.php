<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
        <title>Kampung Syurga</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
@production
    <!-- Production: Load dari build -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-CgDZ15ju.css') }}">
    <script type="module" src="{{ asset('build/assets/app-DtCVKgHt.js') }}"></script>
@else
    <!-- Development: Load dari Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endproduction
    </head>
    <body class="min-h-screen flex flex-col relative overflow-x-hidden">
        <!-- Navbar -->
        <x-navbar />
        <div class="relative z-20">
            <!-- Hero Section (langsung di sini, tidak dipisah komponen) -->
            <div class="relative min-h-screen flex flex-col items-center justify-center px-4 overflow-hidden">
                <!-- Background Video hanya di Hero -->
                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0" id="bg-video">
                    <source src="{{ asset('video/kampungsyurga1.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Overlay agar teks jelas -->
                <div class="absolute inset-0 bg-black/40 z-10"></div>
                <!-- Konten Hero di sini -->
                <span class="relative z-20 text-6xl font-bold text-[#E0E0E0] text-center break-words" style="font-family: 'Cormorant Garamond', serif;"
                data-aos="fade-up"
                data-aos-delay="500">
                    Kampung Syurga
                </span>
                <span class="relative z-20 text-4xl text-white font-light tracking-wide mt-1 text-center break-words" style="font-family: 'Great Vibes', cursive;"
                data-aos="fade-down"
                data-aos-delay="600">
                    Menanam Kebaikan, Memanen Masa Depan Pendidikan dan Agama.
                </span>
            </div>

            <!-- About Section -->
            <section class="relative overflow-hidden">
                <div class="relative z-20" id="about">
                    <div class="scroll-mt-20">
                        <x-section.home.about />
                    </div>
                </div>
            </section>

            <!-- Visi Misi Section -->
            <section class="relative overflow-hidden">
                <div class="relative z-20">
                    <x-section.home.visimisi />
                </div>
            </section>

            <!-- Footer -->
            <x-footer />
        </div>
    </body>
</html>
