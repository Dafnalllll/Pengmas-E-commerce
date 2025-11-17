<?php
$team = [
    'dosen' => [
        [
            'nama' => 'Rizka Hadelina, MT',
            'jurusan' => 'Teknik Komputer',
            'jobdesk' => 'Dosen Pembimbing',
        ],
    ],
    'iot' => [
        [
            'nama' => 'Rafki Harzikra',
            'jurusan' => 'Teknik Komputer',
            'angkatan' => '2022',
            'jobdesk' => 'IoT Engineer',
        ],
        [
            'nama' => 'Bunga Jacinda',
            'jurusan' => 'Teknik Komputer',
            'angkatan' => '2023',
            'jobdesk' => 'IoT Engineer',
        ],
    ],
    'software' => [
        [
            'nama' => 'Ainul Mardiah',
            'jurusan' => 'Teknik Komputer',
            'angkatan' => '2022',
            'jobdesk' => 'Backend Developer',
        ],
        [
            'nama' => 'Rizki Dafa Naldi',
            'jurusan' => 'Teknik Komputer',
            'angkatan' => '2023',
            'jobdesk' => 'Frontend Developer',
        ],
        [
            'nama' => 'Naufal Rafiif Irwan',
            'jurusan' => 'Teknik Komputer',
            'angkatan' => '2023',
            'jobdesk' => 'Backend Developer',
        ],
    ],
];
?>

<section class="py-20 px-4">
    <div class="max-w-5xl mx-auto text-center mb-12" data-aos="fade-down" data-aos-duration="800">
        <h2 class="text-3xl md:text-4xl font-bold text-white" style="font-family: 'Cormorant Garamond', serif;">
            Tim Pengembang
        </h2>
    </div>
    <div class="max-w-5xl mx-auto flex flex-col items-center gap-10">
        <!-- Dosen (paling atas, center) -->
        <div class="w-full flex justify-center">
            @foreach($team['dosen'] as $dosen)
            <div data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800" class="w-full max-w-md">
                <div class="bg-white/50 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl p-8 flex flex-col items-center gap-4 transition-all duration-500 hover:scale-105 cursor-pointer">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center  overflow-hidden bg-white mb-2">
                        <img src="{{ asset('img/people.webp') }}" alt="People Icon" class="w-12 h-12 object-contain">
                    </div>
                    <div class="text-center">
                        <div class="text-xl font-semibold text-[#A52A2A]">{{ $dosen['nama'] }}</div>
                        <div class="text-gray-700 text-base">{{ $dosen['jurusan'] }}</div>
                        <div class="text-gray-500 text-sm">{{ $dosen['jobdesk'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Tim IoT (tengah, 2 kolom) -->
        <div class="w-full">
            <h3 class="text-2xl font-bold text-white mb-6 text-center" style="font-family: 'Cormorant Garamond', serif;" data-aos="fade-right" data-aos-delay="250">
                Tim IoT
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center">
                @foreach($team['iot'] as $idx => $iot)
                <div data-aos="zoom-in" data-aos-duration="800" data-aos-delay="{{ 300 + ($idx * 100) }}">
                    <div class="bg-white/50 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl p-8 flex flex-col items-center gap-4 transition-all duration-500 hover:scale-105 cursor-pointer">
                        <div class="w-20 h-20 rounded-full flex items-center justify-center  overflow-hidden bg-white mb-2">
                            <img src="{{ asset('img/people.webp') }}" alt="People Icon" class="w-12 h-12 object-contain">
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-semibold text-[#A52A2A]">{{ $iot['nama'] }}</div>
                            <div class="text-gray-700 text-base">{{ $iot['jurusan'] }}</div>
                            <div class="text-gray-700 text-base">{{ $iot['angkatan'] }}</div>
                            <div class="text-gray-500 text-sm">{{ $iot['jobdesk'] }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Tim Software (bawah, 3 kolom) -->
        <div class="w-full">
            <h3 class="text-2xl font-bold text-white mb-6 text-center" style="font-family: 'Cormorant Garamond', serif;" data-aos="fade-left" data-aos-delay="300">
                Tim Software
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-center">
                @foreach($team['software'] as $idx => $sw)
                <div data-aos="zoom-in" data-aos-duration="800" data-aos-delay="{{ 400 + ($idx * 100) }}">
                    <div class="bg-white/50 backdrop-blur-md rounded-2xl border border-white/20 shadow-xl p-8 flex flex-col items-center gap-4 transition-all duration-500 hover:scale-105 cursor-pointer">
                        <div class="w-20 h-20 rounded-full flex items-center justify-center  overflow-hidden bg-white mb-2">
                            <img src="{{ asset('img/people.webp') }}" alt="People Icon" class="w-12 h-12 object-contain">
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-semibold text-[#A52A2A]">{{ $sw['nama'] }}</div>
                            <div class="text-gray-700 text-base">{{ $sw['jurusan'] }}</div>
                            <div class="text-gray-700 text-base">{{ $sw['angkatan'] }}</div>
                            <div class="text-gray-500 text-sm">{{ $sw['jobdesk'] }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
