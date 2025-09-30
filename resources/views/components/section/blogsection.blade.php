@php
$blogs = [
    [
        'id' => 1,
        'title' => 'Manfaat Gula Aren untuk Kesehatan Keluarga',
        'excerpt' => 'Pelajari mengapa gula aren menjadi pilihan yang lebih sehat dibanding gula putih biasa untuk kebutuhan sehari-hari keluarga Indonesia.',
        'author' => 'Dr. Sari Nutrisi',
        'date' => '15 September 2025',
        'category' => 'Kesehatan',
        'image' => 'img/ikonrasaumbi.png',
        'delay' => 200
    ],
    [
        'id' => 2,
        'title' => 'Resep Kue Tradisional dengan Gula Aren Asli',
        'excerpt' => 'Kumpulan resep kue tradisional Nusantara yang menggunakan gula aren sebagai pemanis alami untuk cita rasa yang autentik.',
        'author' => 'Chef Indira',
        'date' => '12 September 2025',
        'category' => 'Resep',
        'image' => 'img/ikonrasaumbi.png',
        'delay' => 400
    ],
    [
        'id' => 3,
        'title' => 'Proses Pembuatan Gula Aren yang Berkualitas',
        'excerpt' => 'Mengenal lebih dekat proses tradisional pembuatan gula aren dari pohon aren hingga menjadi produk siap konsumsi.',
        'author' => 'Pak Tani Aren',
        'date' => '10 September 2025',
        'category' => 'Edukasi',
        'image' => 'img/ikonrasaumbi.png',
        'delay' => 600
    ]
];
@endphp

<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6" style="font-family: 'Cormorant Garamond', serif;">
                Blog & Artikel
            </h2>
            <p class="text-gray-200 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Temukan berbagai tips, resep, dan informasi menarik seputar gula aren dan gaya hidup sehat alami
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @foreach($blogs as $blog)
                <div data-aos="fade-up" data-aos-delay="{{ $blog['delay'] }}">
                    <article class="bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl hover:bg-white/15 hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <!-- Image Section -->
                        <div class="relative overflow-hidden bg-gradient-to-br from-orange-500/20 to-red-600/20 p-8 cursor-pointer">
                            <img src="{{ asset($blog['image']) }}"
                                alt="{{ $blog['title'] }}"
                                class="h-24 w-auto object-contain mx-auto drop-shadow-lg group-hover:scale-110 transition-transform duration-300">

                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#A52A2A] text-white text-xs font-semibold px-3 py-1 rounded-full">
                                    {{ $blog['category'] }}
                                </span>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-6 cursor-pointer">
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#A52A2A] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                {{ $blog['title'] }}
                            </h3>

                            <!-- Excerpt -->
                            <p class="text-gray-300 text-sm mb-4 leading-relaxed group-hover:text-gray-200 transition-colors duration-300">
                                {{ $blog['excerpt'] }}
                            </p>

                            <!-- Meta Info -->
                            <div class="flex items-center justify-between text-xs text-gray-400 mb-4">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-user"></i>
                                    <span>{{ $blog['author'] }}</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-calendar"></i>
                                    <span>{{ $blog['date'] }}</span>
                                </div>
                            </div>

                            <!-- Read More Button -->
                            <div class="pt-4 border-t border-white/10">
                                <a href="/blog/{{ $blog['id'] }}"
                                   class="inline-flex items-center text-[#A52A2A] hover:text-[#A52A2A] font-semibold text-sm transition-colors duration-300">
                                    <span>Baca Selengkapnya</span>
                                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>

        <!-- CTA Button -->
        <div class="text-center" data-aos="fade-right" data-aos-delay="800">
            <a href="/blog" class="bg-gradient-to-r from-[#A52A2A] to-red-600 hover:from-[#A52A2A] hover:to-red-700 text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300 transform hover:scale-105 inline-flex items-center">
                <i class="fas fa-newspaper mr-2"></i>
                Lihat Semua Artikel
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
