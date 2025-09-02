<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Ras Umbi || 404 Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS (CDN for demo) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
</head>
<body class="min-h-screen flex flex-col items-center justify-center px-4 relative overflow-hidden">
    <!-- Background Video -->
    <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
        <source src="{{ asset('video/bawang4.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <!-- Overlay agar tulisan jelas -->
    <div class="absolute inset-0 bg-black/40 z-10"></div>
    <div 
        class="p-10 flex flex-col items-center relative z-20"
        data-aos="zoom-in"
        data-aos-duration="900"
    >
        <img src="/img/ikonrasaumbi.png" alt="Logo" class="h-12 w-auto mb-2 drop-shadow-lg" data-aos="fade-up" data-aos-delay="300">
        <h1 class="text-4xl font-extrabold text-[#A52A2A] mb-2 tracking-widest" data-aos="fade-up" data-aos-delay="500">404</h1>
        <p class="text-lg text-white mb-6 font-semibold" data-aos="fade-up" data-aos-delay="700">Halaman tidak ditemukan</p>
        <a href="/"  
        class="px-6 py-1 bg-[#A52A2A] text-white rounded-full shadow hover:bg-[#8B1A1A] hover:scale-105 transition-all duration-300 font-bold text-lg flex items-center justify-center"
        >
            Kembali ke Beranda
        </a>
    </div>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
    </script>
</body>
</html>