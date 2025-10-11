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
    <body class="bg-[#F8F3E7] relative overflow-x-hidden">
        <!-- Background Video -->
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('video/bawang4.mp4') }}" type="video/mp4">
        </video>
        <!-- Overlay agar teks jelas -->
        <div class="absolute inset-0 bg-black/40 z-10"></div>
        {{-- Import Navbar --}}
        <x-navbar />

        <div class="relative z-20">
            <!-- Hero Section -->
            <div class="min-h-screen flex flex-col items-center justify-center px-4">
                <div class="flex flex-col items-center">
                    <span class="text-6xl font-bold text-[#E0E0E0] text-center break-words" style="font-family: 'Cormorant Garamond', serif;"
                    data-aos="fade-up"
                    data-aos-delay="500">
                        Kampung Syurga
                    </span>
                    <span class="text-4xl text-white font-light tracking-wide mt-1 text-center break-words" style="font-family: 'Great Vibes', cursive;"
                    data-aos="fade-down"
                    data-aos-delay="600">
                        Rasa yang tumbuh dari bumi nusantara
                    </span>
                </div>
            </div>

             <!-- About Section -->
            <div id="about" class="scroll-mt-20">
                <x-section.about />
            </div>

             <!-- Profil Section -->
            <x-section.profilsection />

                <!-- Visi Misi Section -->
            <x-section.visimisi />

            <!-- Footer -->
            <x-footer />
        </div>
    </body>
</html>
