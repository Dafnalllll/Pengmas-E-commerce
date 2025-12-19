<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $blog->title }} | Kampung Syurga</title>
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
    <!-- Background Image -->
    <div class="fixed inset-0 w-full h-full object-cover z-0"
         style="background-image: url('{{ asset('img/bawang.webp') }}'); background-size: cover; background-position: center;">
    </div>
    <!-- Overlay agar teks jelas -->
    <div class="fixed inset-0 bg-black/50 z-10"></div>

    {{-- Import Navbar --}}
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-1 relative z-20 pt-20">
        <section class="max-w-3xl mx-auto bg-white/90 rounded-xl shadow-lg p-8 mt-16 mb-16" data-aos="fade-up">
            <!-- Judul Blog -->
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900" style="font-family: 'Cormorant Garamond', serif;">
                {{ $blog->title }}
            </h1>

            <!-- Info Penulis & Tanggal -->
            <div class="flex items-center text-gray-600 text-sm mb-6">
                <span class="mr-2">
                    <i class="fa fa-user"></i> {{ $blog->author ?? 'Admin Kampung Syurga' }}
                </span>
                <span class="mx-2">|</span>
                <span>

                    <i class="fa fa-calendar"></i>
                    {{ \Carbon\Carbon::parse($blog->created_at)->locale('id')->isoFormat('D MMMM YYYY') }}
                </span>
            </div>

            <!-- Gambar Blog -->
            @if($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}"
                     alt="{{ $blog->title }}"
                     class="w-full h-72 object-cover rounded-lg mb-8 shadow"
                     onerror="this.onerror=null; this.src='{{ asset('img/ikonrasaumbi.png') }}';">
            @else
                <div class="w-full h-72 bg-gradient-to-br from-orange-500/20 to-red-600/20 flex items-center justify-center rounded-lg mb-8">
                    <img src="{{ asset('img/ikonrasaumbi.png') }}" alt="Default" class="h-32 opacity-50">
                </div>
            @endif

            <!-- Isi Blog -->
            <div class="prose max-w-none text-lg text-gray-800 text-justify prose-p:mb-5" style="font-family: 'Cormorant Garamond', serif;">
                {!! $blog->content !!}
            </div>

            <!-- Back Button -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <a href="{{ route('blogs') }}"
                   class="inline-flex items-center gap-2 bg-[#A52A2A] hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-105">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Semua Blog
                </a>
            </div>
        </section>

        <!-- Footer -->
        <x-footer />
    </main>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>
</body>
</html>
