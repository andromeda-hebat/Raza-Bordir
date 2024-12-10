<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main style="min-height: 100vh; margin-top:10vh;">
            <div class="px-5">
                <h2 class="pt-4">Kelola Pesanan</h2>

                <div class="row mx-0 bg-white mt-5">
                    <div class="col border-end border-start border-black">Semua</div>
                    <div class="col border-end border-black">Belum dibayar</div>
                    <div class="col border-end border-black">Sudah dibayar</div>
                    <div class="col border-end border-black">Proses dibayar</div>
                    <div class="col border-end border-black">Selesai dibayar</div>
                </div>

                <table class="table mt-5 border-top border-black">
                    <thead>
                        <tr>
                            <th style="background-color: #FAF9F6;">Nama</th>
                            <th style="background-color: #FAF9F6;">Nomor HP</th>
                            <th style="background-color: #FAF9F6;">Desain</th>
                            <th style="background-color: #FAF9F6;">Media</th>
                            <th style="background-color: #FAF9F6;">Jumlah</th>
                            <th style="background-color: #FAF9F6;">Harga</th>
                            <th style="background-color: #FAF9F6;">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="background-color: #FAF9F6;">Ani</td>
                            <td style="background-color: #FAF9F6;">099999999</td>
                            <td style="background-color: #FAF9F6;">a.png</td>
                            <td style="background-color: #FAF9F6;">Kain</td>
                            <td style="background-color: #FAF9F6;">100</td>
                            <td style="background-color: #FAF9F6;">Rp 5.000/pcs</td>
                            <td style="background-color: #FAF9F6;">
                                <button>Rincian</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</div>