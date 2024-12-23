<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main class="px-5" style="min-height: 100vh; margin-top:10vh;">
            <h2>Kelola Pesanan</h2>

            <div class="row mx-0 bg-white mt-5">
                <div class="col border-end border-start border-black">Semua</div>
                <div class="col border-end border-black">Belum dibayar</div>
                <div class="col border-end border-black">Sudah dibayar</div>
                <div class="col border-end border-black">Proses dibayar</div>
                <div class="col border-end border-black">Selesai dibayar</div>
            </div>

            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Nomor HP</th>
                        <th>Desain</th>
                        <th>Media</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ani</td>
                        <td>099999999</td>
                        <td>a.png</td>
                        <td>Kain</td>
                        <td>100</td>
                        <td>Rp 5.000/pcs</td>
                        <td>
                            <button>Rincian</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</div>