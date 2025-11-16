<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/ikonrasaumbi.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kampung Syurga | Blog Detail</title>
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
                Manfaat Bawang Merah untuk Kesehatan Tubuh
            </h1>
            <!-- Info Penulis & Tanggal -->
            <div class="flex items-center text-gray-600 text-sm mb-6">
                <span class="mr-2"><i class="fa fa-user"></i> Admin Kampung Syurga</span>
                <span class="mx-2">|</span>
                <span><i class="fa fa-calendar"></i> 03 Oktober 2025</span>
            </div>
            <!-- Gambar Blog -->
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=80" alt="Gambar Blog" class="w-full h-72 object-cover rounded-lg mb-8 shadow">
            <!-- Isi Blog -->
            <div class="prose max-w-none text-lg text-gray-800" style="font-family: 'Cormorant Garamond', serif;">
                <p>
                    Bawang merah tidak hanya digunakan sebagai bumbu dapur, tetapi juga memiliki banyak manfaat kesehatan. Kandungan antioksidan dan senyawa sulfur di dalamnya dapat membantu meningkatkan sistem imun, menurunkan tekanan darah, dan menjaga kesehatan jantung.
                </p>
                <h2>1. Meningkatkan Sistem Imun</h2>
                <p>
                    Konsumsi bawang merah secara rutin dapat membantu tubuh melawan infeksi dan penyakit.
                </p>
                <h2>2. Menurunkan Tekanan Darah</h2>
                <p>
                    Senyawa allicin pada bawang merah efektif menurunkan tekanan darah tinggi.
                </p>
                <h2>3. Menjaga Kesehatan Jantung</h2>
                <p>
                    Bawang merah membantu menurunkan kadar kolesterol jahat dalam darah.
                </p>
            </div>
        </section>
         <!-- Footer -->
        <x-footer />
    </main>
</body>
</html>
