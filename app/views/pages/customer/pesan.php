<?php require_once __DIR__ . '/../../components/customer/navbar.php' ?>
<?php require_once __DIR__ . '/../../components/customer/product_card.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<?= Navbar() ?>
<main class="mt-5 p-3 pb-5">
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
                    box-sizing: border-box;
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
                <?= ProductCardV2('Kain', '/assets/img/produk-bordir-kain.jpg') ?>
                <?= ProductCardV2('Tas', '/assets/img/produk-bordir-tas-2.jpg') ?>
            </div>
            <div class="row">
                <?= ProductCardV2('Baju', '/assets/img/produk-bordir-baju.jpg') ?>
                <?= ProductCardV2('Celana', '/assets/img/produk-bordir-celana.jpg') ?>
            </div>
            <div class="row">
                <?= ProductCardV2('Nama', '/assets/img/produk-bordir-nama.jpg') ?>
                <?= ProductCardV2('Jilbab', '/assets/img/produk-bordir-jilbab.jpg') ?>
            </div>
            <div class="row">
                <?= ProductCardV2('Pandel', '/assets/img/produk-bordir-pandel.jpg') ?>
                <?= ProductCardV2('Pataka', '/assets/img/produk-bordir-bendera-pataka.jpg') ?>
            </div>
        </div>

        <hr>

        <div class="d-flex justify-content-between">
            <p>Barang yang dipilih: <span id="selected-item"></span></p>
            <button class="next-btn button">Lanjut</button>
        </div>
    </section>

    <section id="design-input" class="min-vh-100 position-relative">
        <h2 class="mt-3">Sertakan gambar yang ingin anda bordir</h2>
        <div class="card p-3 d-flex flex-row border-info text-primary"
            style="background-color: rgba(116, 182, 222, 0.23) !important">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 m-1" style="width: 50px;">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>
            <div>
                <p class="my-0">Lewati proses ini jika anda tidak ingin memberikan referensi desain</p>
            </div>
        </div>


        <div class="container mt-5">
            <style>
                .drop-area {
                    width: 350px;
                    height: 350px;
                    border: 3px dashed #007bff;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    cursor: pointer;
                    background-color: #f7f7f7;
                    font-size: 20px;
                    color: #007bff;
                }

                .drop-area.dragover {
                    background-color: #e0e0e0;
                }

                .image-preview {
                    margin-top: 20px;
                    display: none;
                    text-align: center;
                }

                .image-preview img {
                    max-width: 100%;
                    max-height: 300px;
                }
            </style>

            <div class="drop-area" id="drop-area">
                <div>
                    <p>Drag & drop gambar anda atau klik ini untuk memilih gambar</p>
                </div>
                <input type="file" id="file-input" class="d-none" accept="image/*">
            </div>

            <div class="image-preview" id="image-preview">
                <h4>Pratinjau gambar:</h4>
                <img id="preview-img" src="" alt="Image Preview">
            </div>
        </div>

        <p class="text-center my-3">atau</p>

        <textarea name="notes_request" id="notes-request"
            placeholder="Berikan gambaran rancangan desain yang akan dibuat" style="w-100">

        </textarea>

        <div class="position-absolute bottom-0 end-0">
            <button class="back-btn button">Kembali</button>
            <button class="next-btn button">Lanjut</button>
        </div>
    </section>


    <section id="full-form-input" class="min-vh-100 position-relative">
        <h2 class="mt-3">Lengkapi formulir berikut</h2>

        <form id="full-form" action="/customer-order" method="post">
            <label for="input-name">Nama</label><br>
            <input type="text" name="name" id="input-name" class="w-100"><br>
            <label for="input-phone">Nomor HP</label><br>
            <input type="tel" name="phone" id="input-phone" class="w-100"><br>
            <label for="input-amount">Jumlah</label><br>
            <input type="number" name="amount" id="input-amount" class="w-100"><br>
            <label for="input-price">Perkiraan harga</label>
            <input type="text" name="price" id="input-price" class="w-100" disabled value="Rp 30.000">

            <div class="card flex-row align-items-center border border-info text-primary mt-5"
                style="background-color: rgba(116, 182, 222, 0.23) !important">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 m-3" style="width: 20px;">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                <p class="my-0">Pastikan seluruh data diri anda sudah benar!</p>
            </div>

            <div class="position-absolute bottom-0 end-0">
                <button class="back-btn button">Kembali</button>
                <button type="submit" class="send-btn button">Kirim</button>
            </div>
        </form>
    </section>
</main>





<?php ////////////////////// ?>
<?php ////////--JS--//////// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('section').hide();
        $('#media-selection').show();

        let currentProcess = 1;
        let activeOption = null;
        $('.product-option').on('click', function () {
            if (activeOption != null) {
                $(activeOption).css('border', 'none');
            }

            activeOption = this;
            $('#selected-item').text($(activeOption).data('name'));
            $(this).css('border', '5px solid lightblue');
        });

        $('.next-btn').on('click', function () {
            const currentSection = $(this).closest('section');
            const nextSection = currentSection.next('section');

            if (nextSection.length > 0) {
                currentSection.hide();
                nextSection.show();
            }
        });

        $('.back-btn').on('click', function () {
            const currentSection = $(this).closest('section');
            const prevSection = currentSection.prev('section');

            if (prevSection.length > 0) {
                currentSection.hide();
                prevSection.show();
            }
        });

        $('#full-form').on('click', function (e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                success: function (response) {
                    alert('Sukses!')
                },
                error: function (xhr, status, error) {
                    alert('Gagal!')
                }
            });
        });
    });
</script>

<script>
    const dropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('file-input');
    const imagePreview = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');

    // Show file input dialog when drop area is clicked
    dropArea.addEventListener('click', () => {
        fileInput.click();
    });

    // Handle drag and drop
    dropArea.addEventListener('dragover', (event) => {
        event.preventDefault();
        dropArea.style.backgroundColor = '#f0f0f0';
    });

    dropArea.addEventListener('dragleave', () => {
        dropArea.style.backgroundColor = '';
    });

    dropArea.addEventListener('drop', (event) => {
        event.preventDefault();
        const files = event.dataTransfer.files;
        handleFile(files[0]);
    });

    // Handle file input change
    fileInput.addEventListener('change', () => {
        const files = fileInput.files;
        if (files.length > 0) {
            handleFile(files[0]);
        }
    });

    // Handle the file and display preview
    function handleFile(file) {
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (event) {
                previewImg.src = event.target.result;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            alert('Please select a valid image file');
        }
    }
</script>