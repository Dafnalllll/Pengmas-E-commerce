<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Dashboard Admin | Kampung Syurga</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-200 flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-4 lg:p-8 pt-16 lg:pt-8">
        <!-- Header -->
        <h1 class="text-2xl lg:text-4xl font-bold text-gray-500 mb-4 lg:mb-8">Dashboard</h1>

        <!-- Welcome Card -->
        <div class="bg-red-700 text-white p-4 lg:p-6 rounded-lg mb-4 lg:mb-8">
            <h2 class="text-lg lg:text-2xl font-semibold mb-2">Welcome, admin!</h2>
            <p class="text-[#F5F5DC] text-sm lg:text-base">You are logged in as: {{ auth()->user()->email ?? 'admin1234@gmail.com' }}</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-4 lg:mb-8">
            <!-- Products Card -->
            <div class="bg-white p-4 lg:p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="bg-[#4ECDC4] p-2 lg:p-3 rounded-lg mr-3 lg:mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base lg:text-lg font-semibold text-black">Products</h3>
                    </div>
                </div>
                <div class="text-2xl lg:text-3xl font-bold text-black mb-2">{{ $totalProducts ?? 0 }}</div>
                <p class="text-gray-600 text-xs lg:text-sm mb-2 lg:mb-4">{{ $totalProducts ?? 0 }} active</p>
                <a href="{{ route('admin.products') }}" class="text-red-600 hover:underline font-medium text-sm lg:text-base">Manage Products</a>
            </div>

            <!-- SOP Card -->
            <div class="bg-white p-4 lg:p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="bg-[#FFB347] p-2 lg:p-3 rounded-lg mr-3 lg:mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base lg:text-lg font-semibold text-black">SOP</h3>
                    </div>
                </div>
                <div class="text-2xl lg:text-3xl font-bold text-black mb-2">{{ $totalSops ?? 0 }}</div>
                <p class="text-gray-600 text-xs lg:text-sm mb-2 lg:mb-4">{{ $totalSops ?? 0 }} published</p>
                <a href="{{ route('admin.sops') }}" class="text-red-600 hover:underline font-medium text-sm lg:text-base">Manage SOP</a>
            </div>

            <!-- Blogs Card -->
            <div class="bg-white p-4 lg:p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="bg-[#9B59B6] p-2 lg:p-3 rounded-lg mr-3 lg:mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base lg:text-lg font-semibold text-black">Blogs</h3>
                    </div>
                </div>
                <div class="text-2xl lg:text-3xl font-bold text-black mb-2">{{ $totalBlogs ?? 0 }}</div>
                <p class="text-gray-600 text-xs lg:text-sm mb-2 lg:mb-4">{{ $totalBlogs ?? 0 }} published</p>
                <a href="{{ route('admin.blogs') }}" class="text-red-600 hover:underline font-medium text-sm lg:text-base">Manage Blogs</a>
            </div>

            <!-- Page Views Card -->
            <div class="bg-white p-4 lg:p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="bg-[#E74C3C] p-2 lg:p-3 rounded-lg mr-3 lg:mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base lg:text-lg font-semibold text-black">Page Views</h3>
                    </div>
                </div>
                <div class="text-2xl lg:text-3xl font-bold text-black mb-2">{{ $totalViews ?? 0 }}</div>
                <p class="text-gray-600 text-xs lg:text-sm mb-2 lg:mb-4">This week: {{ $weekViews ?? 0 }}</p>
                <p class="text-gray-500 text-xs">Today: {{ $todayViews ?? 0 }}</p>
            </div>
        </div>

        <!-- Weekly Views Chart -->
        <div class="bg-white p-4 lg:p-6 rounded-lg shadow-md mb-4 lg:mb-8">
            <h3 class="text-xl lg:text-2xl font-semibold text-gray-700 mb-4">Page Views This Week</h3>
            <div class="chart-container" style="position: relative; height:300px;">
                <canvas id="viewsChart"></canvas>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="mb-4 lg:mb-8">
            <h3 class="text-xl lg:text-2xl font-semibold text-gray-500 mb-4 lg:mb-6">Quick Links</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-4">
                <!-- Add Product -->
                <a href="{{ route('admin.products.create') }}" class="bg-[#4ECDC4] hover:bg-[#45B7B8] hover:scale-105 text-white p-3 lg:p-4 rounded-lg font-semibold transition-all duration-200 flex items-center justify-center text-sm lg:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add Product
                </a>

                <!-- Add SOP -->
                <a href="{{ route('admin.sops.create') }}" class="bg-[#FFB347] hover:bg-[#FF9800] hover:scale-105 text-white p-3 lg:p-4 rounded-lg font-semibold transition-all duration-200 flex items-center justify-center text-sm lg:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add SOP
                </a>

                <!-- Add Blog -->
                <a href="{{ route('admin.blogs.create') }}" class="bg-[#9B59B6] hover:bg-[#8E44AD] hover:scale-105 text-white p-3 lg:p-4 rounded-lg font-semibold transition-all duration-200 flex items-center justify-center text-sm lg:text-base sm:col-span-2 lg:col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add Blog
                </a>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script>
        const ctx = document.getElementById('viewsChart').getContext('2d');
        const viewsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($chartLabels ?? []) !!},
                datasets: [{
                    label: 'Page Views',
                    data: {!! json_encode($chartData ?? []) !!},
                    backgroundColor: 'rgba(220, 38, 38, 0.1)',
                    borderColor: 'rgba(220, 38, 38, 1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: 'rgba(220, 38, 38, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(220, 38, 38, 1)',
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
