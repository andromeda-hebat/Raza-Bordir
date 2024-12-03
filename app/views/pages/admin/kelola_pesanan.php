<div class="d-flex">
    <?php include __DIR__ . '/../../components/admin/sidebar.php' ?>
    
    <main class="w-100">
        <h1>Kelola pesanan</h1>

        <div class="row">
            <div class="col">Semua</div>
            <div class="col">Belum dibayar</div>
            <div class="col">Sudah dibayar</div>
            <div class="col">Proses dibayar</div>
            <div class="col">Selesai dibayar</div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Desain</th>
                    <th>Media</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ani</td>
                    <td>099999999</td>
                    <td>a.png</td>
                    <td>Kain</td>
                    <td>100</td>
                    <td>Rp 5.000/pcs</td>
                    <td>
                        <button>Rincian</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</div>