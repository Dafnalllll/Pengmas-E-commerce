@php
// Semua data SOP (misal 10 data)
$allSops = [
    [
        'step' => 1,
        'title' => 'Persiapan',
        'desc' => 'Siapkan semua alat dan bahan yang diperlukan sebelum memulai proses.',
        'delay' => 200,
        'category' => 'Persiapan'
    ],
    [
        'step' => 2,
        'title' => 'Pelaksanaan',
        'desc' => 'Lakukan setiap langkah sesuai instruksi dengan teliti dan hati-hati.',
        'delay' => 400,
        'category' => 'Proses'
    ],
    [
        'step' => 3,
        'title' => 'Pengecekan',
        'desc' => 'Periksa kembali hasil pekerjaan untuk memastikan tidak ada kesalahan.',
        'delay' => 600,
        'category' => 'Kontrol'
    ],
    [
        'step' => 4,
        'title' => 'Pelaporan',
        'desc' => 'Laporkan hasil akhir dan dokumentasikan proses yang telah dilakukan.',
        'delay' => 800,
        'category' => 'Dokumentasi'
    ],
    [
        'step' => 5,
        'title' => 'Evaluasi',
        'desc' => 'Lakukan evaluasi terhadap proses dan hasil untuk perbaikan ke depan.',
        'delay' => 1000,
        'category' => 'Evaluasi'
    ],
    [
        'step' => 6,
        'title' => 'Arsip',
        'desc' => 'Simpan seluruh dokumen dan laporan ke dalam arsip yang telah ditentukan.',
        'delay' => 1200,
        'category' => 'Arsip'
    ],
    [
        'step' => 7,
        'title' => 'Distribusi',
        'desc' => 'Distribusikan produk ke tempat tujuan sesuai jadwal.',
        'delay' => 1400,
        'category' => 'Distribusi'
    ],
    [
        'step' => 8,
        'title' => 'Monitoring',
        'desc' => 'Pantau proses dan hasil secara berkala.',
        'delay' => 1600,
        'category' => 'Monitoring'
    ],
    [
        'step' => 9,
        'title' => 'Pelatihan',
        'desc' => 'Lakukan pelatihan rutin untuk peningkatan kualitas.',
        'delay' => 1800,
        'category' => 'Pelatihan'
    ],
    [
        'step' => 10,
        'title' => 'Audit',
        'desc' => 'Audit internal untuk memastikan SOP dijalankan dengan benar.',
        'delay' => 2000,
        'category' => 'Audit'
    ],
];
// Jumlah SOP awal yang ditampilkan
$initialCount = 6;
@endphp

<section class="pt-40 pb-20 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- SOP Grid -->
        <div id="sop-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @foreach(array_slice($allSops, 0, $initialCount) as $sop)
                <div class="cursor-pointer" data-aos="fade-up" data-aos-delay="{{ $sop['delay'] }}">
                    <article class="bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl hover:bg-white/15 hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <!-- Icon Section -->
                        <div class="relative overflow-hidden bg-gradient-to-br from-orange-500/20 to-red-600/20 p-8 flex flex-col items-center">
                            <span class="inline-flex items-center justify-center h-16 w-16">
                                <img src="{{ asset('img/ikonrasaumbi.png') }}" alt="ikonrasaumbi" class="h-20 w-20 object-contain">
                            </span>
                            <!-- Step Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#A52A2A] text-white text-xs font-semibold px-3 py-1 rounded-full">
                                    Langkah {{ $sop['step'] }}
                                </span>
                            </div>
                        </div>
                        <!-- Content Section -->
                        <div class="p-6 flex flex-col h-full">
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#A52A2A] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                {{ $sop['title'] }}
                            </h3>
                            <!-- Description -->
                            <p class="text-gray-300 text-sm mb-4 leading-relaxed group-hover:text-gray-200 transition-colors duration-300">
                                {{ $sop['desc'] }}
                            </p>
                            <!-- Category Info -->
                            <div class="flex items-center text-xs text-gray-400 mb-4">
                                <i class="fas fa-tag mr-1"></i>
                                <span>{{ $sop['category'] }}</span>
                            </div>
                            <!-- Baca Selengkapnya Button -->
                            <a href="{{ url('/sop-detail') }}"
                                class="mt-auto inline-block px-4 py-2 bg-[#A52A2A] text-white rounded hover:bg-[#A52A2A] transition font-semibold text-sm">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
        <!-- Tombol Lihat Semua SOP & Tutup Semua SOP -->
        @if(count($allSops) > $initialCount)
        <div class="flex justify-center" id="lihat-semua-sop-wrapper" data-aos="fade-right" data-aos-delay="800">
            <button
                onclick="lihatSemuaSOP()"
                class="flex items-center gap-3 px-8 py-3 bg-gradient-to-r from-red-600 to-red-500 text-white rounded-lg font-semibold shadow hover:from-red-700 hover:to-red-600 transition text-base">
                <i class="fa-solid fa-clipboard-list text-lg"></i>
                Lihat Semua SOP
                <i class="fa-solid fa-arrow-right text-lg"></i>
            </button>
        </div>
        <div class="flex justify-center" id="tutup-semua-sop-wrapper" style="display:none" data-aos="fade-left" data-aos-delay="800">
            <button
                onclick="tutupSemuaSOP()"
                class="flex items-center gap-3 px-8 py-3 bg-gradient-to-r from-gray-500 to-gray-400 text-white rounded-lg font-semibold shadow hover:from-gray-700 hover:to-gray-600 transition text-base">
                <i class="fa-solid fa-eye-slash text-lg"></i>
                Tutup Semua SOP
                <i class="fa-solid fa-arrow-up text-lg"></i>
            </button>
        </div>
        @endif
    </div>
</section>

<script>
    const allSops = @json($allSops);
    const initialCount = {{ $initialCount }};
    function lihatSemuaSOP() {
        const sopGrid = document.getElementById('sop-grid');
        sopGrid.innerHTML = '';
        allSops.forEach(function(sop) {
            sopGrid.innerHTML += `
                <div class="cursor-pointer" data-aos="fade-up" data-aos-delay="${sop.delay}">
                    <article class="bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl hover:bg-white/15 hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <div class="relative overflow-hidden bg-gradient-to-br from-orange-500/20 to-red-600/20 p-8 flex flex-col items-center">
                            <span class="inline-flex items-center justify-center h-16 w-16">
                                <img src='{{ asset('img/ikonrasaumbi.png') }}' alt="ikonrasaumbi" class="h-20 w-20 object-contain">
                            </span>
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#A52A2A] text-white text-xs font-semibold px-3 py-1 rounded-full">
                                    Langkah ${sop.step}
                                </span>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-full">
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#A52A2A] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                ${sop.title}
                            </h3>
                            <p class="text-gray-300 text-sm mb-4 leading-relaxed group-hover:text-gray-200 transition-colors duration-300">
                                ${sop.desc}
                            </p>
                            <div class="flex items-center text-xs text-gray-400 mb-4">
                                <i class="fas fa-tag mr-1"></i>
                                <span>${sop.category}</span>
                            </div>
                            <a href="{{ url('/sop-detail') }}"
                                class="mt-auto inline-block px-4 py-2 bg-[#A52A2A] text-white rounded hover:bg-[#A52A2A] transition font-semibold text-sm">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </article>
                </div>
            `;
        });
        document.getElementById('lihat-semua-sop-wrapper').style.display = 'none';
        document.getElementById('tutup-semua-sop-wrapper').style.display = 'flex';
    }

    function tutupSemuaSOP() {
        const sopGrid = document.getElementById('sop-grid');
        sopGrid.innerHTML = '';
        allSops.slice(0, initialCount).forEach(function(sop) {
            sopGrid.innerHTML += `
                <div class="cursor-pointer" data-aos="fade-up" data-aos-delay="${sop.delay}">
                    <article class="bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl hover:bg-white/15 hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <div class="relative overflow-hidden bg-gradient-to-br from-orange-500/20 to-red-600/20 p-8 flex flex-col items-center">
                            <span class="inline-flex items-center justify-center h-16 w-16">
                                <img src='{{ asset('img/ikonrasaumbi.png') }}' alt="ikonrasaumbi" class="h-20 w-20 object-contain">
                            </span>
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#A52A2A] text-white text-xs font-semibold px-3 py-1 rounded-full">
                                    Langkah ${sop.step}
                                </span>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-full">
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#A52A2A] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                ${sop.title}
                            </h3>
                            <p class="text-gray-300 text-sm mb-4 leading-relaxed group-hover:text-gray-200 transition-colors duration-300">
                                ${sop.desc}
                            </p>
                            <div class="flex items-center text-xs text-gray-400 mb-4">
                                <i class="fas fa-tag mr-1"></i>
                                <span>${sop.category}</span>
                            </div>
                            <a href="{{ url('/sop-detail') }}"
                                class="mt-auto inline-block px-4 py-2 bg-[#A52A2A] text-white rounded hover:bg-[#A52A2A] transition font-semibold text-sm">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </article>
                </div>
            `;
        });
        document.getElementById('lihat-semua-sop-wrapper').style.display = 'flex';
        document.getElementById('tutup-semua-sop-wrapper').style.display = 'none';
    }
</script>
