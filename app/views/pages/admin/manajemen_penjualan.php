<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main class="px-5 pb-5" style="min-height: 100vh; margin-top: 10vh;">
            <h2>Manajemen Penjualan</h2>
            <h3>Statistik penjualan dua bulan terakhir</h3>
            <div class="d-flex">
                <div class="w-50 h-100 me-2 border position-relative" style="background-color: white;">
                    <div style="width: 80%; margin: 20px auto;">
                        <canvas id="currentMonthChart"></canvas>
                    </div>
                    <sub class="position-absolute bottom-0 start-50 translate-middle-x mb-3">Bulan
                        <?php $GLOBALS['date_time_formatter']->setPattern('MMMM');
                        echo $GLOBALS['date_time_formatter']->format(new DateTime()) ?></sub>
                </div>
                <div class="w-50 h-100 ms-2 border position-relative" style="background-color: white;">
                    <div style="width: 80%; margin: 20px auto;">
                        <canvas id="previousMonthChart"></canvas>
                    </div>
                    <sub class="position-absolute bottom-0 start-50 translate-middle-x mb-3">Bulan Sebelumnya</sub>
                </div>
            </div>
            <h3>Produk yang paling sering dipesan</h3>
            <div class="border" style="background-color: white;">
                <div style="width: 80%; margin: 20px auto;">
                    <canvas id="mostOrderProduct"></canvas>
                </div>
            </div>

            <h3>Gambaran umum data pelanggan</h3>
            <div class="border p-3" style="height: 200px; background-color: white;">
                <p style="font-family: Arial, Helvetica, sans-serif;">Rata-rata usia: <span>25-37 tahun</span></p>
                <p style="font-family: Arial, Helvetica, sans-serif;">Mayoritas kebutuhan memesan logo: <span>keperluan
                        sekolah</span></p>
            </div>

            <br><br>

            <h3>Prediksi penjualan di masa yang akan datang</h3>
            <div class="border p-3"
                style="min-height: 200px; background-color: white; font-family: Arial, Helvetica, sans-serif">
                <p style="font-family: inherit">Produk yang paling sering terjual: <span
                        style="font-family: inherit">bordir logo</span></p>
                <p style="font-family: inherit">Estimasi pendapatan pada bulan depan: <span
                        style="font-family: inherit">Rp 354.000.000,-</span></p>
                <p style="font-family: inherit">Material yang bakal dibutuhkan: <span style="font-family: inherit">kain
                        perca</span></p>
            </div>
        </main>
    </div>
</div>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>


<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>
<script>
    const currentMonthlabels = Object.keys(<?= json_encode($data['current_month_totaL_sales']) ?>);
    const prevMonthlabels = Object.keys(<?= json_encode($data['prev_month_total_sales']) ?>);

    const currentMonthSales = Object.values(<?= json_encode($data['current_month_totaL_sales']) ?>.map(item => parseFloat(item.order_per_day)));
    const previousMonthSales = Object.values(<?= json_encode($data['prev_month_total_sales']) ?>.map(item => parseFloat(item.order_per_day)));

    const currentMonthData = {
        labels: currentMonthlabels,
        datasets: [{
            label: '',
            data: currentMonthSales,
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            tension: 0.4,
            fill: true,
            pointRadius: 3,
            pointBackgroundColor: 'rgba(75, 192, 192, 1)'
        }]
    };
    const currentMonthConfig = {
        type: 'line',
        data: currentMonthData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: false
                },
                title: {
                    display: false,
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Pemesanan'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: ''
                    }
                }
            }
        }
    };

    const previousMonthData = {
        labels: prevMonthlabels,
        datasets: [{
            label: '',
            data: previousMonthSales,
            borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            tension: 0.4,
            fill: true,
            pointRadius: 3,
            pointBackgroundColor: 'rgba(255, 99, 132, 1)'
        }]
    };

    const previousMonthConfig = {
        type: 'line',
        data: previousMonthData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: false
                },
                title: {
                    display: false,
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Pemesanan'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: ''
                    }
                }
            }
        }
    };

    const mostOrderProductData = {
        labels: Object.values(<?= json_encode($data['most_order_product']) ?>.map(item => item.name)),
        datasets: [{
            label: 'Frekuensi Pemesanan',
            data: Object.values(<?= json_encode($data['most_order_product']) ?>.map(item => parseInt(item.total_amount))),
            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)'],
            borderWidth: 1
        }]
    };

    const mostOrderProductConfig = {
        type: 'bar',
        data: mostOrderProductData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    }

    const currentCtx = document.getElementById('currentMonthChart').getContext('2d');
    new Chart(currentCtx, currentMonthConfig);

    const previousCtx = document.getElementById('previousMonthChart').getContext('2d');
    new Chart(previousCtx, previousMonthConfig);

    const mostOrderProductCtx = document.getElementById('mostOrderProduct').getContext('2d');
    new Chart(mostOrderProductCtx, mostOrderProductConfig);
</script>
