@props(['products'])

@php
$initialCount = $initialCount ?? 8;
@endphp

<section class="py-16 px-4 bg-[#f5f5f5]">
    <div class="max-w-7xl mx-auto">
        <div class="mb-8 text-center" data-aos="fade-down" data-aos-duration="800">
            <h2 class="text-4xl md:text-5xl font-bold text-[#A52A2A] mb-2 drop-shadow-lg tracking-wide"  style="font-family: 'Cormorant Garamond', serif;">
                Produk Kami
            </h2>
        </div>
        <p class="text-xl text-gray-700 mb-12 font-medium text-center" data-aos="zoom-in" data-aos-duration="800">
            Menyediakan bawang merah berkualitas tinggi, segar langsung dari petani lokal, siap memenuhi kebutuhan dapur dan bisnis Anda!
        </p>

        <div class="
            grid gap-8
            {{ count($products) === 1
                ? 'grid-cols-1 justify-items-center'
                : 'grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5'
            }}
        ">
            @foreach ($products as $product)
                <div
                    class="product-card bg-gray-200 rounded-3xl shadow-xl hover:shadow-2xl hover:-translate-y-2 hover:border-[#A52A2A] border border-gray-200 transition-all duration-300 flex flex-col relative group w-full max-w-xs md:max-w-sm p-7"
                    data-aos="fade-up"
                    data-aos-delay="{{ 100 + $loop->index * 100 }}"
                    @if($loop->index >= $initialCount) style="display:flex;display:none" @endif
                >
                    <!-- Badge (opsional) -->
                    @if($product->is_new ?? false)
                        <span class="absolute top-4 left-4 bg-[#A52A2A] text-white text-xs font-bold px-3 py-1 rounded-full shadow">Baru</span>
                    @elseif($product->is_best ?? false)
                        <span class="absolute top-4 left-4 bg-yellow-400 text-[#A52A2A] text-xs font-bold px-3 py-1 rounded-full shadow">Terlaris</span>
                    @endif

                    <div class="relative w-full pt-[90%] overflow-hidden rounded-2xl mb-4 bg-gradient-to-br from-[#f5e5c3]/40 to-[#A52A2A]/10">
                        <img src="{{ asset('storage/' . $product->image) }}"
                             alt="{{ $product->nama_produk }}"
                             class="absolute top-0 left-0 w-full h-full object-cover rounded-2xl transition-transform duration-300 group-hover:scale-105"
                             onerror="this.onerror=null; this.src='{{ asset('img/ikonrasaumbi.png') }}';">
                    </div>
                    <div class="flex-1 flex flex-col px-2 py-2">
                        <h3 class="text-xl font-bold text-[#A52A2A] mb-1 truncate" style="font-family: 'Cormorant Garamond', serif;">
                            {{ $product->nama_produk }}
                        </h3>
                        <p class="text-gray-500 text-base mb-2 line-clamp-2 min-h-[36px]">
                            {{ $product->description ?? 'Produk berkualitas tinggi' }}
                        </p>
                        <div class="mt-auto mb-4 flex items-center gap-2">
                            <span class="text-[#A52A2A] text-2xl font-extrabold drop-shadow">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
                            <span class="text-gray-400 text-sm">/Kg</span>
                        </div>
                        <a href="{{ $product->link ?? '#' }}" target="_blank"
                            class="block w-full bg-gradient-to-r from-[#A52A2A] to-red-600 hover:from-[#A52A2A] hover:to-red-700 text-white text-base font-bold py-3 rounded-full transition-all duration-200 text-center mt-1 shadow hover:scale-105">
                            Beli Sekarang
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA Button (selalu tampil) -->
        <div class="text-center mt-8" id="lihat-semua-produk-wrapper" data-aos="fade-right" data-aos-delay="800">
            <button onclick="lihatSemuaProduk()"
                class="bg-gradient-to-r from-[#A52A2A] to-red-600 hover:from-[#A52A2A] hover:to-red-700 text-white font-semibold px-8 py-3 rounded-lg transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                <i class="fas fa-store"></i>
                <span class="whitespace-nowrap">Lihat Semua Produk</span>
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="text-center mt-4" id="tutup-semua-produk-wrapper" style="display:none" data-aos="fade-left" data-aos-delay="800">
            <button onclick="tutupSemuaProduk()"
                class="bg-gradient-to-r from-gray-500 to-gray-400 hover:from-gray-700 hover:to-gray-600 text-white font-semibold px-8 py-3 rounded-lg transition-all duration-300 transform hover:scale-105 inline-flex items-center">
                <i class="fas fa-eye-slash mr-2"></i>
                Tutup Semua Produk
                <i class="fas fa-arrow-up ml-2"></i>
            </button>
        </div>
    </div>
</section>

<script>
    function lihatSemuaProduk() {
        document.querySelectorAll('.product-card').forEach(card => card.style.display = 'flex');
        document.getElementById('lihat-semua-produk-wrapper').style.display = 'none';
        document.getElementById('tutup-semua-produk-wrapper').style.display = 'block';
    }
    function tutupSemuaProduk() {
        let initial = {{ $initialCount }};
        document.querySelectorAll('.product-card').forEach((card, idx) => {
            card.style.display = idx < initial ? 'flex' : 'none';
        });
        document.getElementById('lihat-semua-produk-wrapper').style.display = 'block';
        document.getElementById('tutup-semua-produk-wrapper').style.display = 'none';
        // scroll kembali ke area produk (opsional)
        const el = document.querySelector('.product-card');
        if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
</script>



