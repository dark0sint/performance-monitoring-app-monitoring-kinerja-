<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kinerja Pegawai</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Pengawasan Kinerja Pegawai Unit Kabupaten</h1>
    <canvas id="performanceChart" width="400" height="200"></canvas>

    <script>
        const ctx = document.getElementById('performanceChart').getContext('2d');
        const data = @json($data);  // Data dari controller

        const labels = data.map(item => item.unit);
        const productivity = data.map(item => item.productivity);

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Produktivitas Rata-rata',
                    data: productivity,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
