<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/ikonrasaumbi.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kampung Syurga | SOP Detail</title>
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
    <!-- Background Video -->
    <video autoplay loop muted playsinline class="fixed inset-0 w-full h-full object-cover z-0">
        <source src="video/bawang4.mp4" type="video/mp4">
    </video>
    <!-- Overlay agar teks jelas -->
    <div class="fixed inset-0 bg-black/50 z-10"></div>

    {{-- Import Navbar --}}
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-1 relative z-20 pt-20">
        <section class="max-w-3xl mx-auto bg-white/90 rounded-xl shadow-lg p-8 mt-16 mb-16" data-aos="fade-up">
            <!-- Judul SOP -->
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900" style="font-family: 'Cormorant Garamond', serif;">
                SOP: Pelaksanaan Produksi Gula Aren
            </h1>
            <!-- Info Penanggung Jawab & Tanggal -->
            <div class="flex items-center text-gray-600 text-sm mb-6">
                <span class="mr-2"><i class="fa fa-user"></i> Tim Produksi Kampung Syurga</span>
                <span class="mx-2">|</span>
                <span><i class="fa fa-calendar"></i> 03 Oktober 2025</span>
            </div>

            <!-- Tombol Download (tampilan saja) -->
            <div class="flex items-center gap-3 mb-6">
                <a href="{{ url()->previous() }}"
                   class="inline-flex items-center px-4 py-2 bg-[#A52A2A] text-white rounded hover:bg-red-500 transition"
                   aria-label="Kembali">
                    <i class="fa-solid fa-arrow-left mr-2"></i>Kembali
                </a>

                <a href="#" data-file="sop-pelaksanaan-produksi-gula-aren.pdf"
                   class="inline-flex items-center px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700 transition"
                   aria-label="Download SOP Pelaksanaan Produksi Gula Aren">
                    <i class="fa-solid fa-download mr-2"></i>Download
                </a>
            </div>

            <!-- Gambar SOP -->
            <img src="{{ asset('img/ikonrasaumbi.png') }}" alt="Gambar SOP" class="w-full h-72 object-cover rounded-lg mb-8 shadow">
            <!-- Isi SOP -->
            <div class="prose max-w-none text-lg text-gray-800" style="font-family: 'Cormorant Garamond', serif;">
                <h2>1. Persiapan</h2>
                <p>
                    Pastikan semua alat dan bahan sudah tersedia dan dalam kondisi baik sebelum memulai proses produksi.
                </p>
                <h2>2. Pelaksanaan</h2>
                <p>
                    Ikuti setiap langkah produksi sesuai SOP yang telah ditetapkan untuk menjaga kualitas produk.
                </p>
                <h2>3. Pengecekan</h2>
                <p>
                    Lakukan pengecekan hasil produksi sebelum dikemas dan didistribusikan.
                </p>
                <h2>4. Dokumentasi & Arsip</h2>
                <p>
                    Catat seluruh proses dan simpan dokumen penting sebagai arsip.
                </p>
            </div>
        </section>
         <!-- Footer -->
        <x-footer />
    </main>

    <!-- Optional: small script to show it's a UI-only button (remove if not needed) -->
    <script>
        document.addEventListener('click', function(e){
            const btn = e.target.closest('a[data-file]');
            if(!btn) return;
            e.preventDefault();
            const file = btn.getAttribute('data-file') || 'file.pdf';
            // UI-only: tidak menampilkan alert — hanya log ke console untuk debugging ringan
            console.info('Download (UI-only) clicked:', file);
        });
    </script>
</body>
</html>
