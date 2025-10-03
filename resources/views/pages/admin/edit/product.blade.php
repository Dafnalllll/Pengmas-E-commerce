<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Add Product | Kampung Syurga</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <x-sidebar />
    <!-- Main Content -->
    <div class="flex-1 p-4 lg:p-8 pt-16 lg:pt-8">
        <!-- Header -->
        <h1 class="text-2xl lg:text-4xl font-bold text-gray-500 mb-4 lg:mb-8">Edit Products</h1>


        <div class="max-w-4xl mx-auto bg-white p-8 rounded shadow mt-8">
            <h2 class="text-2xl font-bold mb-6">Edit Produk</h2>
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nama_produk" class="block font-medium mb-1">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk"
                        value="{{ old('nama_produk', $product->nama_produk) }}" class="w-full border rounded px-3 py-2"
                        required>
                </div>

                <div class="mb-4">
                    <label for="harga" class="block font-medium mb-1">Harga</label>
                    <input type="number" name="harga" id="harga" value="{{ old('harga', $product->harga) }}"
                        class="w-full border rounded px-3 py-2" required>
                </div>

                {{-- <div class="mb-4">
                    <label for="description" class="block font-medium mb-1">Deskripsi</label>
                    <textarea name="description" id="description" rows="3" class="w-full border rounded px-3 py-2">{{ old('description', $product->description) }}</textarea>
                </div> --}}

                <div class="mb-4">
                    <label for="link" class="block font-medium mb-1">Link Produk</label>
                    <input type="url" name="link" id="link" value="{{ old('link', $product->link) }}"
                        class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-4">
                    <label for="image" class="block font-medium mb-1">Gambar Produk</label>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" class="h-20 mb-2">
                    @endif
                    <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2">
                </div>

                <button type="submit"
                    class="bg-black hover:bg-grey-800 text-white font-semibold px-6 py-2 rounded transition-all duration-200">
                    Update Produk
                </button>
                <a href="{{ route('admin.products') }}" class="ml-4 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold px-6 py-2 rounded transition-all duration-200 inline-block">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
