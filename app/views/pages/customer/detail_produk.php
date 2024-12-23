<?php require __DIR__ . '/../../components/general/navbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<?= Navbar() ?>
<main class="mt-5 p-3">
    <section class="min-vh-100">
        <div id="product-img-collections">
            <img src="/assets/img/produk-bordir-baju.jpg" alt="Gambar produk 1" class="img-fluid">
        </div>
        <h3>Logo Sekolah</h3>
        <p>Ini adalah deskripsi produk logo sekolah</p>
        <p>Harga mulai dari Rp 5.000/pcs</p>

        <div class="d-flex justify-content-end">
            <button class="btn border border-black rounded-0 mt-3 mx-2" style="background-color: #D0BEA4; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">Tanya admin</button>
            <a href="/pesan" class="btn border border-black rounded-0 mt-3 mx-2" style="background-color: #D0BEA4; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">Pesan sekarang</a>
        </div>
    </section>
</main>