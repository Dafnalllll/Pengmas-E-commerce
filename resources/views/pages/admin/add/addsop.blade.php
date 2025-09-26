<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\pages\admin\add\addproduct.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add SOP | Rasa Umbi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F5F5DC] flex">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <!-- Header -->
        <h1 class="text-4xl font-bold text-[#6B4226] mb-8">Add SOP</h1>

        <!-- Form -->
        <form action="#" method="POST" enctype="multipart/form-data" class="w-full">
            @csrf

            <!-- Upload File PDF -->
            <div class="mb-6 flex justify-center">
                <div class="w-80 h-40 border-2 border-dashed border-[#A52A2A] rounded-lg bg-[#E5DDD5] flex flex-col items-center justify-center cursor-pointer hover:bg-[#D5CCC5] transition-colors">
                    <input type="file" id="sop_file" name="sop_file" class="hidden" accept=".pdf">
                    <label for="sop_file" class="cursor-pointer text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#6B4226] mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="text-lg font-medium text-[#6B4226]">Upload File PDF</span>
                        <p class="text-sm text-[#8B4513] mt-1">Only PDF files allowed</p>
                    </label>
                </div>
            </div>

            <!-- Nama File SOP -->
            <div class="mb-8">
                <input
                    type="text"
                    name="sop_name"
                    placeholder="Nama File SOP (contoh: SOP Penjualan Produk)"
                    class="w-full px-4 py-4 rounded-lg border-2 border-[#A52A2A] bg-[#E5DDD5] text-[#6B4226] placeholder-[#8B4513] focus:outline-none focus:border-[#8B1A1A] text-lg"
                    required
                >
            </div>

            <!-- Submit Button -->
            <div class="flex justify-between items-center">
                <a
                    href="{{ route('admin.sop') }}"
                    class="bg-gray-400 hover:bg-gray-500 hover:scale-105 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-200 text-lg flex items-center"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back
                </a>
                <button
                    type="submit"
                    class="bg-[#6B4226] hover:bg-[#5A3520] hover:scale-105 text-white px-10 py-3 rounded-lg font-semibold transition-all duration-200 text-lg"
                >
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
