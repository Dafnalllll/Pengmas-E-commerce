<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\components\producttable.blade.php -->
@props(['products'])

<div class="bg-gray-100 p-4 lg:p-6 rounded-lg shadow-lg relative top-10">
    <!-- Mobile Card View (Hidden on Desktop) -->
    <div class="lg:hidden space-y-4">
        @foreach ($products as $product)
            <div class="bg-white p-4 rounded-lg shadow-md border">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="font-semibold text-black text-lg">{{ $product['nama_produk'] }}</h3>
                    <span class="text-sm text-gray-500">#{{ $product['id'] }}</span>
                </div>

                <div class="space-y-2 mb-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600 text-sm">Harga:</span>
                        <span class="font-medium text-black">{{ $product['harga'] }}</span>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 text-sm">Link:</span>
                        <div class="flex-1 ml-2 text-right">
                            @if ($product['hasLink'])
                                <a href="{{ $product['link'] }}"
                                    class="text-blue-600 hover:underline text-xs break-all">
                                    {{ Str::limit($product['link'], 25) }}
                                </a>
                            @else
                                <span class="text-[#6B4226] text-xs">{{ $product['link'] }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button
                        class="flex-1 bg-gray-300 hover:bg-gray-400 text-black py-2 px-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        Edit
                    </button>
                    <button
                        class="flex-1 bg-red-800 hover:bg-red-600 text-white py-2 px-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        Delete
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Desktop Table View (Hidden on Mobile) -->
    <div class="hidden lg:block overflow-x-auto">
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
                @foreach ($products as $product)
                    <tr class="border-b border-gray-300 hover:bg-white/50">
                        <td class="py-4 px-4 text-black">{{ $product['id'] }}</td>
                        <td class="py-4 px-4 text-black font-medium">{{ $product['nama_produk'] }}</td>
                        <td class="py-4 px-4 text-black">{{ $product['harga'] }}</td>
                        <td class="py-4 px-4">
                            @if ($product['hasLink'])
                                <a href="{{ $product['link'] }}" class="text-blue-600 hover:underline text-sm">
                                    {{ $product['link'] }}
                                </a>
                            @else
                                <span class="text-[#6B4226]">{{ $product['link'] }}</span>
                            @endif
                        </td>
                        <td class="py-4 px-4">
                            <div class="flex space-x-2">
                                <button
                                    class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:scale-105">
                                    Edit
                                </button>
                                <button
                                    class="bg-red-800 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:scale-105">
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
        <a href="{{ route('admin.products.create') }}"
            class="bg-black hover:bg-gray-400 hover:scale-105 text-white px-4 lg:px-6 py-3 rounded-lg font-semibold transition-all duration-200 flex items-center text-sm lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 mr-2" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Add Product
        </a>
    </div>
</div>
