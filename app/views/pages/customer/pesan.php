<?php require __DIR__ . '/../../components/customer/navbar.php' ?>





<?= Navbar() ?>
<main class="mt-5 p-3">
    <section id="media-selection" class="min-vh-100">
        <div class="card flex-row align-items-center border border-info text-primary"
            style="background-color: rgba(116, 182, 222, 0.23) !important">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 m-3" style="width: 20px;">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>
            <p class="my-0">Lihat panduan pemesanan pada halaman berikut: <a href="/panduan-pemesanan"
                    class="fw-bold">petunjuk pemesanan</a></p>
        </div>

        <h2 class="mt-3">Pilih media yang ingin anda bordir</h2>

        <div class="container">
            <style>
                .product-card {
                    aspect-ratio: 1/1;
                    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                    max-height: 400px;
                    min-height: 150px;
                    width: 100%;
                    overflow: hidden;
                }

                .product-card:hover {
                    cursor: pointer;
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
            <div class="row">
                <a href="/detail-produk" class="col text-decoration-none text-black">
                    <div class="product-card">
                        <img src="/assets/img/produk-bordir-kain.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    <p>Kain</p>
                </a>
                <a href="/detail-produk" class="col text-decoration-none text-black">
                    <div class="product-card">
                        <img src="/assets/img/produk-bordir-tas-2.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    <p>Tas</p>
                </a>
            </div>
            <div class="row">
                <a href="/detail-produk" class="col text-decoration-none text-black">
                    <div class="product-card">
                        <img src="/assets/img/produk-bordir-baju.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    <p>Baju</p>
                </a>
            </div>
            <div class="row">
                <a href="/detail-produk" class="col text-decoration-none text-black">
                    <div class="product-card">
                        <img src="/assets/img/produk-bordir-celana.jpg" alt="Produk bordir" class="product-img">
                    </div>
                    <p>Celana</p>
                </a>
            </div>
        </div>
    </section>
</main>