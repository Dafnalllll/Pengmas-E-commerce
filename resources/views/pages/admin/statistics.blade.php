<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Statistics | Kampung Syurga</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-200 flex flex-col lg:flex-row">
    <x-sidebar />

    <div class="flex-1 p-4 lg:p-8 pt-20 lg:pt-8">
        <h1 class="text-2xl lg:text-4xl font-bold text-gray-500 mb-4 lg:mb-8">Website Statistics</h1>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md transform transition hover:scale-105">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-lg flex items-center justify-center text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="fas fa-eye text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-600 mb-1">Total Views</h3>
                        <div class="text-3xl font-bold text-gray-800">{{ number_format($totalViews ?? 0) }}</div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md transform transition hover:scale-105">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-lg flex items-center justify-center text-white" style="background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%);">
                        <i class="fas fa-calendar-day text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-600 mb-1">Today</h3>
                        <div class="text-3xl font-bold text-gray-800">{{ number_format($todayViews ?? 0) }}</div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md transform transition hover:scale-105">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-lg flex items-center justify-center text-white" style="background: linear-gradient(135deg, #F7971E 0%, #FFD200 100%);">
                        <i class="fas fa-calendar-week text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-600 mb-1">This Week</h3>
                        <div class="text-3xl font-bold text-gray-800">{{ number_format($weekViews ?? 0) }}</div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md transform transition hover:scale-105">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-lg flex items-center justify-center text-white" style="background: linear-gradient(135deg, #FF6B6B 0%, #FF8E53 100%);">
                        <i class="fas fa-calendar-alt text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-600 mb-1">This Month</h3>
                        <div class="text-3xl font-bold text-gray-800">{{ number_format($monthViews ?? 0) }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            @if(isset($dailyViews) && $dailyViews->count() > 0)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Daily Views (Last 30 Days)</h3>
                <div style="position: relative; height:300px;">
                    <canvas id="dailyChart"></canvas>
                </div>
            </div>
            @endif

            @if(isset($monthlyViews) && $monthlyViews->count() > 0)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Monthly Views ({{ date('Y') }})</h3>
                <div style="position: relative; height:300px;">
                    <canvas id="monthlyChart"></canvas>
                </div>
            </div>
            @endif
        </div>

        <!-- Popular Pages -->
        @if(isset($popularPages) && $popularPages->count() > 0)
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Most Popular Pages</h3>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rank</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Page Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">URL</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Views</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Percentage</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($popularPages as $index => $page)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full text-white font-bold text-sm
                                    {{ $index + 1 == 1 ? 'bg-yellow-400' : ($index + 1 == 2 ? 'bg-gray-400' : ($index + 1 == 3 ? 'bg-orange-400' : 'bg-gray-600')) }}">
                                    {{ $index + 1 }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $page->page_title ?: 'Unknown Page' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <a href="{{ $page->page_url }}" target="_blank" class="text-red-600 hover:underline">
                                    {{ Str::limit($page->page_url, 50) }}
                                </a>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-red-600">{{ number_format($page->views_count) }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $totalViews > 0 ? number_format(($page->views_count / $totalViews) * 100, 1) : 0 }}%
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(isset($dailyViews) && $dailyViews->count() > 0)
        const dailyCtx = document.getElementById('dailyChart');
        if (dailyCtx) {
            const dailyData = @json($dailyViews);
            const dailyLabels = dailyData.map(item => {
                const date = new Date(item.date);
                return date.toLocaleDateString('id-ID', { month: 'short', day: 'numeric' });
            });
            const dailyValues = dailyData.map(item => item.views);

            new Chart(dailyCtx, {
                type: 'line',
                data: {
                    labels: dailyLabels,
                    datasets: [{
                        label: 'Daily Views',
                        data: dailyValues,
                        borderColor: '#A52A2A',
                        backgroundColor: 'rgba(165, 42, 42, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#A52A2A',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { beginAtZero: true },
                        x: { grid: { display: false } }
                    }
                }
            });
        }
        @endif

        @if(isset($monthlyViews) && $monthlyViews->count() > 0)
        const monthlyCtx = document.getElementById('monthlyChart');
        if (monthlyCtx) {
            const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            const monthlyValues = new Array(12).fill(0);
            const monthlyData = @json($monthlyViews);

            monthlyData.forEach(item => {
                monthlyValues[item.month - 1] = item.views;
            });

            new Chart(monthlyCtx, {
                type: 'bar',
                data: {
                    labels: monthNames,
                    datasets: [{
                        label: 'Monthly Views',
                        data: monthlyValues,
                        backgroundColor: 'rgba(165, 42, 42, 0.8)',
                        borderColor: '#A52A2A',
                        borderWidth: 1,
                        borderRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { beginAtZero: true },
                        x: { grid: { display: false } }
                    }
                }
            });
        }
        @endif
    });
    </script>
</body>
</html>
