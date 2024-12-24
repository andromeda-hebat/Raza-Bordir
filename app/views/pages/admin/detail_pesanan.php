<?php require_once __DIR__ . '/../../components/admin/sidebar.php' ?>
<?php require_once __DIR__ . '/../../components/admin/topbar.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?= Sidebar() ?>
    <div class="w-100" style="margin-left: 35vh;">
        <?= Topbar() ?>
        <main class="px-5" style="min-height: 100vh; margin-top:10vh;">
            <h2>Detail Pesanan</h2>
            <div class="card rounded p-3" style="min-height: 80vh;">
                <?php if($data['order'] != false): ?>
                <div class="row">
                    <div class="col">
                        <label for="data-name">Nama</label>
                        <input type="text" name="name" id="data-name" value="<?= $data['order']['customer_name'] ?>" class="form-control" readonly>
                        <label for="data-phone">Nomor HP</label>
                        <input type="tel" name="phone" id="data-phone" value="<?= $data['order']['customer_phone'] ?>" class="form-control" readonly>
                        <label for="data-design">Desain</label>
                        <img src="/static/img-design/<?= $data['order']['design'] ?>" alt="Preview desain bordir" style="max-height: 300px; max-width: 300px;" clas="border">
                        <label for="data-amount">Jumlah</label>
                        <input type="number" name="amount" id="data-amount" value="<?= $data['order']['amount'] ?>" class="form-control" readonly>
                        <label for="data-total-price">Total harga</label>
                        <input type="text" name="total-price" id="data-price" value="<?= $data['order']['total_price'] ?>" class="form-control" readonly>
                        <label for="data-product">Jenis media</label>
                        <input type="text" name="product" id="data-product" value="<?= $data['order']['product_name'] ?>" class="form-control" readonly>
                        <label for="data-notes">Catatan</label>
                        <textarea name="notes" id="data-notes" class="form-control" style="resize: none;" disabled><?= $data['order']['notes'] ?></textarea>
                    </div>

                    <form class="col">
                        <label for="data-order-date">Tanggal pesan</label>
                        <input type="date" name="" id="" value="<?= $data['order']['order_date'] ?>" class="form-control" readonly>
                        <label for="data-preview-design">Kirim preview</label>
                        <div class="d-flex justify-content-center align-items-center" style="border: 1px solid #000; height: 400px; width: 600px;">
                            <button>Upload file</button>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" style="border: 1px solid #000; background: #EDE0CB;">Kirim</button>
                        </div>
                    </form>
                </div>
                <?php else: ?>
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <h2>Data tidak ditemukan!</h2>
                    </div>
                <?php endif; ?>
            </div>
        </main>
    </div>
</div>