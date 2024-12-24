<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>
<?php require_once __DIR__ . '/../../components/bs_modal/confirm_delete_data.php' ?>
<?php require_once __DIR__ . '/../../components/bs_modal/confirm_edit_item.php' ?>





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
                        <th>Nomor</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Foto Produk</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['products'] as $key => $value): ?>
                        <tr data-item-id="<?= $value['product_id'] ?>">
                            <td><?= $key+1 ?></td>
                            <td class="product-name"><?= $value['name'] ?></td>
                            <td class="product-description"><?= $value['description'] ?></td>
                            <td class="product-image">
                                <img src="/static/img/<?= $value['image'] ?>" alt="Product image" style="height: 150px;">
                            </td>
                            <td class="product-price"><?= $value['start_price'] ?></td>
                            <td>
                                <button type="button" id="edit-trigger-btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
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

<?php ConfirmEditItem("Perbarui data produk", "/katalog-produk/", "produk") ?>
<?php ConfirmDeleteData("Hapus data produk", "/katalog-produk", "produk") ?>
