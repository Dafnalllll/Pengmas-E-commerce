<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Monitoring Kelembapan | Kampung Syurga</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .sensor-card {
            background: linear-gradient(135deg, #7fa99b 0%, #6b8e7f 100%);
            border-radius: 1rem;
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .sensor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .sensor-icon {
            position: absolute;
            right: 1.5rem;
            top: 1.5rem;
            width: 60px;
            height: 60px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .trend-up {
            color: #ef4444;
        }

        .trend-down {
            color: #10b981;
        }
    </style>
</head>

<body class="bg-gray-200 flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-4 lg:p-8 pt-16 lg:pt-8">
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-2xl lg:text-4xl font-bold text-gray-500 mb-2">Monitoring Kelembapan Tanah</h1>
            <p class="text-gray-600">Real-time monitoring dari 22 sensor kelembapan tanah</p>

            @if(isset($error))
                <div class="mt-4 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded">
                    <p class="font-bold">Peringatan</p>
                    <p>{{ $error }}</p>
                </div>
            @endif
        </div>

        <!-- Auto Refresh Info -->
        <div class="mb-6 bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded">
            <div class="flex items-center justify-between">
                <div>
                    <p class="font-bold">Auto Refresh</p>
                    <p class="text-sm">Halaman akan refresh otomatis setiap 30 detik</p>
                </div>
                <button onclick="location.reload()"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                    Refresh Sekarang
                </button>
            </div>
        </div>

        <!-- Sensor Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6">
            @foreach($sensors as $sensor)
                <div class="sensor-card">
                    <!-- Sensor Icon -->
                    <div class="sensor-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>

                    <!-- Sensor Title -->
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Kelembapan Tanah</h3>
                    <p class="text-xs text-gray-700 mb-1">{{ $sensor['name'] }}</p>

                    <!-- Sensor Value -->
                    <div class="text-5xl font-bold text-black mb-3">
                        {{ $sensor['value'] }}%
                    </div>

                    <!-- Trend Indicator -->
                    <div class="flex items-center text-sm">
                        @if($sensor['trend'] === 'down')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 trend-down mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                            </svg>
                            <span class="trend-down font-semibold">{{ abs($sensor['change']) }}%</span>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 trend-up mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            <span class="trend-up font-semibold">{{ $sensor['change'] }}%</span>
                        @endif
                        <span class="text-gray-800 ml-2">{{ $sensor['trend'] === 'down' ? 'Turun' : 'Naik' }} dari
                            kemarin</span>
                    </div>

                    <!-- Last Update -->
                    <div class="mt-3 pt-3 border-t border-gray-700 border-opacity-20">
                        <p class="text-xs text-gray-700">
                            Update terakhir: {{ \Carbon\Carbon::parse($sensor['lastUpdate'])->diffForHumans() }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Summary Statistics -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Rata-rata Kelembapan</h3>
                <div class="text-3xl font-bold text-green-600">
                    {{ round(collect($sensors)->avg('value'), 1) }}%
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Kelembapan Tertinggi</h3>
                <div class="text-3xl font-bold text-blue-600">
                    {{ collect($sensors)->max('value') }}%
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Kelembapan Terendah</h3>
                <div class="text-3xl font-bold text-red-600">
                    {{ collect($sensors)->min('value') }}%
                </div>
            </div>
        </div>
    </div>

    <!-- Auto Refresh Script -->
    <script>
        // Auto refresh every 30 seconds
        setTimeout(function () {
            location.reload();
        }, 30000);
    </script>
</body>

</html>