<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Kampung Syurga | Product</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Great+Vibes&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="min-h-screen flex flex-col relative overflow-x-hidden">
    {{-- Import Navbar --}}
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-1 relative z-20 ">
        <!-- Hero Section -->
        <section class="relative min-h-screen flex flex-col items-center justify-center px-4">
            <!-- Background Video hanya di Hero -->
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0"
                id="bg-video">
                <source src="{{ asset('video/kampungsyurga1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Overlay agar teks jelas -->
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class=" relative z-20 text-center mb-24">
                <h1 class="text-5xl md:text-6xl font-bold text-[#E0E0E0] mb-4"
                    style="font-family: 'Cormorant Garamond', serif;" data-aos="fade-up" data-aos-delay="500">
                    Kampung Syurga
                </h1>
                <p class="text-2xl md:text-4xl text-white font-light tracking-wide"
                    style="font-family: 'Great Vibes', cursive;" data-aos="fade-down" data-aos-delay="600">
                    Jelajahi Produk, Temukan Kelezatan
                </p>
            </div>
        </section>

        <!-- Product Section Component -->
        <x-section.product.produksection :products="$products" />

        <!-- Footer -->
        <x-footer />
    </main>
</body>

</html>