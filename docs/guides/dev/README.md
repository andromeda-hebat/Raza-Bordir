# Dokumentasi Bagi Developer 

Halaman ini menyajikan dokumentasi bagi developer. Jika anda mencari topik spesifik berkaitan dengan hal teknis proyek, anda bisa melihat submenu berikut:
- [Basis data](database.md)
- [UI/UX](ui-ux.md)
- [Frontend](frontend.md)
- [Backend](backend.md)

---

## Cara Pemasangan
Aplikasi ini dapat diinstal pada server lokal maupun server remote.

### Kebutuhan Server
Spesifikasi yang kami tulis berikut adalah sesuai dengan apa yang kami gunakan selama proses pengembangan. Penggunaan versi di bawah atau di atas dari tulisan yang tertera masih memungkinkan program dapat berjalan. Namun, kami tidak menjamin bahwa aplikasi dapat berjalan dengan baik.

| Jenis | Nama | Versi |
| -- | -- | -- |
| Bahasa pemrograman | PHP | 8.3 |
| Package manager | Composer | 2.4.1 |
| Web Server | Apache HTTPD | 2.4.54 |
| Framework | Bootstrap | 5.3.3 |
| Basis data | Microsoft SQL Server | 2022 |
>  ⚠️ Pastikan PHP anda telah terpasang driver untuk Microsoft SQL Server! Driver Microsoft SQL Server bisa didapatkan pada website official Microsoft berikut 👉🏻 https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server?view=sql-server-ver16

### Langkah Instalasi

Langkah-langkah untuk menjalankan proyek di lokal:
1. Kloning repositori

    Buka direktori `xampp/htdocs` atau `laragon/www`. Lalu buka terminal pada direktori tersebut. Kemudian ketikkan perintah di bawah:
    ```bash
    git clone https://github.com/andromeda-hebat/Raza-Bordir.git
    ```
2. Konfigurasi proyek

    - Ubah nama file `.example.env` menjadi `.env`. 
    - Sesuaikan konfigurasi database host, nama, dan password sesuai dengan database yang digunakan.
    - Contoh isi dari file `.env`:
    ```
    DB_HOST=localhost
    DB_NAME=db_raza_bordir
    DB_USER=sa
    DB_PASSWORD=my_sEcur3-p4$sW0rd
    ```

3. Nyalakan web server

    Anda bisa menggunakan web server seperti Apache HTTPD atau NGINX untuk menjalankan program. Web server bisa ditemui pada XAMPP atau Laragon.
4. Buka website di browser

    > Jika anda menggunakan Laragon, maka anda bisa buka URL spesial berikut pada browser anda

    Buka pada URL berikut:
    ```bash
    http://raza-bordir.test
    ```

    Pastikan tampil halaman pertama berikut:
    ![Homepage example](../../assets/homepage-example.png)

---

## Struktur Proyek

```bash
Raza-Bordir
├───app
│   ├───controllers     # Perantara antara interaksi dengan data dan tampilan pengguna
│   ├───core            # Basis class utama aplikasi
│   ├───models          # Struktur data dan Business logic aplikasi
│   ├───routes          # Manajemen rute internal untuk akses sumber daya website
│   └───views           # Menampilkan halaman web ke pengguna
│       ├───components  # Bagian kecil dari sebuah halaman yang sering digunakan berulang kali
│       │   ├───admin
│       │   ├───bs_modal
│       │   └───customer
│       ├───pages
│       │   ├───admin
│       │   ├───customer
│       │   └───general
│       └───templates   # Berupa bagian header dan footer halaman web
├───docs                # Dokumentasi proyek
│   ├───diagram
│   └───guides
│       ├───dev
│       └───general
├───public              # Akses point pertama oleh web server
│   └───assets
│       ├───img
│       └───js
├────.env               # Konfigurasi environment
├────.gitignore
├────composer.json      # Manajemen dependensi
├────composer.lock
└────README.md
```