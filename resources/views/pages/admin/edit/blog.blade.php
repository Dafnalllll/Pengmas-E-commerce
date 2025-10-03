<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Edit Blog | Kampung Syurga</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-4 pt-20 lg:p-8 lg:pt-8">
        <!-- Header -->
        <h1 class="text-2xl lg:text-4xl font-bold text-gray-500 mb-6 lg:mb-8">Edit Blog: {{ $blog->judul_blog }}</h1>

        <!-- Form Aksi Update -->
        <!-- Action mengarah ke route update, dengan ID blog sebagai parameter -->
        <!-- Metode adalah POST, tapi kita pakai @method('PUT') untuk spoofing -->
        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="w-full">
            @csrf
            @method('PUT')

            <!-- Tampilan Gambar Lama (Opsional) -->
            @if ($blog->image)
            <div class="mb-4 flex justify-center">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Gambar Blog Saat Ini" class="w-auto h-32 object-cover rounded-lg shadow-md border border-gray-300">
            </div>
            @endif

            <!-- Upload Foto Baru -->
            <div class="mb-6 flex justify-center">
                <div class="w-80 h-32 lg:h-40 border-2 border-dashed border-gray-500 rounded-lg bg-gray-100 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-300 transition-colors">
                    <input type="file" id="image" name="image" class="hidden" accept="image/*">
                    <label for="image" class="cursor-pointer text-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:h-10 lg:w-10 text-black mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-base lg:text-lg font-medium text-black">Ganti Foto (Kosongkan jika tidak ada perubahan)</span>
                    </label>
                </div>
            </div>

            <!-- Judul (Terisi Otomatis) -->
            <div class="mb-6">
                <input
                    type="text"
                    name="judul_blog"
                    placeholder="Judul"
                    value="{{ old('judul_blog', $blog->judul_blog) }}"
                    class="w-full px-3 py-3 lg:px-4 lg:py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black focus:outline-none text-base lg:text-lg"
                    required
                >
            </div>
            
            <!-- Kategori (Terisi Otomatis) -->
            <div class="mb-6">
                <input
                    type="text"
                    name="kategori"
                    placeholder="Kategori"
                    value="{{ old('kategori', $blog->kategori) }}"
                    class="w-full px-3 py-3 lg:px-4 lg:py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black focus:outline-none text-base lg:text-lg"
                >
            </div>

            <!-- Tanggal Upload (Terisi Otomatis) -->
            <div class="mb-6">
                <input
                    type="date"
                    name="tanggal_upload"
                    placeholder=" "
                    value="{{ old('tanggal_upload', \Carbon\Carbon::parse($blog->tanggal_upload)->format('Y-m-d')) }}"
                    class="w-full px-3 py-3 lg:px-4 lg:py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black focus:outline-none text-base lg:text-lg"
                    required
                >
            </div>

            <!-- Ringkasan Artikel (Terisi Otomatis) -->
            <div class="mb-6 lg:mb-8">
                <textarea
                    name="excerpt"
                    placeholder="Ringkasan artikel untuk preview"
                    rows="4"
                    class="w-full px-3 py-3 lg:px-4 lg:py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black focus:outline-none text-base lg:text-lg lg:rows-8"
                    required
                >{{ old('excerpt', $blog->excerpt) }}</textarea>
            </div>

            <!-- Isi Artikel (Terisi Otomatis) -->
            <div class="mb-6 lg:mb-8">
                <textarea
                    name="content"
                    placeholder="Isi artikel"
                    rows="6"
                    class="w-full px-3 py-3 lg:px-4 lg:py-4 rounded-lg border-2 border-gray-500 bg-gray-100 text-black focus:outline-none text-base lg:text-lg lg:rows-8"
                    required
                >{{ old('content', $blog->content) }}</textarea>
            </div>

            <!-- Status Checkboxes -->
            <div class="form-group" style="margin-bottom: 30px;">
                <label style="font-size: 16px; font-weight: 600; color: #2C1810; margin-bottom: 15px; display: block;">Status</label>
                
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                    <input type="checkbox" id="is_published" name="is_published" value="1"
                        @checked(old('is_published', $blog->is_published))
                        style="width: 18px; height: 18px; accent-color: #8B4513;">
                    <label for="is_published" style="font-size: 14px; color: #2C1810; cursor: pointer;">Published (Dipublikasikan)</label>
                </div>

                <div style="display: flex; align-items: center; gap: 10px;">
                    <input type="checkbox" id="is_featured" name="is_featured" value="1"
                        @checked(old('is_featured', $blog->is_featured))
                        style="width: 18px; height: 18px; accent-color: #8B4513;">
                    <label for="is_featured" style="font-size: 14px; color: #2C1810; cursor: pointer;">Featured (Unggulan)</label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex flex-col space-y-3 lg:flex-row lg:justify-between lg:items-center lg:space-y-0">
                <a
                    href="{{ route('admin.blogs') }}"
                    class="w-full lg:w-auto bg-gray-400 hover:bg-gray-500 hover:scale-105 text-white px-6 lg:px-8 py-3 rounded-lg font-semibold transition-all duration-200 text-base lg:text-lg flex items-center justify-center"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back
                </a>
                <button
                    type="submit"
                    class="w-full lg:w-auto bg-green-600 hover:bg-green-700 hover:scale-105 text-white px-8 lg:px-10 py-3 rounded-lg font-semibold transition-all duration-200 text-base lg:text-lg"
                >
                    Update Blog
                </button>
            </div>
        </form>
    </div>
</body>
</html>
