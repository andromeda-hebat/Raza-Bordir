<?php require_once __DIR__ . '/../../components/general/navbar.php' ?>
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
            </div>

            <div class="image-preview" id="image-preview">
                <h4>Pratinjau gambar:</h4>
                <img id="preview-img" src="" alt="Image Preview">
            </div>
        </div>

        <br><br><br>

        <textarea name="notes_request" id="notes-request"
            placeholder="Berikan deskripsi rancangan desain yang akan dibuat" class="w-100"
            style="resize: none;"></textarea>

        <div class="position-absolute bottom-0 end-0">
            <button class="back-btn button">Kembali</button>
            <button class="next-btn button">Lanjut</button>
        </div>
    </section>


    <section id="full-form-input" class="min-vh-100 position-relative">
        <h2 class="mt-3">Lengkapi formulir berikut</h2>

        <dic id="main-form">
            <label for="input-name">Nama</label><br>
            <input type="text" name="name" id="input-name" class="w-100"><br>
            <label for="input-phone">Nomor HP</label><br>
            <input type="tel" name="phone" id="input-phone" class="w-100"><br>
            <label for="input-amount">Jumlah</label><br>
            <input type="number" name="amount" id="input-amount" class="w-100"><br>
            <label for="input-price">Perkiraan harga</label>
            <input type="text" name="price" id="input-price" class="w-100" readonly value="Rp 30.000">

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
                <button type="submit" id="submit-form-btn" class="send-btn button">Kirim</button>
            </div>
        </dic>
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
        let selectedMedia = null;
        $('.product-option').on('click', function () {
            if (selectedMedia != null) {
                $(selectedMedia).css('border', 'none');
            }

            selectedMedia = this;
            $('#selected-item').text($(selectedMedia).data('name'));
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



        // Design input section
        $('#drop-area').on('click', function () {
            const fileInput = $('<input type="file" accept="image/*" name="design" id="input-design" style="display:none;">');

            fileInput.trigger('click');

            $('#drop-area').append(fileInput);

            fileInput.on('change', function () {
                const files = fileInput[0].files;
                if (files.length > 0) {
                    handleFile(files[0]);
                }
            });
            $
        });

        $('#drop-area').on('dragover', function (event) {
            event.preventDefault();
            $('#drop-area').css('background-color', '#f0f0f0');
        });

        $('#drop-area').on('dragleave', function () {
            $('#drop-area').css('background-color', '');
        });

        $('#drop-area').on('drop', function (event) {
            event.preventDefault();
            const files = event.originalEvent.dataTransfer.files;
            if (files.length > 0) {
                handleFile(files[0]);
            }
        });

        function handleFile(file) {
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    $('#preview-img').attr('src', event.target.result);
                    $('#image-preview').show();
                };
                reader.readAsDataURL(file);
            } else {
                alert('Please select a valid image file');
            }
        }



        // Full form section
        $('#submit-form-btn').on('click', function () {
            const formData = new FormData();
            formData.append('media', $(selectedMedia).data('name'));
            formData.append('design', $('#input-design')[0].files[0]);
            formData.append('note', $('#notes-request').val());
            formData.append('name', $('#input-name').val());
            formData.append('phone', $('#input-phone').val());
            formData.append('amount', $('#input-amount').val());
            formData.append('price', $('#input-price').val());

            $.ajax({
                url: '/pesan',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
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