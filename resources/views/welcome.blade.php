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
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
                html { font-size: 16px; }
                body { font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif; }
                @media (max-width: 640px) {
                    .text-6xl { font-size: 2.25rem !important; }
                    .text-4xl { font-size: 1.5rem !important; }
                    .min-h-screen { min-height: 70vh !important; }
                    .px-4 { padding-left: 1rem !important; padding-right: 1rem !important; }
                }
            </style>
        @endif
    </head>
    <body class="bg-gradient-to-br from-[#f8f3e7] via-[#ece9e6] to-[#e5e7eb] relative overflow-x-hidden">
        <!-- Navbar -->
        <x-navbar />
        <div class="relative z-20">
            <!-- Hero Section (langsung di sini, tidak dipisah komponen) -->
            <div class="relative min-h-screen flex flex-col items-center justify-center px-4 overflow-hidden">
                <!-- Background Image hanya untuk Hero -->
                <div class="absolute inset-0 w-full h-full object-cover z-0"
                    style="background-image: url('{{ asset('img/bawang.jpg') }}'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-position-y: -300px;">
                </div>
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
                    Rasa yang tumbuh dari bumi nusantara
                </span>
            </div>

            <!-- About Section -->
            <section class="relative py-20 overflow-hidden bg-[#F8F3E7]">
                <div class="relative z-20" id="about">
                    <div class="scroll-mt-20">
                        <x-section.home.about />
                    </div>
                </div>
            </section>

            <!-- Profil Section -->
            <section class="relative py-20 overflow-hidden bg-[#F8F3E7]">
                <div class="relative z-20">
                    <x-section.home.profilsection />
                </div>
            </section>

            <!-- Visi Misi Section -->
            <section class="relative py-20 overflow-hidden bg-[#F8F3E7]">
                <div class="relative z-20">
                    <x-section.home.visimisi />
                </div>
            </section>

            <!-- Footer -->
            <x-footer />
        </div>
    </body>
</html>
