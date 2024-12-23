<?php require __DIR__ . '/../../components/general/navbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<?= Navbar() ?>
<main class="mt-5 p-3">
    <section class="min-vh-100">
        <h2>Petunjuk Pemesanan</h2>
        <ol>
            <li>Anda memilih produk yang tersedia di katalog kami</li>
            <li>Isi formulir pemesanan</li>
            <li>Kustomisasi desain bordir di website jika diperlukan</li>
            <li>Bayar pesanan sesuai dengan nominal yang tersedia pada struk</li>
            <li>Tunggu pesanan selesai dibuat</li>
            <li>Jika sudah selesai, maka pihak pelanggan akan diberitahu dan akan segera dikirim ke alamat tujuan</li>
        </ol>
    
        <div class="card p-3 d-flex flex-row border-info text-primary" style="background-color: rgba(116, 182, 222, 0.23) !important">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-6 m-1" style="width: 50px;">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>
            <div>
                <p class="fw-bold my-0">Anda mengalami kendala?</p>
                <p class="fw-normal my-0">Hubungi kami pada kontak yang tertera di website untuk informasi lebih lanjut</p>
            </div>
        </div>
    </section>
</main>