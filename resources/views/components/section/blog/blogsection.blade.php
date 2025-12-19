@props(['blogs'])

@php
    $initialCount = 3;
@endphp

<section class="py-20 px-4 bg-gray-200">
    <div class="max-w-6xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-4xl md:text-5xl font-bold text-red-700 mb-6 drop-shadow-lg" style="font-family: 'Cormorant Garamond', serif;">
                Blog & Artikel
            </h2>
            <p class="text-gray-700 font-medium text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Temukan berbagai tips, resep, dan informasi menarik seputar bawang merah dan gaya hidup sehat alami
            </p>
        </div>

        <!-- Blog Grid -->
        <div id="blog-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 mb-16">
            @foreach($blogs as $i => $blog)
                <div class="blog-card" style="display: {{ $i < $initialCount ? 'block' : 'none' }};" data-aos="fade-up" data-aos-delay="{{ 200 + $i * 200 }}">
                    <article class="bg-white/80 backdrop-blur-lg rounded-3xl border border-[#A52A2A]/20 shadow-2xl hover:shadow-[#A52A2A]/40 hover:-translate-y-2 hover:scale-[1.03] transition-all duration-300 overflow-hidden group">
                        <!-- Image Section -->
                        <div class="relative overflow-hidden rounded-xl bg-gradient-to-br from-orange-500/20 to-red-600/20 h-32 w-full">
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}"
                                    alt="{{ $blog->judul_blog }}"
                                    class="absolute top-0 left-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            @else
                                <img src="{{ asset('img/ikonrasaumbi.png') }}"
                                    alt="default"
                                    class="absolute top-0 left-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            @endif

                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4 z-10">
                                <span class="bg-[#A52A2A] text-white text-xs font-semibold px-4 py-1 rounded-full shadow">
                                    {{ $blog->kategori ?? 'Artikel' }}
                                </span>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-7 cursor-pointer">
                            <!-- Title -->
                            <h3 class="text-2xl font-bold text-[#A52A2A] mb-3 group-hover:text-[#7a1d1d] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                {{ $blog->judul_blog }}
                            </h3>

                            <!-- Excerpt -->
                            <p class="text-gray-700 text-base mb-5 leading-relaxed group-hover:text-gray-900 transition-colors duration-300 min-h-[60px] text-justify">
                                {{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 100) }}
                            </p>

                            <!-- Meta Info -->
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-5">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-user"></i>
                                    <span>{{ $blog->author ?? 'Admin' }}</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-calendar"></i>
                                    <span>{{ \Carbon\Carbon::parse($blog->tanggal_upload ?? $blog->created_at)->format('Y-m-d') }}</span>
                                </div>
                            </div>

                            <!-- Read More Button -->
                            <div class="pt-4 border-t border-[#A52A2A]/10">
                                <a href="{{ route('blog.detail', $blog->id) }}" class="inline-block px-6 py-2 bg-[#A52A2A] text-white rounded-full font-semibold shadow hover:bg-red-600 transition text-base">
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
                class="bg-gradient-to-r from-[#A52A2A] to-red-600 hover:from-[#A52A2A] hover:to-red-700 text-white font-semibold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-2 shadow">
                <i class="fas fa-newspaper"></i>
                Lihat Semua Artikel
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="text-center" id="tutup-semua-artikel-wrapper" style="display:none" data-aos="fade-left" data-aos-delay="800">
            <button onclick="tutupSemuaArtikel()"
                class="bg-gradient-to-r from-gray-500 to-gray-400 hover:from-gray-700 hover:to-gray-600 text-white font-semibold px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-2 shadow">
                <i class="fas fa-eye-slash"></i>
                Tutup Semua Artikel
                <i class="fas fa-arrow-up"></i>
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
