<div class="d-flex">
    <?php include __DIR__ . '/../../components/admin/sidebar.php' ?>
    
    <main>
        <h1>Tambah produk</h1>

        <form action="/katalog-produk/tambah" method="post" enctype="multipart/form-data">
            <label for="nama-produk">Nama produk</label><br>
            <input type="text" name="nama-produk" id="nama-produk"><br>
            <label for="input-foto-produk">Foto produk</label><br>
            <input type="file" name="foto-produk" id="input-foto-produk"><br>
            <label for="input-product-description">Deskripsi produk</label><br>
            <textarea name="deskripsi-produk" id="input-product-description"></textarea><br>
            <label for="kategori">Kategori</label><br>
            <input type="text" id="kateogri" name="kategori"><br>
            <label for="harga">Harga/pcs</label><br>
            <input type="text" name="harga" id="harga"><br>
            <input type="submit" value="Tambahkan" id="submit-form"><br>
        </form>
    </main>
</div>