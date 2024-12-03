<div class="d-flex flex-column align-items-center border-end justify-content-center"
    style="background-color: #F9F8F5; width: 250px; height: 100vh; padding-top: 20px;">

    <!-- Tautan Navigasi -->
    <nav class="nav w-100 d-flex justify-content-center text-start">
        <a href="/dashboard" class="sidebar-nav nav-link w-100 ps-5 text-black">
            Dashboard
        </a>
        <a href="/kelola-pesanan" class="sidebar-nav nav-link w-100 ps-5 text-black">
            Kelola Pesanan
        </a>
        <a href="/kelola-katalog" class="sidebar-nav nav-link w-100 ps-5 text-black">
            Kelola Katalog
        </a>
        <a href="/ulasan" class="sidebar-nav nav-link w-100 ps-5 text-black">
            Ulasan
        </a>
    </nav>

    <!-- Tombol Keluar -->
    <div class="mt-auto w-100 mb-4 d-flex justify-content-center" style="">
        <button type="button" class="sidebar-nav nav-link w-100 ps-5 p-3 d-flex text-start" data-bs-toggle="modal"
            data-bs-target="#modalConfirmationLogout">
            <svg class="me-2 text-black" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.36828 6.65552C6.91888 7.45808 5.77602 8.71798 5.11811 10.2385C4.46021 11.759 4.32429 13.4546 4.73158 15.0605C5.13886 16.6665 6.06643 18.0923 7.36947 19.1155C8.67251 20.1387 10.2777 20.7017 11.9344 20.7165C13.5911 20.7313 15.206 20.1971 16.5272 19.1974C17.8483 18.1976 18.8012 16.7886 19.2371 15.1902C19.6731 13.5918 19.5675 11.8941 18.9369 10.362C18.3062 8.82999 17.1861 7.54987 15.7513 6.72152L16.5013 5.42252C18.2228 6.4168 19.5666 7.95307 20.323 9.79154C21.0795 11.63 21.2059 13.6672 20.6826 15.5851C20.1593 17.5029 19.0157 19.1936 17.4304 20.3931C15.8451 21.5926 13.9072 22.2335 11.9193 22.2157C9.93136 22.1978 8.00528 21.5223 6.44172 20.2945C4.87816 19.0668 3.7651 17.3559 3.2763 15.4289C2.78749 13.5019 2.95046 11.4674 3.73974 9.64277C4.52903 7.81817 5.90022 6.30625 7.63928 5.34302L8.36828 6.65552Z"
                    fill="#E4EEFF" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 12V1.5H12.75V12H11.25Z" fill="#E4EEFF" />
            </svg>
            Keluar
        </button>
    </div>
</div>




<!-- Bootstrap Modal -->
<?php include __DIR__ . '/../general/ask_logout_modal.php' ?>