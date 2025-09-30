@php
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
@endphp

<section class="py-16 px-4">
    <div class="max-w-5xl mx-auto text-center">
        <div class="flex flex-col items-center mb-8"
        data-aos="fade-down"
        data-aos-duration="800">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-wide" style="font-family: 'Cormorant Garamond', serif;">
                PRODUK KAMI
            </h2>
        </div>
        <p class="text-xl text-gray-200 mb-12 font-medium"
        data-aos="zoom-in"
        data-aos-duration="800">
            Menghadirkan gula aren murni dari alam, dengan proses tradisional yang menjaga cita rasa dan kualitas terbaik!
        </p>

        <div class="flex flex-col md:flex-row items-center justify-center gap-12">
            @foreach($products as $product)
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="{{ $product['delay'] }}">
                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 mb-4 border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <img src="{{ asset($product['image']) }}"
                             alt="{{ $product['alt'] }}"
                             class="h-20 w-auto object-contain drop-shadow-lg">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2" style="font-family: 'Cormorant Garamond', serif;">
                        {{ $product['name'] }}
                    </h3>
                    <p class="text-gray-300 text-sm text-center max-w-48">
                        {{ $product['description'] }}
                    </p>
                    <div class="mt-3">
                        <span class="text-orange-400 font-bold">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                        <span class="text-gray-400 text-sm">/{{ $product['unit'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA Button -->
        <div class="mt-12" data-aos="fade-up" data-aos-delay="800">
            <a href="/products" class="inline-block bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white font-semibold px-8 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-store mr-2"></i>
                Lihat Semua Produk
            </a>
        </div>
    </div>
</section>
