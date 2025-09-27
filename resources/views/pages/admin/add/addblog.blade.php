<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\pages\admin\add\addblog.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Add Blog | Rasa Umbi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <!-- Header -->
        <h1 class="text-4xl font-bold text-gray-500 mb-8">Add Blog</h1>

        <!-- Form -->
        <form action="#" method="POST" enctype="multipart/form-data" class="w-full">
            @csrf

            <!-- Upload Foto -->
            <div class="mb-6 flex justify-center">
                <div class="w-80 h-40 border-2 border-dashed border-gray-500 rounded-lg bg-gray-100 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-300 transition-colors">
                    <input type="file" id="photo" name="photo" class="hidden" accept="image/*">
                    <label for="photo" class="cursor-pointer text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-black mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-lg font-medium text-black">Upload Foto</span>
                    </label>
                </div>
            </div>

            <!-- Judul -->
            <div class="mb-6">
                <input
                    type="text"
                    name="title"
                    placeholder="Judul"
                    class="w-full px-4 py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black  focus:outline-none  text-lg"
                    required
                >
            </div>

            <!-- Isi Artikel -->
            <div class="mb-8">
                <textarea
                    name="content"
                    placeholder="Isi artikel"
                    rows="8"
                    class="w-full  px-4 py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black  focus:outline-none   text-lg"
                    required
                ></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-between items-center">
                <a
                    href="{{ route('admin.blog') }}"
                    class="bg-gray-400 hover:bg-gray-500 hover:scale-105 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-200 text-lg flex items-center"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back
                </a>
                <button
                    type="submit"
                    class="bg-black hover:bg-gray-400 hover:scale-105 text-white px-10 py-3 rounded-lg font-semibold transition-all duration-200 text-lg"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
