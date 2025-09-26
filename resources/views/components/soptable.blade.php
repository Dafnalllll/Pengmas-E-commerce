@php
    // Data dummy untuk SOP
    $sops = [
        (object)[
            'id' => 1,
            'title' => 'SOP Penjualan Produk',
            'date' => '2025-01-15',
            'pdf_url' => 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf'
        ],
        (object)[
            'id' => 2,
            'title' => 'SOP Pengelolaan Inventory',
            'date' => '2025-02-20',
            'pdf_url' => 'https://www.africau.edu/images/default/sample.pdf'
        ],
        (object)[
            'id' => 3,
            'title' => 'SOP Customer Service',
            'date' => '2025-03-10',
            'pdf_url' => 'https://scholar.harvard.edu/files/torman_personal/files/samplepdf.pdf'
        ],
        (object)[
            'id' => 4,
            'title' => 'SOP Quality Control',
            'date' => '2025-04-05',
            'pdf_url' => 'https://www.orimi.com/pdf-test.pdf'
        ],
        (object)[
            'id' => 5,
            'title' => 'SOP Pengiriman Barang',
            'date' => '2025-05-12',
            'pdf_url' => 'https://www.learningcontainer.com/wp-content/uploads/2019/09/sample-pdf-file.pdf'
        ]
    ];
@endphp

<div class="bg-gray-100 p-6 rounded-lg shadow-lg relative top-14">
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b-2 border-[#6B4226]">
                    <th class="text-left py-3 px-4 font-semibold text-black">No</th>
                    <th class="text-left py-3 px-4 font-semibold text-black">Nama file</th>
                    <th class="text-left py-3 px-4 font-semibold text-black">Tanggal</th>
                    <th class="text-center py-3 px-4 font-semibold text-black">File</th>
                    <th class="text-center py-3 px-4 font-semibold text-black">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sops as $index => $sop)
                <tr class="border-b border-gray-300 hover:bg-white/50">
                    <td class="py-4 px-4 text-black">{{ $index + 1 }}</td>
                    <td class="py-4 px-4 text-black font-medium">{{ $sop->title }}</td>
                    <td class="py-4 px-4 text-black">{{ $sop->date }}</td>
                    <td class="py-4 px-4 text-center">
                        <button onclick="downloadPDF('{{ $sop->pdf_url }}', '{{ $sop->title }}.pdf')" class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                            Download PDF
                        </button>
                    </td>
                    <td class="py-4 px-4">
                        <div class="flex justify-center space-x-2">
                            <button onclick="alert('Edit SOP: {{ $sop->title }}')" class="bg-gray-300 hover:bg-gray-400 text-black px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                                Edit
                            </button>
                            <button onclick="confirm('Yakin ingin hapus?')" class="bg-red-800 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add SOP Button -->
    <div class="flex justify-end mt-6">
        <a href="{{ route('admin.add.sop') }}" class="bg-black hover:bg-gray-400 hover:scale-105 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Add SOP
        </a>
    </div>
</div>

<script>
function downloadPDF(url, filename) {
    const link = document.createElement('a');
    link.href = url;
    link.download = filename;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>
