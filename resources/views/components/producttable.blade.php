<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\components\producttable.blade.php -->
@php
$products = [
    [
        'id' => 1,
        'name' => 'Niranta bubuk',
        'price' => 'Rp 25.000',
        'link' => 'https://id.shp.ee/3mEKijF',
        'hasLink' => true
    ],
    [
        'id' => 2,
        'name' => 'Niranta padat',
        'price' => 'Rp 17.000',
        'link' => 'xxxxxxxxx',
        'hasLink' => false
    ],
    [
        'id' => 3,
        'name' => 'Niranta gula aren cair',
        'price' => 'Rp 25.000',
        'link' => 'https://id.shp.ee/pqmCPfF',
        'hasLink' => true
    ],
    [
        'id' => 4,
        'name' => 'Sachet niranta gula aren',
        'price' => 'Rp 30.000',
        'link' => 'https://id.shp.ee/ZcjeR7B',
        'hasLink' => true
    ]
];
@endphp

<div class="bg-gray-100 p-6 rounded-lg shadow-lg relative top-10">
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b-2 border-[#6B4226]">
                    <th class="text-left py-3 px-4 font-semibold text-black">No</th>
                    <th class="text-left py-3 px-4 font-semibold text-black">Nama Produk</th>
                    <th class="text-left py-3 px-4 font-semibold text-black">Harga</th>
                    <th class="text-left py-3 px-4 font-semibold text-black">Link</th>
                    <th class="text-left py-3 px-4 font-semibold text-black">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-b border-gray-300 hover:bg-white/50">
                    <td class="py-4 px-4 text-black">{{ $product['id'] }}</td>
                    <td class="py-4 px-4 text-black font-medium">{{ $product['name'] }}</td>
                    <td class="py-4 px-4 text-black">{{ $product['price'] }}</td>
                    <td class="py-4 px-4">
                        @if($product['hasLink'])
                            <a href="{{ $product['link'] }}" class="text-blue-600 hover:underline text-sm">
                                {{ $product['link'] }}
                            </a>
                        @else
                            <span class="text-[#6B4226]">{{ $product['link'] }}</span>
                        @endif
                    </td>
                    <td class="py-4 px-4">
                        <div class="flex space-x-2">
                            <button class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:scale-105">
                                Edit
                            </button>
                            <button class="bg-red-800 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:scale-105">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Product Button -->
    <div class="flex justify-end mt-6">
        <a href="{{ route('admin.add.product') }}" class="bg-black hover:bg-gray-400 hover:scale-105 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Add Product
        </a>
    </div>
</div>
