<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>
<?php require_once __DIR__ . '/../../components/bs_modal/confirm_delete_data.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main class="px-5 pb-5 min-vh-100" style="margin-top: 10vh;">
            <h2>Kelola Katalog Produk</h2>

            <a href=" /katalog-produk/tambah">Tambah</a>

            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>ID produk</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Foto Produk</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['products'] as $key => $value): ?>
                        <tr>
                            <td><?= $value['product_id'] ?></td>
                            <td><?= $value['name'] ?></td>
                            <td><?= $value['description'] ?></td>
                            <td>
                                <img src="/static/img/<?= $value['image'] ?>" alt="Product image" style="height: 150px;">
                            </td>
                            <td><?= $value['start_price'] ?></td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button type="button" id="delete-trigger-btn" class="btn btn-danger" data-bs-toggle="modal" data-item-id="<?= $value['product_id'] ?>" data-item-image="<?= $value['image'] ?>"
                                    data-bs-target="#deleteModal">Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>
</div>





<?php ////////////////////// ?>
<?php //--BOOTSTRAP MODAL--/ ?>
<?php ////////////////////// ?>

<?php ConfirmDeleteData("Hapus data produk", "/katalog-produk", "produk") ?>
