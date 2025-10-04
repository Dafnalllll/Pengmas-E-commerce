<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\pages\admin\add\addproduct.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Add SOP | Kampung Syurga</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-4 pt-20 lg:p-8 lg:pt-8">
        <!-- Header -->
        <h1 class="text-2xl lg:text-4xl font-bold text-gray-500 mb-6 lg:mb-8">Edit SOP</h1>

        <!-- Form -->
        <form action="{{ route('admin.sops.update', $sop->id) }}" method="POST" enctype="multipart/form-data" class="w-full">
            @csrf
    @method('PUT')

            <!-- Upload File PDF -->
            <div class="mb-6 flex justify-center">
                <div
                    class="w-80 h-32 lg:h-40 border-2 border-dashed border-gray-500 rounded-lg bg-gray-100 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-300 transition-colors">
                    @if($sop->dokumen)
                <p class="text-sm text-gray-700 mb-2">File saat ini: **{{ $sop->dokumen }}**</p>
            @endif
                    <input type="file" id="dokumen" name="dokumen" class="hidden" accept=".pdf">
                    <label for="dokumen" class="cursor-pointer text-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:h-10 lg:w-10 text-black mx-auto mb-2"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="text-base lg:text-lg font-medium text-black">Upload File PDF Baru (Opsional)</span>
                        <p class="text-xs lg:text-sm text-gray-600 mt-1">Only PDF files allowed</p>
                    </label>
                </div>
            </div>

            <!-- Nama File SOP -->
            <div class="mb-6 lg:mb-8">
                <input type="text" name="nama_file" placeholder="Nama File SOP (contoh: SOP Penjualan Produk)"
                    value="{{ old('nama_file', $sop->nama_file) }}"
                class="w-full px-3 py-3 lg:px-4 lg:py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black placeholder-gray-600 focus:outline-none text-base lg:text-lg"
                    required>
            </div>

            <!-- Tanggal Upload -->
            <div class="mb-6">
                <input type="date" name="tanggal" placeholder=" " value="{{ date('Y-m-d') }}"
                    value="{{ old('tanggal', \Carbon\Carbon::parse($sop->tanggal)->format('Y-m-d')) }}"
                class="w-full px-3 py-3 lg:px-4 lg:py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black focus:outline-none text-base lg:text-lg"
                    required>
            </div>

            <!-- Submit Button -->
            <div class="flex flex-col space-y-3 lg:flex-row lg:justify-between lg:items-center lg:space-y-0">
                <a href="{{ route('admin.sops') }}"
                    class="w-full lg:w-auto bg-gray-400 hover:bg-gray-500 hover:scale-105 text-white px-6 lg:px-8 py-3 rounded-lg font-semibold transition-all duration-200 text-base lg:text-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 mr-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back
                </a>
                <button type="submit"
                    class="w-full lg:w-auto bg-black hover:bg-gray-400 hover:scale-105 text-white px-8 lg:px-10 py-3 rounded-lg font-semibold transition-all duration-200 text-base lg:text-lg">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <script>
        // Preview file name when selected
        document.getElementById('sop_file').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name;
            const label = document.querySelector('label[for="sop_file"] span');
            if (fileName) {
                label.textContent = fileName;
            } else {
                label.textContent = 'Upload File PDF';
            }
        });
    </script>
</body>

</html>
