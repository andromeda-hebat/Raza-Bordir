<nav class=" navbar navbar-expand-lg d-flex align-items-between py-1 px-2 fixed-top" style="background-color: #EAE1D0CC">

    <div class="container-fluid">
        <div class="d-md-none">
            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-controls="mobileNav"
                style="background-color: inherit; border: none;">
                ☰
            </button>
        </div>

        <div class="position-absolute start-50 translate-middle-x">
            <p class="p-0 m-0 fs-2 text-center" style="font-family: 'Italianno', serif;">Raza Bordir</p>
        </div>

        <!-- Desktop Links -->
        <div class="collapse navbar-collapse d-none d-md-flex justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pesan">Pesan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sliding offcanvas for mobile -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileNavLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <ul class="list-unstyled p-4">
            <li><a href="/" class="nav-link my-2">Beranda</a></li>
            <li><a href="/produk" class="nav-link my-2">Produk</a></li>
            <li><a href="/pesan" class="nav-link my-2">Pesan</a></li>
            <li><a href="#" class="nav-link my-2">Promo</a></li>
            <li><a href="#" class="nav-link my-2">Tentang</a></li>
        </ul>
        <div class="p-4 w-100 position-absolute bottom-0" style="background-color: #EAE1D0; height: 100px">
            <a href="#" class="text-decoration-none text-black">Hubungi Kami</a>
        </div>
    </div>
</div>
