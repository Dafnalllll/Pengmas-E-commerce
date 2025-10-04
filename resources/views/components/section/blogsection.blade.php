@props(['blogs'])

@php
    $initialCount = 3;
    $blogs = [
        [
            'judul_blog' => 'Manfaat Gula Aren untuk Kesehatan',
            'excerpt' => 'Gula aren mengandung mineral dan vitamin yang baik untuk tubuh. Simak manfaat lengkapnya di sini!',
            'author' => 'Dr. Sari',
            'tanggal_upload' => '2025-10-01',
            'category' => 'Kesehatan',
            'image' => 'img/ikonrasaumbi.png',
        ],
        [
            'judul_blog' => 'Resep Minuman Segar dengan Gula Aren',
            'excerpt' => 'Coba resep minuman kekinian berbahan dasar gula aren yang mudah dibuat di rumah.',
            'author' => 'Chef Indira',
            'tanggal_upload' => '2025-09-28',
            'category' => 'Resep',
            'image' => 'img/ikonrasaumbi.png',
        ],
        [
            'judul_blog' => 'Tips Menyimpan Gula Aren Agar Awet',
            'excerpt' => 'Agar gula aren tidak mudah mencair dan berjamur, simak tips penyimpanannya berikut.',
            'author' => 'Ibu Dapur',
            'tanggal_upload' => '2025-09-20',
            'category' => 'Tips',
            'image' => 'img/ikonrasaumbi.png',
        ],
        [
            'judul_blog' => 'Gula Aren vs Gula Kelapa',
            'excerpt' => 'Mana yang lebih sehat dan cocok untuk keluarga? Temukan jawabannya di artikel ini.',
            'author' => 'Ahli Gizi',
            'tanggal_upload' => '2025-09-15',
            'category' => 'Edukasi',
            'image' => 'img/ikonrasaumbi.png',
        ],
        [
            'judul_blog' => 'Kreasi Jajanan Pasar dengan Gula Aren',
            'excerpt' => 'Inspirasi jajanan pasar tradisional yang lezat dan sehat dengan gula aren.',
            'author' => 'Chef Rina',
            'tanggal_upload' => '2025-09-10',
            'category' => 'Resep',
            'image' => 'img/ikonrasaumbi.png',
        ],
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
        <div id="blog-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @foreach($blogs as $i => $blog)
                <div class="blog-card" style="display: {{ $i < $initialCount ? 'block' : 'none' }};" data-aos="fade-up" data-aos-delay="{{ 200 + $i * 200 }}">
                    <article class="bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl hover:bg-white/15 hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <!-- Image Section -->
                        <div class="relative overflow-hidden bg-gradient-to-br from-orange-500/20 to-red-600/20 p-8 cursor-pointer">
                            <img src="{{ asset($blog['image']) }}"
                                alt="foto_blog"
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
                                {{ $blog['judul_blog'] }}
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
                                    <span>{{ $blog['tanggal_upload'] }}</span>
                                </div>
                            </div>

                            <!-- Read More Button -->
                            <div class="pt-4 border-t border-white/10">
                                <a href="{{ url('/blog-detail') }}" class="inline-block px-4 py-2 bg-[#A52A2A] text-white rounded hover:bg-red-500 transition">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>

        <!-- CTA Button -->
        @if(count($blogs) > $initialCount)
        <div class="text-center" id="lihat-semua-artikel-wrapper" data-aos="fade-right" data-aos-delay="800">
            <button onclick="lihatSemuaArtikel()"
                class="bg-gradient-to-r from-[#A52A2A] to-red-600 hover:from-[#A52A2A] hover:to-red-700 text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300 transform hover:scale-105 inline-flex items-center">
                <i class="fas fa-newspaper mr-2"></i>
                Lihat Semua Artikel
                <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
        <div class="text-center" id="tutup-semua-artikel-wrapper" style="display:none" data-aos="fade-left" data-aos-delay="800">
            <button onclick="tutupSemuaArtikel()"
                class="bg-gradient-to-r from-gray-500 to-gray-400 hover:from-gray-700 hover:to-gray-600 text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300 transform hover:scale-105 inline-flex items-center">
                <i class="fas fa-eye-slash mr-2"></i>
                Tutup Semua Artikel
                <i class="fas fa-arrow-up ml-2"></i>
            </button>
        </div>
        @endif
    </div>
</section>

<script>
    function lihatSemuaArtikel() {
        document.querySelectorAll('.blog-card').forEach(card => card.style.display = 'block');
        document.getElementById('lihat-semua-artikel-wrapper').style.display = 'none';
        document.getElementById('tutup-semua-artikel-wrapper').style.display = 'block';
    }
    function tutupSemuaArtikel() {
        let initial = {{ $initialCount }};
        document.querySelectorAll('.blog-card').forEach((card, idx) => {
            card.style.display = idx < initial ? 'block' : 'none';
        });
        document.getElementById('lihat-semua-artikel-wrapper').style.display = 'block';
        document.getElementById('tutup-semua-artikel-wrapper').style.display = 'none';
    }
</script>

