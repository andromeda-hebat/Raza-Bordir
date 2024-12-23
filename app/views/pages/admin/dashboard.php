<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main class="px-5 pb-5 min-vh-100" style="margin-top:10vh;">
            <section>
                <h2>Kategori Produk Terlaris</h2>

                <div class="d-flex mt-2">
                    <?php foreach ($data['top_3_highest_order'] as $key => $value): ?>
                        <div class="card card-body me-4 d-flex justify-content-center border-black" style="width: 25vh;">
                            <div class="text-center">
                                <img src="/static/img/<?= $value['image'] ?>" alt="Top product image" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 4px solid #ddd;">
                                <h6 class="mb-0"><?= $value['name'] ?></h6>
                                <p class="mb-0"><?= $value['order_count'] ?>pcs/bln</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </section>

            <section class="mt-4">
                <div class="d-flex mt-2">
                    <div class="w-50 me-3">
                        <h2>Jumlah Pesanan</h2>
                        <div class="card card-body w-100 rounded-0 border-black text-center" style="height: 20vh">
                            <H1 style="color: #A7977F; font-size: 10vh"><?= $data['total_order'] ?></H1>
                        </div>
                    </div>
                    <div class="w-50 ms-3">
                        <h2>Jumlah Pengunjung</h2>
                        <div class="card card-body w-100 rounded-0 border-black text-center" style="height: 20vh">
                            <H1 style="color: #A7977F; font-size: 10vh">34</H1>
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
