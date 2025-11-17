@props(['sops'])

@php
// Jumlah SOP awal yang ditampilkan
$initialCount = 6;
@endphp

<section class="pt-40 pb-20 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- SOP Grid -->
        <div id="sop-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @foreach($sops->take($initialCount) as $index => $sop)
                <div class="cursor-pointer" data-aos="fade-up" data-aos-delay="{{ 200 + ($index * 200) }}">
                    <article class="bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl hover:bg-white/15 hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <!-- Icon Section -->
                        <div class="relative overflow-hidden bg-gradient-to-br from-orange-500/20 to-red-600/20 p-8 flex flex-col items-center">
                            <span class="inline-flex items-center justify-center h-16 w-16">
                                <img src="{{ asset('img/ikonrasaumbi.png') }}" alt="ikonrasaumbi" class="h-20 w-20 object-contain">
                            </span>
                            <!-- Step Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#A52A2A] text-white text-xs font-semibold px-3 py-1 rounded-full">
                                    SOP {{ $index + 1 }}
                                </span>
                            </div>
                        </div>
                        <!-- Content Section -->
                        <div class="p-6 flex flex-col h-full">
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#A52A2A] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                {{ $sop->nama_file }}
                            </h3>
                            <!-- Description -->
                            <p class="text-gray-300 text-sm mb-4 leading-relaxed group-hover:text-gray-200 transition-colors duration-300">
                                Tanggal: {{ \Carbon\Carbon::parse($sop->tanggal)->format('d M Y') }}
                            </p>
                            <!-- Category Info -->
                            <div class="flex items-center text-xs text-gray-400 mb-4">
                                <i class="fas fa-tag mr-1"></i>
                                <span>Dokumen SOP</span>
                            </div>
                            <!-- Read More & Download Buttons -->
                            <div class="pt-4 border-t border-white/10 flex gap-3">
                                <a href="{{ asset('storage/' . $sop->dokumen) }}" target="_blank" class="px-4 py-2 bg-[#A52A2A] text-white rounded hover:bg-red-500 transition flex items-center">
                                    <i class="fa-solid fa-book-open mr-2"></i>Baca Selengkapnya
                                </a>
                                <a href="{{ asset('storage/' . $sop->dokumen) }}" download class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700 transition flex items-center" aria-label="Download SOP {{ $sop->nama_file }}">
                                    <i class="fa-solid fa-download mr-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
        <!-- Tombol Lihat Semua SOP & Tutup Semua SOP -->
        @if($sops->count() > $initialCount)
        <div class="flex justify-center" id="lihat-semua-sop-wrapper" data-aos="fade-right" data-aos-delay="800">
            <button
                onclick="lihatSemuaSOP()"
                class="flex items-center gap-3 px-8 py-3 bg-gradient-to-r from-red-600 to-red-500 text-white rounded-lg font-semibold shadow hover:from-red-700 hover:to-red-600 transition-all hover:scale-105 text-base">
                <i class="fa-solid fa-clipboard-list text-lg"></i>
                Lihat Semua SOP
                <i class="fa-solid fa-arrow-right text-lg"></i>
            </button>
        </div>
        <div class="flex justify-center" id="tutup-semua-sop-wrapper" style="display:none" data-aos="fade-left" data-aos-delay="800">
            <button
                onclick="tutupSemuaSOP()"
                class="flex items-center gap-3 px-8 py-3 bg-gradient-to-r from-gray-500 to-gray-400 text-white rounded-lg font-semibold shadow hover:from-gray-700 hover:to-gray-600 transition-all hover:scale-105 text-base">
                <i class="fa-solid fa-eye-slash text-lg"></i>
                Tutup Semua SOP
                <i class="fa-solid fa-arrow-up text-lg"></i>
            </button>
        </div>
        @endif
    </div>
</section>

<script>
    const allSops = @json($sops);
    const initialCount = {{ $initialCount }};

    function lihatSemuaSOP() {
        const sopGrid = document.getElementById('sop-grid');
        sopGrid.innerHTML = '';
        allSops.forEach(function(sop, index) {
            const delay = 200 + (index * 200);
            sopGrid.innerHTML += `
                <div class="cursor-pointer" data-aos="fade-up" data-aos-delay="${delay}">
                    <article class="bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl hover:bg-white/15 hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <div class="relative overflow-hidden bg-gradient-to-br from-orange-500/20 to-red-600/20 p-8 flex flex-col items-center">
                            <span class="inline-flex items-center justify-center h-16 w-16">
                                <img src='{{ asset('img/ikonrasaumbi.png') }}' alt="ikonrasaumbi" class="h-20 w-20 object-contain">
                            </span>
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#A52A2A] text-white text-xs font-semibold px-3 py-1 rounded-full">
                                    SOP ${index + 1}
                                </span>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-full">
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#A52A2A] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                ${sop.nama_file}
                            </h3>
                            <p class="text-gray-300 text-sm mb-4 leading-relaxed group-hover:text-gray-200 transition-colors duration-300">
                                Tanggal: ${new Date(sop.tanggal).toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' })}
                            </p>
                            <div class="flex items-center text-xs text-gray-400 mb-4">
                                <i class="fas fa-tag mr-1"></i>
                                <span>Dokumen SOP</span>
                            </div>
                            <div class="pt-4 border-t border-white/10 flex gap-3">
                                <a href="{{ asset('storage') }}/${sop.dokumen}" target="_blank" class="inline-block px-4 py-2 bg-[#A52A2A] text-white rounded hover:bg-red-500 transition flex items-center">
                                    <i class="fa-solid fa-book-open mr-2"></i>Baca Selengkapnya
                                </a>
                                <a href="{{ asset('storage') }}/${sop.dokumen}" download class="inline-block px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700 transition flex items-center" aria-label="Download SOP ${sop.nama_file}">
                                    <i class="fa-solid fa-download mr-2"></i>Download
                                </a>
                            </div>
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
        allSops.slice(0, initialCount).forEach(function(sop, index) {
            const delay = 200 + (index * 200);
            sopGrid.innerHTML += `
                <div class="cursor-pointer" data-aos="fade-up" data-aos-delay="${delay}">
                    <article class="bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl hover:bg-white/15 hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <div class="relative overflow-hidden bg-gradient-to-br from-orange-500/20 to-red-600/20 p-8 flex flex-col items-center">
                            <span class="inline-flex items-center justify-center h-16 w-16">
                                <img src='{{ asset('img/ikonrasaumbi.png') }}' alt="ikonrasaumbi" class="h-20 w-20 object-contain">
                            </span>
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#A52A2A] text-white text-xs font-semibold px-3 py-1 rounded-full">
                                    SOP ${index + 1}
                                </span>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-full">
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#A52A2A] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                ${sop.nama_file}
                            </h3>
                            <p class="text-gray-300 text-sm mb-4 leading-relaxed group-hover:text-gray-200 transition-colors duration-300">
                                Tanggal: ${new Date(sop.tanggal).toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' })}
                            </p>
                            <div class="flex items-center text-xs text-gray-400 mb-4">
                                <i class="fas fa-tag mr-1"></i>
                                <span>Dokumen SOP</span>
                            </div>
                            <div class="mt-auto pt-4 border-t border-white/10 flex gap-3">
                                <a href="{{ asset('storage') }}/${sop.dokumen}" target="_blank"
                                    class="inline-block px-4 py-2 bg-[#A52A2A] text-white rounded hover:bg-[#A52A2A] transition font-semibold text-sm flex items-center">
                                    <i class="fa-solid fa-book-open mr-2"></i>Baca Selengkapnya
                                </a>
                                <a href="{{ asset('storage') }}/${sop.dokumen}" download class="inline-block px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700 transition font-semibold text-sm flex items-center" aria-label="Download SOP ${sop.nama_file}">
                                    <i class="fa-solid fa-download mr-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            `;
        });
        document.getElementById('lihat-semua-sop-wrapper').style.display = 'flex';
        document.getElementById('tutup-semua-sop-wrapper').style.display = 'none';
    }
</script>
