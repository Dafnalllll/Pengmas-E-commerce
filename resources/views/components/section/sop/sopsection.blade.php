@props(['sops'])

@php
// Jumlah SOP awal yang ditampilkan
$initialCount = 6;
@endphp

<section class="pt-40 pb-20 px-4 w-full">
    <div class="w-full mx-auto">
        <!-- SOP Grid -->
        <div id="sop-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16 items-stretch w-full">
            @foreach($sops->take($initialCount) as $index => $sop)
                <div class="cursor-pointer h-full flex" data-aos="fade-up" data-aos-delay="{{ 200 + ($index * 200) }}">
                    <article class="flex flex-col h-full w-full max-w-sm bg-white/80 backdrop-blur-lg rounded-3xl border border-[#A52A2A]/10 shadow-2xl hover:shadow-[#A52A2A]/30 hover:-translate-y-2 hover:scale-[1.03] transition-all duration-300 overflow-hidden group mx-auto">
                        <!-- Gambar/Video Full Card -->
                        <div class="relative w-full aspect-[16/10] overflow-hidden rounded-t-3xl bg-gradient-to-br from-orange-500/20 to-red-600/20">
                            @if(!empty($sop->video))
                                <video controls class="absolute top-0 left-0 w-full h-full object-cover rounded-t-3xl bg-[#222]">
                                    <source src="{{ asset('storage/' . $sop->video) }}" type="video/mp4">
                                    Browser Anda tidak mendukung video.
                                </video>
                            @else
                                <img src="{{ asset('img/ikonrasaumbi.png') }}" alt="ikonrasaumbi"
                                     class="absolute top-0 left-0 w-full h-full object-cover rounded-t-3xl">
                            @endif
                            <!-- Step Badge -->
                            <div class="absolute top-4 left-4 z-10">
                                <span class="bg-[#A52A2A] text-white text-sm font-bold px-4 py-1 rounded-full shadow-lg tracking-wide">
                                    SOP {{ $index + 1 }}
                                </span>
                            </div>
                        </div>
                        <!-- Content Section -->
                        <div class="p-4 flex flex-col flex-1">
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-[#A52A2A] mb-2 group-hover:text-[#7a1d1d] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                {{ $sop->nama_file }}
                            </h3>
                            <!-- Description -->
                            <p class="text-gray-700 text-base mb-3 leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                                Tanggal: {{ \Carbon\Carbon::parse($sop->tanggal)->format('d M Y') }}
                            </p>
                            <!-- Category Info -->
                            <div class="flex items-center text-xs text-gray-500 mb-4">
                                <i class="fas fa-tag mr-1"></i>
                                <span>Dokumen SOP</span>
                            </div>
                            <!-- Read More & Download Buttons -->
                            <div class="pt-4 border-t border-[#A52A2A]/10 flex gap-3 mt-auto">
                                <a href="{{ asset('storage/' . $sop->dokumen) }}" target="_blank" class="px-4 py-2 bg-[#A52A2A] text-white rounded-full font-semibold shadow hover:bg-red-600 transition-all flex items-center gap-2 text-sm hover:scale-105">
                                    <i class="fa-solid fa-book-open"></i>Baca Selengkapnya
                                </a>
                                <a href="{{ asset('storage/' . $sop->dokumen) }}" download class="px-4 py-2 bg-gray-800 text-white rounded-full font-semibold shadow hover:bg-gray-700 transition-all flex items-center gap-2 text-sm hover:scale-105" aria-label="Download SOP {{ $sop->nama_file }}">
                                    <i class="fa-solid fa-download"></i>Download
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
                    <article class="bg-white/80 backdrop-blur-lg rounded-3xl border border-[#A52A2A]/10 shadow-2xl hover:shadow-[#A52A2A]/30 hover:-translate-y-2 hover:scale-[1.03] transition-all duration-300 overflow-hidden group">
                        <div class="relative w-full aspect-[4/3] overflow-hidden rounded-t-3xl bg-gradient-to-br from-orange-500/20 to-red-600/20">
                            @if(!empty($sop->video))
                                <video controls class="absolute top-0 left-0 w-full h-full object-cover rounded-t-3xl bg-[#222]">
                                    <source src="{{ asset('storage') }}/${sop.video}" type="video/mp4">
                                    Browser Anda tidak mendukung video.
                                </video>
                            @else
                                <img src="{{ asset('img/ikonrasaumbi.png') }}" alt="ikonrasaumbi"
                                     class="absolute top-0 left-0 w-full h-full object-cover rounded-t-3xl">
                            @endif
                            <div class="absolute top-4 left-4 z-10">
                                <span class="bg-[#A52A2A] text-white text-sm font-bold px-4 py-1 rounded-full shadow-lg tracking-wide">
                                    SOP ${index + 1}
                                </span>
                            </div>
                        </div>
                        <div class="p-7 flex flex-col h-full">
                            <h3 class="text-2xl font-bold text-[#A52A2A] mb-2 group-hover:text-[#7a1d1d] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                ${sop.nama_file}
                            </h3>
                            <p class="text-gray-700 text-base mb-3 leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                                Tanggal: ${new Date(sop.tanggal).toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' })}
                            </p>
                            <div class="flex items-center text-xs text-gray-500 mb-4">
                                <i class="fas fa-tag mr-1"></i>
                                <span>Dokumen SOP</span>
                            </div>
                            <div class="pt-4 border-t border-[#A52A2A]/10 flex gap-3">
                                <a href="{{ asset('storage') }}/${sop.dokumen}" target="_blank" class="px-4 py-2 bg-[#A52A2A] text-white rounded-full font-semibold shadow hover:bg-red-600 transition flex items-center gap-2 text-sm">
                                    <i class="fa-solid fa-book-open"></i>Baca Selengkapnya
                                </a>
                                <a href="{{ asset('storage') }}/${sop.dokumen}" download class="px-4 py-2 bg-gray-800 text-white rounded-full font-semibold shadow hover:bg-gray-700 transition flex items-center gap-2 text-sm" aria-label="Download SOP ${sop.nama_file}">
                                    <i class="fa-solid fa-download"></i>Download
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
                    <article class="bg-white/80 backdrop-blur-lg rounded-3xl border border-[#A52A2A]/10 shadow-2xl hover:shadow-[#A52A2A]/30 hover:-translate-y-2 hover:scale-[1.03] transition-all duration-300 overflow-hidden group">
                        <div class="relative w-full aspect-[4/3] overflow-hidden rounded-t-3xl bg-gradient-to-br from-orange-500/20 to-red-600/20">
                            @if(!empty($sop->video))
                                <video controls class="absolute top-0 left-0 w-full h-full object-cover rounded-t-3xl bg-[#222]">
                                    <source src="{{ asset('storage') }}/${sop.video}" type="video/mp4">
                                    Browser Anda tidak mendukung video.
                                </video>
                            @else
                                <img src="{{ asset('img/ikonrasaumbi.png') }}" alt="ikonrasaumbi"
                                     class="absolute top-0 left-0 w-full h-full object-cover rounded-t-3xl">
                            @endif
                            <div class="absolute top-4 left-4 z-10">
                                <span class="bg-[#A52A2A] text-white text-sm font-bold px-4 py-1 rounded-full shadow-lg tracking-wide">
                                    SOP ${index + 1}
                                </span>
                            </div>
                        </div>
                        <div class="p-7 flex flex-col h-full">
                            <h3 class="text-2xl font-bold text-[#A52A2A] mb-2 group-hover:text-[#7a1d1d] transition-colors duration-300"
                                style="font-family: 'Cormorant Garamond', serif;">
                                ${sop.nama_file}
                            </h3>
                            <p class="text-gray-700 text-base mb-3 leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                                Tanggal: ${new Date(sop.tanggal).toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' })}
                            </p>
                            <div class="flex items-center text-xs text-gray-500 mb-4">
                                <i class="fas fa-tag mr-1"></i>
                                <span>Dokumen SOP</span>
                            </div>
                            <div class="mt-auto pt-4 border-t border-[#A52A2A]/10 flex gap-3">
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
