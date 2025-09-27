@php
    // Data dummy untuk Blog
    $blogs = [
        (object)[
            'id' => 1,
            'title' => 'Gula aren baik untuk tubuh?',
            'date' => '15 Juli 2025'
        ],
        (object)[
            'id' => 2,
            'title' => 'Serupa tapi tak sama!',
            'date' => '15 Juli 2025'
        ],
        (object)[
            'id' => 3,
            'title' => 'Tips menyimpan gula aren!',
            'date' => '15 Juli 2025'
        ],
        (object)[
            'id' => 4,
            'title' => 'Manfaat gula aren untuk diet',
            'date' => '16 Juli 2025'
        ],
        (object)[
            'id' => 5,
            'title' => 'Cara membuat sirup gula aren',
            'date' => '17 Juli 2025'
        ]
    ];
@endphp

<div class="bg-gray-100 p-4 lg:p-6 rounded-lg shadow-lg relative top-10 lg:top-14">
    <!-- Mobile Card View (Hidden on Desktop) -->
    <div class="lg:hidden space-y-4">
        @foreach($blogs as $index => $blog)
        <div class="bg-white p-4 rounded-lg shadow-md border">
            <div class="flex justify-between items-start mb-3">
                <h3 class="font-semibold text-black text-lg">{{ $blog->title }}</h3>
                <span class="text-sm text-gray-500">#{{ $index + 1 }}</span>
            </div>

            <div class="space-y-2 mb-4">
                <div class="flex justify-between">
                    <span class="text-gray-600 text-sm">Tanggal upload:</span>
                    <span class="font-medium text-black">{{ $blog->date }}</span>
                </div>
            </div>

            <div class="flex space-x-2">
                <button onclick="alert('Edit Blog: {{ $blog->title }}')" class="flex-1 bg-gray-300 hover:bg-gray-400 text-black py-2 px-3 rounded-lg font-medium transition-all duration-300 text-sm">
                    Edit
                </button>
                <button onclick="confirm('Yakin ingin hapus blog: {{ $blog->title }}?')" class="flex-1 bg-red-800 hover:bg-red-600 text-white py-2 px-3 rounded-lg font-medium transition-all duration-300 text-sm">
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
                    <th class="text-left py-3 px-4 font-semibold text-black">Judul Blog</th>
                    <th class="text-left py-3 px-4 font-semibold text-black">Tanggal upload</th>
                    <th class="text-center py-3 px-4 font-semibold text-black">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $index => $blog)
                <tr class="border-b border-gray-300 hover:bg-white/50">
                    <td class="py-4 px-4 text-black">{{ $index + 1 }}</td>
                    <td class="py-4 px-4 text-black font-medium">{{ $blog->title }}</td>
                    <td class="py-4 px-4 text-black">{{ $blog->date }}</td>
                    <td class="py-4 px-4">
                        <div class="flex justify-center space-x-2">
                            <button onclick="alert('Edit Blog: {{ $blog->title }}')" class="bg-gray-300 hover:bg-gray-400 text-black px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                                Edit
                            </button>
                            <button onclick="confirm('Yakin ingin hapus blog: {{ $blog->title }}?')" class="bg-red-800 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Blog Button -->
    <div class="flex justify-end mt-6">
        <a href="{{ route('admin.add.blog') }}" class="bg-black hover:bg-gray-400 hover:scale-105 text-white px-4 lg:px-6 py-3 rounded-lg font-semibold transition-all duration-200 flex items-center text-sm lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Add Blog
        </a>
    </div>
</div>
