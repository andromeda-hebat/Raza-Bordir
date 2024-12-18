<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main class="px-5" style="min-height: 100vh; margin-top: 10vh;">
            <h2 class="pt-5">Manajemen Penjualan</h2>
            <h3>Statistik penjualan satu bulan terakhir</h3>
            <div class="d-flex" style="height: 200px;">
                <div class="w-50 h-100 me-2 border position-relative" style="background-color: white;">
                    <sub class="position-absolute bottom-0 start-50 translate-middle-x mb-3">Bulan November</sub>
                </div>
                <div class="w-50 h-100 ms-2 border position-relative" style="background-color: white;">
                    <sub class="position-absolute bottom-0 start-50 translate-middle-x mb-3">Bulan Sebelumnya</sub>
                </div>
            </div>
            <h3>Produk yang paling sering dipesan</h3>
            <div class="border" style="height: 200px; background-color: white;">
            </div>

            <h3>Gambaran umum data pelanggan</h3>
            <div class="border p-3" style="height: 200px; background-color: white;">
                <p style="font-family: Arial, Helvetica, sans-serif;">Rata-rata usia: <span>25-37 tahun</span></p>
                <p style="font-family: Arial, Helvetica, sans-serif;">Mayoritas kebutuhan memesan logo: <span>keperluan sekolah</span></p>
            </div>

            <br><br>

            <h3>Prediksi penjualan di masa yang akan datang</h3>
            <div class="border p-3" style="min-height: 200px; background-color: white; font-family: Arial, Helvetica, sans-serif">
                <p style="font-family: inherit">Produk yang paling sering terjual: <span style="font-family: inherit">bordir logo</span></p>
                <p style="font-family: inherit">Estimasi pendapatan pada bulan depan: <span style="font-family: inherit">Rp 354.000.000,-</span></p>
                <p style="font-family: inherit">Material yang bakal dibutuhkan: <span style="font-family: inherit">kain perca</span></p>
            </div>
        </main>
    </div>
</div>