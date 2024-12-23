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
            <h2>Kelola Katalog Produk</h2>

            <a href=" /katalog-produk/tambah">Tambah</a>

            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Foto Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Logo Sekolah</td>
                        <td>Ini adalah sebuah logo sekolah</td>
                        <td>logo_sekolah.jpg</td>
                        <td>Bordir logo</td>
                        <td>Rp 5.000/pcs</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</div>