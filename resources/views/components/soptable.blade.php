@props(['sops'])

<div class="bg-gray-100 p-4 lg:p-6 rounded-lg shadow-lg relative top-10 lg:top-14">
    <!-- Mobile Card View (Hidden on Desktop) -->
    <div class="lg:hidden space-y-4">
        @foreach ($sops as $index => $sop)
            <div class="bg-white p-4 rounded-lg shadow-md border">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="font-semibold text-black text-lg">{{ $sop->nama_file }}</h3>
                    <span class="text-sm text-gray-500">#{{ $index + 1 }}</span>
                </div>

                <div class="space-y-2 mb-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600 text-sm">Tanggal:</span>
                        <span class="font-medium text-black">{{ $sop->tanggal }}</span>
                    </div>
                </div>

                <div class="space-y-2">
                    <!-- Download Button -->
                    <button onclick="downloadPDF('{{ asset('storage/sop/' . $sop->pdf_url) }}', '{{ $sop->nama_file }}.pdf')"
                        class="w-full bg-purple-500 hover:bg-purple-600 text-white py-2 px-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        Download PDF
                    </button>

                    <!-- Action Buttons -->
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.sops.edit',  $sop->id) }}"
                            class="flex-1 bg-gray-300 hover:bg-gray-400 text-black py-2 px-3 rounded-lg font-medium transition-all duration-300 text-sm">
                            Edit
                        </a>

                        <form action="{{ route('admin.sops.destroy', $sop->id) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus SOP ini? Tindakan ini tidak dapat dibatalkan.');"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="flex-1 bg-red-800 hover:bg-red-600 text-white py-2 px-3 rounded-lg font-medium transition-all duration-300 text-sm">
                                Delete
                            </button>
                        </form>
                        {{-- <button onclick="confirm('Yakin ingin hapus?')" class="flex-1 bg-red-800 hover:bg-red-600 text-white py-2 px-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        Delete
                    </button> --}}
                    </div>
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
                    <th class="text-left py-3 px-4 font-semibold text-black">Nama file</th>
                    <th class="text-left py-3 px-4 font-semibold text-black">Tanggal</th>
                    <th class="text-center py-3 px-4 font-semibold text-black">File</th>
                    <th class="text-center py-3 px-4 font-semibold text-black">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sops as $index => $sop)
                    <tr class="border-b border-gray-300 hover:bg-white/50">
                        <td class="py-4 px-4 text-black">{{ $index + 1 }}</td>
                        <td class="py-4 px-4 text-black font-medium">{{ $sop->nama_file }}</td>
                        <td class="py-4 px-4 text-black">{{ $sop->tanggal }}</td>
                        <td class="py-4 px-4 text-center">
                            <button onclick="downloadPDF('{{ asset('storage/sop/' . $sop->pdf_url) }}', '{{ $sop->nama_file }}.pdf')"
                                class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                                Download PDF
                            </button>
                        </td>
                        <td class="py-4 px-4">
                            <div class="flex justify-center space-x-2">
                                <a  href="{{ route('admin.sops.edit', $sop->id) }}"
                                    class="bg-gray-300 hover:bg-gray-400 text-black px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                                    Edit
                                </a>

                                <form action="{{ route('admin.sops.destroy', $sop->id) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus SOP ini? Tindakan ini tidak dapat dibatalkan.');"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-800 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                                        Delete
                                    </button>
                                </form>
                                {{-- <button onclick="confirm('Yakin ingin hapus?')"
                                    class="bg-red-800 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                                    Delete
                                </button> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add SOP Button -->
    <div class="flex justify-end mt-6">
        <a href="{{ route('admin.sops.create') }}"
            class="bg-black hover:bg-gray-400 hover:scale-105 text-white px-4 lg:px-6 py-3 rounded-lg font-semibold transition-all duration-200 flex items-center text-sm lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 mr-2" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
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
