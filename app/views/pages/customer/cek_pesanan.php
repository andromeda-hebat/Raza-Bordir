<?php require_once __DIR__ . '/../../components/general/navbar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/pembayaran_modal.php' ?>





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
        <div id="customer-current-order">

        </div>
        <div id="search-result-container">
            
        </div>
    </section>
</main>





<?php ////////////////////// ?>
<?php //--BOOTSTRAP MODAL--/ ?>
<?php ////////////////////// ?>

<?php PembayaranModal() ?>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(() => {
        const customerOrder = localStorage.getItem('customerOrder');
        if (customerOrder != null) {
            $.ajax({
                url: '/cek-pesanan-process',
                type: 'GET',
                data: {
                    data: JSON.parse(customerOrder).orderId,
                    search_type: 'order-id'
                },
                success: function (response) {
                    const parsedResponse = JSON.parse(response)
                    
                    parsedResponse.data.forEach((value, index) => {   
                        $('#customer-current-order').append(`
                            <div class="card p-3 d-flex justify-content-end my-3">
                                <div>
                                    <p class="fw-bold">ID Pemesanan: ${value.order_id}</p>
                                    <p>Barang yang dipesan: ${value.product_name}</p>
                                    <p>Tanggal pesan: ${value.order_date}</p>
                                </div>
                                <div>
                                    <img src="/static/img/${value.product_image}" alt="Product image" style="max-width: 100px; max-height: 100px">
                                </div>
                                <div>
                                    <p>Status: <span>Disetujui</span></p>
                                    <p>Nominal yang harus dibayar <span class="fw-bold">Rp 78.000</span></p>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Bayar</button>
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
