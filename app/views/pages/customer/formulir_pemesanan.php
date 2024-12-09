<?php include __DIR__ . '/../../components/customer/navbar.php' ?>
<main class="mt-5 p-3">
    <section id="media-selection" class="min-vh-100">
        <h2>Isi formulir di bawah ini untuk melakukan pemesanan</h2>

        <label for="input-name">Nama</label><br>
        <input type="text" id="input-name" name="name" placeholder="Masukkan nama anda"><br>
        <label for="input-phone">Nomor</label><br>
        <input type="tel" id="input-phone" name="phone" placeholder="Masukkan nomor telepon anda"><br>
        <label for="input-design">Desain</label><br>
        <input type="file" name="design" id="input-design" placeholder="Upload file"><br>
        <label for="input-amount">Jumlah</label><br>
        <input type="number" name="amount" id="input-amount" placeholder="Masukkan jumlah bordir yang dipesan"><br>
        <label for="input-media">Jenis Media</label><br>
        <select name="media" id="input-media">
            <option value="kain">Kain</option>
            <option value="hijab">Hijab</option>
            <option value="logo">Logo</option>
            <option value="tas">Tas</option>
        </select><br>
        <label for="input-order-start">Tangaal pemesanan</label><br>
        <input type="date" name="order-start" id="input-order-start" disabled><br>
        <label for="input-order-finish">Tangaal selesai</label><br>
        <input type="date" name="order-finish" id="input-order-finish" disabled><br>
        <label for="input-notes">Catatan</label><br>
        <textarea name="notes" id="input-notes">

        </textarea>
    </section>
</main>