<?php require __DIR__ . '/../../components/customer/navbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<?= Navbar() ?>
<main>
    <section class="min-vh-100 d-flex align-items-end"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/mesin-bordir.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container text-md-start m-5" style="color: #FEFFD2;">
            <h1 class="display-6 fw-bold" style="font-family: 'Alegreya Sans SC';">
                Sebuah Mahakarya Dalam Jahitan
            </h1>
            <h5 class="mt-3" style="font-family: 'Inter';">
                Rasakan keindahan jahitan yang sempurna,<br class="d-none d-md-block">
                Bordir komputer menghidupkan desain dengan presisi yang menakjubkan.
            </h5>
            <a href="/pesan" class="btn border border-black rounded-0 mt-3" style="background-color: #D0BEA4; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">Pesan Sekarang</a>
        </div>
    </section>

    <section class="min-vh-100 d-flex flex-column justify-content-center p-5" style="background-color: #EAE1D0;">
        <h1>Kenapa harus Kami ?</h1>
        <p>Kualitas jahitan yang unggul</p>
        <p>Desain kustom yang fleksibel</p>
        <p>Proses pemesanan yang mudah</p>
        <p>Teknologi modern</p>
    </section>

    <section class="min-vh-100 p-5" style="background-color: #F9F8F5">
        <style>
            .product-card {
                aspect-ratio: 1/1;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                max-height: 400px;
                min-height: 150px;
                width: 100%;
                overflow: hidden;
            }

            @media (max-width: 768px) {
                .product-card {
                    max-height: 300px;
                }
            }

            @media (max-width: 576px) {
                .product-card {
                    max-height: 250px;
                }
            }

            .product-img {
                object-position: center;
                width: 100%;
                height: auto;
                max-width: 100%;
            }
        </style>
        <h1 class="m-auto text-center">Media Bordir yang Kami Tawarkan</h1>
        <div class="container text-center">
            <div class="row my-4">
                <div class="col">
                    <div class="product-card">
                        <img src="/assets/img/produk-tas-bordir.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    <p>Bordir tas</p>
                </div>
                <div class="col">
                    <div class="product-card">
                        <img src="/assets/img/produk-bordir-logo.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    Bordir logo
                </div>
            </div>
            <div class="row my-4">
                <div class="col">
                    <div class="product-card">
                        <img src="/assets/img/produk-bordir-baju.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    <p>Bordir baju</p>
                </div>
                <div class="col">
                    <div class="product-card">
                        <img src="/assets/img/produk-bordir-nama.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    Bordir nama
                </div>
            </div>
            <div class="row my-4">
                <div class="col">
                    <div class="product-card">
                        <img src="/assets/img/produk-bordir-baju.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    <p>Bordir baju</p>
                </div>
                <div class="col">
                    <div class="product-card">
                        <img src="/assets/img/produk-bordir-logo.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    Bordir logo
                </div>
            </div>
        </div>
    </section>

    <section class="min-vh-100 p-5" style="background-color: #F9F8F5;">
        <h1 class="container text-center">Apa kata mereka dengan Raza Bordir?</h1>
        <div class="mt-5">
            <div>
                <p>Wah bagus sekali!</p>
            </div>
            <div>
                <p>Sungguh hasil bordir yang sangat mengesankan!</p>
            </div>
            <div>
                <p>Hasilnya rapih dan bagus!</p>
            </div>
        </div>
    </section>
</main>
