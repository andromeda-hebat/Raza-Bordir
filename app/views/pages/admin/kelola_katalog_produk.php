<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main style="height: 100vh; margin-top: 10vh;">
            <div class="px-5">
                <h1>Kelola Katalog Produk</h1>

                <a href=" /katalog-produk/tambah">Tambah</a>

                <table>
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
            </div>
        </main>
    </div>
</div>