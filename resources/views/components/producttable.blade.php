<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\components\producttable.blade.php -->
<div class="bg-[#F5F5DC] p-6 rounded-lg shadow-lg relative top-10">
    <!-- Table -->
    <div class="overflow-x-auto ">
        <table class="w-full ">
            <thead>
                <tr class="border-b-2 border-[#6B4226]">
                    <th class="text-left py-3 px-4 font-semibold text-[#6B4226]">No</th>
                    <th class="text-left py-3 px-4 font-semibold text-[#6B4226]">Nama Produk</th>
                    <th class="text-left py-3 px-4 font-semibold text-[#6B4226]">Harga</th>
                    <th class="text-left py-3 px-4 font-semibold text-[#6B4226]">Link</th>
                    <th class="text-left py-3 px-4 font-semibold text-[#6B4226]">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-300 hover:bg-white/50">
                    <td class="py-4 px-4 text-[#6B4226]">1</td>
                    <td class="py-4 px-4 text-[#6B4226] font-medium">Niranta bubuk</td>
                    <td class="py-4 px-4 text-[#6B4226]">Rp 25.000</td>
                    <td class="py-4 px-4">
                        <a href="https://id.shp.ee/3mEKijF" class="text-blue-600 hover:underline text-sm">
                            https://id.shp.ee/3mEKijF
                        </a>
                    </td>
                    <td class="py-4 px-4">
                        <div class="flex space-x-2">
                            <button class="bg-gray-300 hover:bg-gray-400 text-[#6B4226] px-4 py-2 rounded-lg font-medium transition-colors">
                                Edit
                            </button>
                            <button class="bg-[#6B4226] hover:bg-[#5A3520] text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b border-gray-300 hover:bg-white/50">
                    <td class="py-4 px-4 text-[#6B4226]">2</td>
                    <td class="py-4 px-4 text-[#6B4226] font-medium">Niranta padat</td>
                    <td class="py-4 px-4 text-[#6B4226]">Rp 17.000</td>
                    <td class="py-4 px-4 text-[#6B4226]">xxxxxxxxx</td>
                    <td class="py-4 px-4">
                        <div class="flex space-x-2">
                            <button class="bg-gray-300 hover:bg-gray-400 text-[#6B4226] px-4 py-2 rounded-lg font-medium transition-colors">
                                Edit
                            </button>
                            <button class="bg-[#6B4226] hover:bg-[#5A3520] text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b border-gray-300 hover:bg-white/50">
                    <td class="py-4 px-4 text-[#6B4226]">3</td>
                    <td class="py-4 px-4 text-[#6B4226] font-medium">Niranta gula aren cair</td>
                    <td class="py-4 px-4 text-[#6B4226]">Rp 25.000</td>
                    <td class="py-4 px-4">
                        <a href="https://id.shp.ee/pqmCPfF" class="text-blue-600 hover:underline text-sm">
                            https://id.shp.ee/pqmCPfF
                        </a>
                    </td>
                    <td class="py-4 px-4">
                        <div class="flex space-x-2">
                            <button class="bg-gray-300 hover:bg-gray-400 text-[#6B4226] px-4 py-2 rounded-lg font-medium transition-colors">
                                Edit
                            </button>
                            <button class="bg-[#6B4226] hover:bg-[#5A3520] text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b border-gray-300 hover:bg-white/50">
                    <td class="py-4 px-4 text-[#6B4226]">4</td>
                    <td class="py-4 px-4 text-[#6B4226] font-medium">Sachet niranta gula aren</td>
                    <td class="py-4 px-4 text-[#6B4226]">Rp 30.000</td>
                    <td class="py-4 px-4">
                        <a href="https://id.shp.ee/ZcjeR7B" class="text-blue-600 hover:underline text-sm">
                            https://id.shp.ee/ZcjeR7B
                        </a>
                    </td>
                    <td class="py-4 px-4">
                        <div class="flex space-x-2">
                            <button class="bg-gray-300 hover:bg-gray-400 text-[#6B4226] px-4 py-2 rounded-lg font-medium transition-colors">
                                Edit
                            </button>
                            <button class="bg-[#6B4226] hover:bg-[#5A3520] text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Add Product Button -->
    <div class="flex justify-end mt-6">
        <button class="bg-[#6B4226] hover:bg-[#5A3520] hover:scale-105 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Add Product
        </button>
    </div>
</div>
