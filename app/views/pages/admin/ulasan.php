<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main class="px-5" style="height: 100vh; margin-top: 10vh;">
            <h2>Ulasan</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Pemesan</th>
                        <th>Ulasan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P0001</td>
                        <td>Bordirnya bagus!</td>
                        <td>12/07/2024</td>
                        <td>
                            <button>Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</div>