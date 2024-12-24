<?php require_once __DIR__ . '/../../components/general/navbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<?= Navbar() ?>
<main class="mt-5 p-3 pb-5">
    <section class="container min-vh-100">
        <h2>Cek Pesanan Anda</h2>
        <br>
        <p>Masukkan kode pesanan</p>
        <input type="text" name="order-id" id="input-order-id" class="form-control" placeholder="Kode pesanan anda">
        <p class="text-center my-4">atau</p>
        <p>Masukkan nama anda</p>
        <input type="text" name="order-id" id="input-username" class="form-control" placeholder="Nama anda">
        <button class="mt-3" id="btn-search">Cari</button>
        <hr>
        <div id="search-result-container">
            
        </div>
    </section>
</main>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(() => {
        $('#btn-search').on('click', function () {
            let searchType = '';
            if ($('#input-order-id').val().trim() !== "") {
                searchType = 'order-id';
            } else if ($('#input-username').val().trim() != "") {
                searchType = 'username';
            }

            if (searchType != '') {
                $.ajax({
                    url: '/cek-pesanan-process',
                    type: 'GET',
                    data: {
                        data: (searchType == 'order-id') ? $('#input-order-id').val() : $('#input-username').val(),
                        search_type: searchType
                    },
                    success: function (response) {
                        const parsedResponse = JSON.parse(response)

                        $('#search-result-container').empty();
                        
                        parsedResponse.data.forEach((value, index) => {   
                            $('#search-result-container').append(`
                                <div class="card p-3 d-flex justify-content-end my-3">
                                    <div>
                                        <p class="fw-bold">ID Pemesanan: ${value.order_id}</p>
                                        <p>Barang yang dipesan: ${value.product_name}</p>
                                        <p>Tanggal pesan: ${value.order_date}</p>
                                    </div>
                                    <div>
                                        <img src="/static/img/${value.product_image}" alt="Product image" style="max-width: 100px; max-height: 100px">
                                    </div>
                                </div>
                            `);
                        });
                    },
                    error: function (xhr, status, error) {
                        alert('error')
                    }
                });
            }
        });
    });
</script>
