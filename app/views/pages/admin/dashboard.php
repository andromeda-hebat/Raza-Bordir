<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main class="px-5 pb-5" style="min-height:100vh; margin-top:10vh;">
            <section>
                <h2>Kategori Produk Terlaris</h2>

                <div class="d-flex mt-2">
                    <div class="card card-body me-4 d-flex justify-content-center border-black" style="width: 25vh;">
                        <div class="text-center">
                            <svg class="mb-2" width="90" height="90" viewBox="0 0 90 90" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="45" cy="45" r="44.5" fill="#A7977F" fill-opacity="0.51" stroke="black" />
                            </svg>

                            <h6 class="mb-0">Bordir Nama</h6>
                            <p class="mb-0">125pcs/bln</p>
                        </div>
                    </div>
                    <div class="card card-body me-4 d-flex justify-content-center border-black " style="width: 25vh;">
                        <div class="text-center">
                            <svg class="mb-2" width="90" height="90" viewBox="0 0 90 90" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="45" cy="45" r="44.5" fill="#A7977F" fill-opacity="0.51" stroke="black" />
                            </svg>

                            <h6 class="mb-0">Bordir Logo</h6>
                            <p class="mb-0">275pcs/bln</p>
                        </div>
                    </div>
                    <div class="card card-body d-flex justify-content-center border-black" style="width: 25vh;">
                        <div class="text-center">
                            <svg class="mb-2" width="90" height="90" viewBox="0 0 90 90" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="45" cy="45" r="44.5" fill="#A7977F" fill-opacity="0.51" stroke="black" />
                            </svg>

                            <h6 class="mb-0">Bordir Baju</h6>
                            <p class="mb-0">55pcs/bln</p>
                        </div>
                    </div>
                </div>

            </section>

            <section class="mt-4">
                <div class="d-flex mt-2">
                    <div class="w-50 me-3">
                        <h2>Jumlah Pesanan</h2>
                        <div class="card card-body w-100 rounded-0 border-black text-center" style="height: 20vh">
                            <H1 style="color: #A7977F; font-size: 10vh">455</H1>
                        </div>
                    </div>
                    <div class="w-50 ms-3">
                        <h2>Jumlah Pengunjung</h2>
                        <div class="card card-body w-100 rounded-0 border-black text-center" style="height: 20vh">
                            <H1 style="color: #A7977F; font-size: 10vh">900</H1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-4">
                <div>
                    <h2>Grafik Penjualan</h2>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');

    const salesData = {
        labels: ['1', '3', '6', '8', '11', '15', '18', '20', '22', '24', '28', '30'],
        datasets: [{
            label: 'Penjualan',
            data: [20, 18, 15, 25, 20, 15, 21, 17, 29, 22, 12, 18],
            backgroundColor: 'rgba(255, 193, 7, 0.5)',
            borderColor: 'rgba(255, 193, 7, 1)',
            borderWidth: 2,
            fill: false,
        }]
    };

    const config = {
        type: 'line',
        data: salesData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'November 2024',
                    align: 'end',
                    font: {
                        size: 18
                    }

                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    new Chart(ctx, config);
</script>
