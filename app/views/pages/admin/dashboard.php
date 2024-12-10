<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="position-top w-100" style="margin-left: 40vh;">
        <?= Topbar() ?>
        <main style="min-height:100vh; margin-top:10vh;">
            <div class="p-5">
                <div>
                    <h1>Kategori Produk Terlaris</h1>
                    <div class="border border-black w-100" style="height: 100px"></div>
                </div>

                <div class="d-flex">
                    <div class="w-50 me-3">
                        <h2>Jumlah Pesanan</h2>
                        <div class="border border-black w-100" style="height: 100px"></div>
                    </div>
                    <div class="w-50 ms-3">
                        <h2>Jumlah Pengunjung</h2>
                        <div class="border border-black w-100" style="height: 100px"></div>
                    </div>
                </div>
                <div>
                    <h2>Grafik Penjualan</h2>
                    <div class="border border-black w-100" style="height: 400px"></div>
                </div>
            </div>
        </main>
    </div>
</div>