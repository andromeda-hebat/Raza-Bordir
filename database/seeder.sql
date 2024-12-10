USE [db_raza_bordir]
INSERT [dbo].[Admin] ([id_admin], [username], [password], [no_telepon]) VALUES (N'A001', N'admin1', N'pass123', N'081234567890')

INSERT [dbo].[Pemesanan] ([id_pemesanan], [id_admin], [nama_lengkap], [nomor_hp], [alamat], [desain], [jenis_media], [tanggal_order], [tanggal_selesai], [total_harga], [catatan]) VALUES (N'P001', N'A001', N'Afifah Khoirunnisa', N'081234567890', N'Jl. Anggrek No. 10', N'Logo Perusahaan', N'Baju', CAST(N'2024-12-03' AS Date), CAST(N'2024-12-10' AS Date), N'500000', N'Ukuran XL')

INSERT [dbo].[Feedback] ([id_feedback], [id_pemesanan], [pesan], [tanggal_feedback]) VALUES (N'F001', N'P001', N'Hasilnya sangat memuaskan, terima kasih!', CAST(N'2024-12-03' AS Date))

INSERT [dbo].[Katalog] ([id_produk], [nama_produk], [gambar_produk], [deskripsi]) VALUES (N'K001', N'Kaos Custom', N'kaos_custom.jpg', N'Kaos dengan desain bordir sesuai permintaan.')
INSERT [dbo].[Katalog] ([id_produk], [nama_produk], [gambar_produk], [deskripsi]) VALUES (N'K002', N'Bendera Custom', N'bendera_custom.jpg', N'Bendera dengan logo dan desain unik untuk berbagai acara.')
INSERT [dbo].[Katalog] ([id_produk], [nama_produk], [gambar_produk], [deskripsi]) VALUES (N'K003', N'Jilbab Bordir', N'jilbab_bordir.jpg', N'Jilbab dengan tambahan bordir elegan di tepi kain.')
INSERT [dbo].[Katalog] ([id_produk], [nama_produk], [gambar_produk], [deskripsi]) VALUES (N'K004', N'Taplak Meja', N'taplak_meja.jpg', N'Taplak meja bordir dengan motif bunga cantik.')
INSERT [dbo].[Katalog] ([id_produk], [nama_produk], [gambar_produk], [deskripsi]) VALUES (N'K005', N'Kain Motif', N'kain_motif.jpg', N'Kain dengan motif bordir sesuai desain yang diinginkan.')

