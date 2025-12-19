<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kampung Syurga | SOP</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Great+Vibes&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="min-h-screen flex flex-col relative overflow-x-hidden">
    {{-- Import Navbar --}}
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-1 relative z-20">
        <!-- Hero Section -->
        <section class="relative min-h-screen flex flex-col items-center justify-center px-0 pt-0 pb-0 overflow-hidden">
            <!-- Background Video hanya di Hero -->
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0" id="bg-video">
                <source src="{{ asset('video/kampungsyurga1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Overlay agar teks jelas -->
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="relative z-20 text-center mb-12">
                <h1 class="text-5xl md:text-6xl font-bold text-[#E0E0E0] mb-4"
                    style="font-family: 'Cormorant Garamond', serif;"
                    data-aos="fade-up"
                    data-aos-delay="300">
                    Standar Operasional Prosedur
                </h1>
                <p class="text-2xl md:text-4xl text-white font-light tracking-wide"
                   style="font-family: 'Great Vibes', cursive;"
                   data-aos="fade-down"
                   data-aos-delay="400">
                    Panduan langkah demi langkah untuk proses terbaik
                </p>
            </div>
        </section>

        <!-- SOP Section Component -->
        <x-section.sop.sopsection :sops="$sops"  />
        <!-- Footer -->
        <x-footer />
    </main>
</body>
</html>
