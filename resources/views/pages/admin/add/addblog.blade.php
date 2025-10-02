<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\pages\admin\add\addblog.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Add Blog | Kampung Syurga</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-4 pt-20 lg:p-8 lg:pt-8">
        <!-- Header -->
        <h1 class="text-2xl lg:text-4xl font-bold text-gray-500 mb-6 lg:mb-8">Add Blog</h1>

        <!-- Form -->
        <form action="#" method="POST" enctype="multipart/form-data" class="w-full">
            @csrf

            <!-- Upload Foto -->
            <div class="mb-6 flex justify-center">
                <div class="w-80 h-32 lg:h-40 border-2 border-dashed border-gray-500 rounded-lg bg-gray-100 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-300 transition-colors">
                    <input type="file" id="photo" name="photo" class="hidden" accept="image/*">
                    <label for="photo" class="cursor-pointer text-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:h-10 lg:w-10 text-black mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-base lg:text-lg font-medium text-black">Upload Foto</span>
                    </label>
                </div>
            </div>

            <!-- Judul -->
            <div class="mb-6">
                <input
                    type="text"
                    name="title"
                    placeholder="Judul"
                    class="w-full px-3 py-3 lg:px-4 lg:py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black focus:outline-none text-base lg:text-lg"
                    required
                >
            </div>

            <!-- Isi Artikel -->
            <div class="mb-6 lg:mb-8">
                <textarea
                    name="content"
                    placeholder="Isi artikel"
                    rows="6"
                    class="w-full px-3 py-3 lg:px-4 lg:py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black focus:outline-none text-base lg:text-lg lg:rows-8"
                    required
                ></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex flex-col space-y-3 lg:flex-row lg:justify-between lg:items-center lg:space-y-0">
                <a
                    href="{{ route('admin.blog') }}"
                    class="w-full lg:w-auto bg-gray-400 hover:bg-gray-500 hover:scale-105 text-white px-6 lg:px-8 py-3 rounded-lg font-semibold transition-all duration-200 text-base lg:text-lg flex items-center justify-center"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back
                </a>
                <button
                    type="submit"
                    class="w-full lg:w-auto bg-black hover:bg-gray-400 hover:scale-105 text-white px-8 lg:px-10 py-3 rounded-lg font-semibold transition-all duration-200 text-base lg:text-lg"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
