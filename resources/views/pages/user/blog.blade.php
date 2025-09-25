<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ras Umbi || Blog</title>
     <!-- Tailwind CSS (CDN for demo) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
</head>
<body class="min-h-screen flex flex-col items-center justify-center px-4 relative overflow-hidden">
     <!-- Background Video -->
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('video/bawang4.mp4') }}" type="video/mp4">
        </video>
        <!-- Overlay agar teks jelas -->
        <div class="absolute inset-0 bg-black/40 z-10"></div>
    {{-- Import Navbar --}}
    @include('components.navbar')
    <!-- Konten di tengah -->
        <div class="min-h-screen flex flex-col items-center justify-center relative z-20">
            <div class="flex flex-col items-center">
                <span class="text-6xl font-bold text-[#E0E0E0]" style="font-family: 'Cormorant Garamond', serif;"
                data-aos="fade-up"
                data-aos-delay="500">
                    Rasa Umbi
                </span>
                <span class="text-4xl text-white font-light tracking-wide mt-1" style="font-family: 'Great Vibes', cursive;"
                data-aos="fade-down"
                data-aos-delay="600">
                   Kupas Informasi, Sajikan Pengetahuan
                </span>
            </div>
        </div>
</body>
</html>