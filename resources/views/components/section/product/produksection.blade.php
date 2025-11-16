@props(['products'])

@php
// default initial count jika tidak dikirim dari parent
$initialCount = $initialCount ?? 3;
@endphp

<section class="py-16 px-4">
    <div class="max-w-5xl mx-auto text-center">
        <div class="flex flex-col items-center mb-8" data-aos="fade-down" data-aos-duration="800">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-wide"
                style="font-family: 'Cormorant Garamond', serif;">
                PRODUK KAMI
            </h2>
        </div>
        <p class="text-xl text-gray-200 mb-12 font-medium" data-aos="zoom-in" data-aos-duration="800">
            Menghadirkan gula aren murni dari alam, dengan proses tradisional yang menjaga cita rasa dan kualitas
            terbaik!
        </p>

        <div class="flex flex-col md:flex-row items-center justify-center gap-12">
            @foreach ($products as $product)
                <div
                    class="product-card flex flex-col items-center"
                    data-aos="fade-up"
                    data-aos-delay="{{ 200 + $loop->index * 200 }}"
                    @if($loop->index >= $initialCount) style="display:none" @endif
                >
                    <div
                        class="bg-white/10 backdrop-blur-md rounded-2xl p-6 mb-4 border border-white/20 hover:bg-white/20 transition-all duration-300 cursor-pointer hover:scale-105">
                        {{-- PATH KE: myproject/public/storage/products --}}
                        <img src="{{ asset('storage/' . $product->image) }}"
                             alt="{{ $product->nama_produk }}"
                             class="h-[300px] w-[350px] object-contain drop-shadow-lg"
                             onerror="this.onerror=null; this.src='{{ asset('img/ikonrasaumbi.png') }}';">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2" style="font-family: 'Cormorant Garamond', serif;">
                        {{ $product->nama_produk }}
                    </h3>
                    <p class="text-gray-300 text-sm text-center max-w-48">
                        {{ $product->description ?? 'Produk berkualitas tinggi' }}
                    </p>
                    <div class="mt-3">
                        <span class="text-[#A52A2A] font-bold">Rp
                            {{ number_format($product->harga, 0, ',', '.') }}</span>
                        <span class="text-gray-400 text-sm">/Kg</span>
                    </div>

                    <a href="{{ $product->link ?? '#' }}" target="_blank"
                        class="mt-2 mb-6 inline-block bg-[#A52A2A] hover:bg-red-700 text-white text-xs font-semibold px-4 py-4 rounded transition-all duration-200">
                        Beli Sekarang
                    </a>
                </div>
            @endforeach
        </div>

        <!-- CTA Button (selalu tampil) -->
        <div class="text-center mt-6" id="lihat-semua-produk-wrapper" data-aos="fade-right" data-aos-delay="800">
             <button onclick="lihatSemuaProduk()"
                 class="bg-gradient-to-r from-[#A52A2A] to-red-600 hover:from-[#A52A2A] hover:to-red-700 text-white font-semibold pl-3 pr-6 py-4 rounded-lg transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                 <i class="fas fa-store"></i>
                 <span class="whitespace-nowrap">Lihat Semua Produk</span>
                  <i class="fas fa-arrow-right"></i>
             </button>
         </div>
        <div class="text-center" id="tutup-semua-produk-wrapper" style="display:none" data-aos="fade-left" data-aos-delay="800">
            <button onclick="tutupSemuaProduk()"
                class="bg-gradient-to-r from-gray-500 to-gray-400 hover:from-gray-700 hover:to-gray-600 text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300 transform hover:scale-105 inline-flex items-center">
                <i class="fas fa-eye-slash mr-2"></i>
                Tutup Semua Produk
                <i class="fas fa-arrow-up ml-2"></i>
            </button>
        </div>
    </div>
</section>

<script>
    function lihatSemuaProduk() {
        document.querySelectorAll('.product-card').forEach(card => card.style.display = 'block');
        document.getElementById('lihat-semua-produk-wrapper').style.display = 'none';
        document.getElementById('tutup-semua-produk-wrapper').style.display = 'block';
    }
    function tutupSemuaProduk() {
        let initial = {{ $initialCount }};
        document.querySelectorAll('.product-card').forEach((card, idx) => {
            card.style.display = idx < initial ? 'block' : 'none';
        });
        document.getElementById('lihat-semua-produk-wrapper').style.display = 'block';
        document.getElementById('tutup-semua-produk-wrapper').style.display = 'none';
        // scroll kembali ke area produk (opsional)
        const el = document.querySelector('.product-card');
        if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
</script>



