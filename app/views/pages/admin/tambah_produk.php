<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main class="px-5" style="height: 100vh; margin-top:10vh;">
            <h2>Tambah produk</h2>
            <form action="/katalog-produk/tambah" method="post" enctype="multipart/form-data">
                <label for="nama-produk">Nama produk</label>
                <input type="text" name="name" id="nama-produk" class="form-control">
                <label for="input-foto-produk">Foto produk</label>
                <input type="file" name="image" id="input-foto-produk" class="form-control">
                <label for="input-product-description">Deskripsi produk</label>
                <textarea id="input-product-description" name="description" class="form-control" style="resize: none;"></textarea>
                <label for="harga">Harga awal produk</label>
                <input type="text" name="price" id="input-price" class="form-control">
                <input type="submit" value="Tambahkan" id="submit-form" class="mt-4">
            </form>
        </main>
    </div>
</div>
