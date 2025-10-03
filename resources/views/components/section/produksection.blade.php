{{-- @php
$products = [
    [
        'id' => 1,
        'name' => 'Gula Aren Kristal',
        'description' => 'Gula aren murni dengan tekstur kristal halus untuk berbagai kebutuhan kuliner',
        'price' => 25000,
        'unit' => 'kg',
        'image' => 'img/ikonrasaumbi.png',
        'alt' => 'Niranta Gula Aren Kristal',
        'delay' => 200
    ],
    [
        'id' => 2,
        'name' => 'Gula Aren Cair',
        'description' => 'Sirup gula aren kental, praktis untuk campuran minuman dan makanan penutup',
        'price' => 35000,
        'unit' => 'botol',
        'image' => 'img/ikonrasaumbi.png',
        'alt' => 'Niranta Gula Aren Cair',
        'delay' => 400
    ],
    [
        'id' => 3,
        'name' => 'Gula Aren Stick',
        'description' => 'Kemasan stick individual, portable dan higienis untuk dibawa kemana saja',
        'price' => 15000,
        'unit' => 'box',
        'image' => 'img/ikonrasaumbi.png',
        'alt' => 'Niranta Stick',
        'delay' => 600
    ]
];
@endphp --}}

@props(['products'])

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
                <div class="flex flex-col items-center" data-aos="fade-up"
                    data-aos-delay="{{ 200 + $loop->index * 200 }}">
                    <div
                        class="bg-white/10 backdrop-blur-md rounded-2xl p-6 mb-4 border border-white/20 hover:bg-white/20 transition-all duration-300 cursor-pointer hover:scale-105">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Foto Produk"
                            class="h-20 w-auto object-contain drop-shadow-lg">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2" style="font-family: 'Cormorant Garamond', serif;">
                        {{ $product->nama_produk }}
                    </h3>
                    <p class="text-gray-300 text-sm text-center max-w-48">
                        {{ $product->description }}
                    </p>
                    <div class="mt-3">
                        <span class="text-[#A52A2A] font-bold">Rp
                            {{ number_format($product->harga, 0, ',', '.') }}</span>
                        <span class="text-gray-400 text-sm">/Kg</span>
                    </div>

                    <a href="{{ $product->link ?? '#' }}" target="_blank"
                        class="mt-2 inline-block bg-[#A52A2A] hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded transition-all duration-200">
                        Beli Sekarang
                    </a>
                </div>
            @endforeach
        </div>x

        <!-- CTA Button -->
        <div class="mt-12" data-aos="fade-up" data-aos-delay="800">
            <a href="/product"
                class="inline-block bg-gradient-to-r from-[#A52A2A] to-red-600 hover:from-[#A52A2A] hover:to-red-700 text-white font-semibold px-8 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-store mr-2"></i>
                Lihat Semua Produk
            </a>
        </div>
    </div>
</section>
