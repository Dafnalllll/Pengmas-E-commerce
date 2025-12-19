@php
// Data dummy, ganti dengan data real dari controller jika sudah ada
$labels = [
    '2025-11-17', '2025-11-18', '2025-11-19', '2025-11-20', '2025-11-21', '2025-11-22', '2025-11-23'
];
$data = [120, 150, 180, 90, 200, 170, 220];
@endphp

<section class="py-12 px-4">
    <div class="w-full max-w-6xl mx-auto bg-white/80 rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-6 text-[#A52A2A] text-center" style="font-family: 'Cormorant Garamond', serif;">
            Grafik Pengunjung
        </h2>
        <div class="overflow-x-auto">
            <canvas id="visitChart" width="1000" height="500"></canvas>
        </div>
    </div>
</section>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('visitChart').getContext('2d');
    const visitChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($labels),
            datasets: [{
                label: 'Jumlah Orang',
                data: @json($data),
                fill: true,
                backgroundColor: 'rgba(165,42,42,0.1)',
                borderColor: '#A52A2A',
                tension: 0.4,
                pointBackgroundColor: '#A52A2A',
                pointBorderColor: '#fff',
                pointRadius: 5,
                pointHoverRadius: 7,
            }]
        },
        options: {
            responsive: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Jumlah Orang', color: '#A52A2A', font: { size: 16 } },
                    ticks: { color: '#A52A2A', font: { size: 14 } }
                },
                x: {
                    title: { display: true, text: 'Tanggal', color: '#A52A2A', font: { size: 16 } },
                    ticks: { color: '#A52A2A', font: { size: 14 } }
                }
            }
        }
    });
</script>
