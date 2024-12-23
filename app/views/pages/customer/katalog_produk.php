<?php require __DIR__ . '/../../components/customer/product_card.php' ?>
<?php require __DIR__ . '/../../components/general/navbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<?= Navbar() ?>
<main class="mt-5 p-3">
    <section class="min-vh-100">
        <h2>Produk yang kami sediakan</h2>
        <div class="container">
            <div class="row my-4">
                <?= ProductCard('Bordir tas', '/assets/img/produk-tas-bordir.jpg', 'Rp 30.000/pcs'); ?>
                <?= ProductCard('Bordir logo', '/assets/img/produk-bordir-logo.jpg', 'Rp 5.000/pcs'); ?>
            <div class="row my-4">
                <?= ProductCard('Bordir kemeja', '/assets/img/produk-bordir-baju.jpg', 'Rp 50.000/pcs'); ?>
                <?= ProductCard('Bordir nama', '/assets/img/produk-bordir-nama.jpg', 'Rp 3.000/pcs'); ?>
            </div>
            <div class="row my-4">
                <?= ProductCard('Bordir jilbab', '/assets/img/produk-bordir-jilbab.jpg', 'Rp 20.000/pcs'); ?>
                <?= ProductCard('Bordir pandel', '/assets/img/produk-bordir-pandel.jpg', 'Rp 50.000/pcs'); ?>
            </div>
            <div class="row my-4">
                <?= ProductCard('Bordir pataka', '/assets/img/produk-bordir-bendera-pataka.jpg', 'Rp 87.000/pcs'); ?>
                <?= ProductCard('Bordir celana', '/assets/img/produk-bordir-celana.jpg', 'Rp 30.000/pcs'); ?>
            </div>
        </div>
    </section>
</main>