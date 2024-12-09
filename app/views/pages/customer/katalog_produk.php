<?php require __DIR__ . '/../../components/customer/product_card.php' ?>
<?php require __DIR__ . '/../../components/customer/navbar.php' ?>





<?= Navbar() ?>
<main class="mt-5 p-3">
    <section class="min-vh-100">
        <h2>Produk yang kami sediakan</h2>
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <?= ProductCard('Bordir tas', '/assets/img/produk-tas-bordir.jpg', 'Rp 30.000/pcs'); ?>
                </div>
                <div class="col">
                    <?= ProductCard('Bordir logo', '/assets/img/produk-bordir-logo.jpg', 'Rp 5.000/pcs'); ?>
            </div>
            <div class="row my-4">
                <div class="col">
                    <?= ProductCard('Bordir kemeja', '/assets/img/produk-bordir-baju.jpg', 'Rp 50.000/pcs'); ?>
                </div>
                <div class="col">
                    <?= ProductCard('Bordir nama', '/assets/img/produk-bordir-nama.jpg', 'Rp 3.000/pcs'); ?>
                </div>
            </div>
            <div class="row my-4">
                <div class="col">
                    <?= ProductCard('Bordir jilbab', '/assets/img/produk-bordir-jilbab.jpg', 'Rp 20.000/pcs'); ?>
                </div>
                <div class="col">
                    <?= ProductCard('Bordir pandel', '/assets/img/produk-bordir-pandel.jpg', 'Rp 50.000/pcs'); ?>
                </div>
            </div>
            <div class="row my-4">
                <div class="col">
                    <?= ProductCard('Bordir pataka', '/assets/img/produk-bordir-bendera-pataka.jpg', 'Rp 87.000/pcs'); ?>
                </div>
                <div class="col">
                    
                </div>
            </div>
        </div>
    </section>
</main>