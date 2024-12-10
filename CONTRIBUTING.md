# Panduan Kontribusi Proyek

Kami dengan senang hati menyambut keinginan Anda untuk berkontribusi pada proyek ini. Segala bentuk kontribusi, baik berupa laporan bug, saran fitur, maupun pengajuan kode, akan kami apresiasi dan pertimbangkan demi pengembangan proyek yang lebih baik.

Penulisan panduan ini terbagi ke dalam dua jenis, yaitu panduan untuk kontributor internal dan kontributor eksternal. 
- [Panduan kontributor internal](#panduan-kontributor-internal)
- [Panduan kontributor eksternal](#panduan-kontributor-eksternal)

---

## Panduan kontributor internal

Kontributor internal adalah pihak yang dengan sengaja diundang untuk menggarap proyek ini. Berikut adalah beberapa panduan yang perlu dipatuhi oleh para kontributor internal:

1. Kloning repositori ini ke komputer Anda
2. Ganti branch sesuai dengan nama Anda.

    Saat ini sudah terdapat 4 branch dengan 3 role berbeda.
    ```
    ui/dewita   # berhubungan dengan tampilan antarmuka pengguna dan aset-aset yang akan dibutuhkan di dalam website
    db/afifah   # berhubungan dengan skema basis data yang digunakan
    dev/farrel  # implementasi ke website (frontend dan backend)
    dev/stevan  # implementasi ke website (frontend)
    ```
    
    Jika tidak ditemukan branch yang sesuai, maka Anda bisa membuat branch baru dengan menggunakan perintah berikut:
    ```bash
    git checkout -b <nama-role>/<nama-anda>
    ```

3. Buat commit perubahan dengan pesan yang jelas (`git commit -m "menambahkan fitur notifikasi pada pengguna mahasiswa"`).
4. Buat pull request ke branch utama (`main`). Buat penjelasan singkat mengenai perubahan yang telah dilakukan.

## Panduan kontributor eksternal

Kontributor eksternal adalah pihak di luar kontributor awal yang menginisasi proyek ini. Berikut adalah beberapa panduan yang perlu dipatuhi oleh para kontributor eksternal:
1. Fork repository ini ke akun Anda.
2. Buat branch baru untuk perubahan Anda (`git checkout -b <nama-branch>`).
3. Lakukan perubahan sesuai kebutuhan dan pastikan kode Anda sudah sesuai standar proyek.
4. Commit perubahan Anda dengan pesan yang jelas (`git commit -m "memperbaiki konfigurasi database mysql"`).
5. Buat pull request ke branch utama kami, disertai penjelasan singkat mengenai perubahan yang Anda lakukan.

Jika perubahan yang anda lakukan berdampak positif terhadap proyek, maka kami akan mempertimbangkan untuk proses *merge* ke branch main.

---
---
