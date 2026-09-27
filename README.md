Velocity Child Theme Paket Toko Online Toko 29
=================
[toko29.velocitydeveloper.com](https://toko29.velocitydeveloper.com/)

Child Theme for the Velocity System WordPress theme.

### Required
Theme Velocity versi 2.7.0 keatas, [Download](https://github.com/VelocityDeveloper/velocity/releases)

### Required Plugins
**VD Store**, [Download](https://github.com/Velocity-Developer/vd-store/releases) — produk `store_product`,
kategori `store_product_cat`, merek `brand`. Sejak 1.1.0 tema tidak lagi memakai plugin Velocity Toko
maupun Kirki.

Integrasi VD Store ada di `inc/vd-store.php`, `css/vd-store.css`, dan template override di folder
`vd-store/` (arsip, kategori, merek, detail produk). Pencarian di bar atas mencari produk.

### Beranda
Beranda = `index.php` (Settings > Reading: tulisan terbaru): kotak abu, header logo (Site Identity) + kotak cari +
tombol profil & keranjang, menu warna tema, slider, bar judul, 12 produk 3 kolom (harga di atas judul, Detail +
keranjang) + "Produk lainnya". Sidebar kanan.

### Widget
Shortcode untuk widget Teks (susunan demo, dibaca installer lewat `velocity_tema_widget_sidebar()` dan
`velocity_tema_widget_footer()`):

- Sidebar (kanan): `[toko29_cari_produk]`, `[toko29_kategori]`, `[toko29_produk_terbaru jumlah="5"]`, `[toko29_bank]`, `[toko29_kontak]`
- Footer gelap 4 kolom: `[toko29_testimoni]` (ulasan produk VD Store), `[toko29_ekspedisi]`, `[toko29_info_terbaru]`, `[toko29_sosmed youtube=""]` (Facebook, Twitter, Instagram)
- Lainnya: `[toko29_best_seller jumlah="5"]`

### Halaman
Halaman **Konfirmasi Pembayaran** = `[store_tracking]` (input nomor pesanan VD Store: tagihan, rekening, unggah bukti
transfer). Override tipis `vd-store/pages/tracking.php` membuat pencarian tetap di halaman tempat form dipasang.
Template **Velocity Toko Pricelist** (`page-pricelist.php`). Katalog & Profil Saya VD Store selalu tanpa sidebar.

### Customizer
Appearance > Customize > **Velocity Toko 29**: Warna (utama, sekunder), Popup Sambutan (aktif/nonaktif +
isi HTML, tampil sekali sehari per pengunjung), Font (judul & teks), Slider Home (5 slot gambar).
Logo & gambar header: Site Identity / Header Image. Latar website: Background tema induk. Warna teks/link:
Theme Colors tema induk.

### Usage
Simply download the zip and upload the zip (velocity-toko29.zip) under your WordPress dashboard at Appearance > Themes. Or extract and upload via FTP at wp-content/themes/.
