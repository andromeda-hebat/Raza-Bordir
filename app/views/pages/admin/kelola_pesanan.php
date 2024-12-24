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
                        <th>Media</th>
                        <th>Jumlah</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['orders'] as $key => $value): ?>
                        <tr>
                            <td><?= $value['customer'] ?></td>
                            <td><?= $value['phone'] ?></td>
                            <td><?= $value['product'] ?></td>
                            <td><?= $value['amount'] ?></td>
                            <td>
                                <a href="/kelola-pesanan/detail/<?= $value['order_id'] ?>" class="btn btn-primary">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>
</div>