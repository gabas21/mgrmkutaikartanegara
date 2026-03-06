# Analisa Struktur Folder & Checklist Persiapan Go-Online (Deployment)

Berdasarkan pengecekan struktur direktori pada project Laravel 12 Anda, secara umum strukturnya sudah sangat baik dan sesuai pakem Laravel modern. Namun, ada beberapa hal yang *menumpuk* dan perlu dirapikan sebelum web ini dirilis ke publik.

## 📁 1. Analisa Struktur & Hal yang Perlu Diperbaiki

### A. Penumpukan Aset di Folder `public/` (Prioritas: Medium)
Saat ini banyak file gambar (seperti `Alfianoor.webp`, `direktur.svg`, `kapal.webp`, `logofix.svg`, dsb) yang diletakkan langsung di dalam *root* direktori `public/`.
- **Masalah:** Semakin lama project berjalan, folder `public/` akan sangat berantakan dan sulit dikelola. Ini juga berpotensi tercampur dengan file inti seperti `index.php` atau `robots.txt`.
- **Perbaikan:** 
  1. Buat folder baru: `public/images/` atau `public/assets/images/`.
  2. Pindahkan semua file gambar ke dalam folder tersebut.
  3. Ubah path pemanggilan gambar di file Blade Anda, dari `asset('nama-gambar.webp')` menjadi `asset('images/nama-gambar.webp')`.

### B. Route Logic Tanpa Controller (Prioritas: Rendah - Menengah)
Di folder `app/Http/Controllers/` saat ini kosong (hanya ada bawaan `Controller.php`), dan seluruh *routing* langsung memanggil *view* memalui *Closure* di `routes/web.php` (contoh: `Route::get('/', function () { return view('welcome'); });`).
- **Masalah:** Untuk website Company Profile statis, ini tidak apa-apa. Namun jika nanti ada form interaktif, CMS, atau login, file `web.php` akan membengkak. Selain itu, Laravel tidak bisa meng-*cache* route berbasis *Closure* secepat route berbasis Controller (meski di Laravel terbaru sudah ada optimasi, Controller tetap jadi *best practice*).
- **Perbaikan:** Buat `PageController.php` (misal: `php artisan make:controller PageController`) dan kelompokkan *return view* ke dalam controller tersebut (seperti `PageController@index`).

---

## 🚀 2. Checklist Go-Online / Deployment

Untuk menaikkan website ini ke hosting/VPS (Go Online), Anda WAJIB melakukan checklist optimasi & keamanan berikut:

### 🛡️ Keamanan & Environment
- [ ] Buka file `.env` di server hosting, ubah:
  - `APP_ENV=production`
  - `APP_DEBUG=false` (Sangat krusial untuk mencegah kebocoran _source code_ jika ada error).
  - `APP_URL=https://mgrmkutaikartanegara.com` (Ubah sesuai dengan domain asli).

### ⚡ Optimasi Performa (Laravel Caching)
Jalankan beberapa command artisan berikut di terminal server/hosting untuk memangkas *load time* website:
- [ ] `php artisan config:cache` (Mengunggah config)
- [ ] `php artisan route:cache` (Mengurutkan dan cache routes)
- [ ] `php artisan view:cache` (Meng-*compile* file-file `.blade.php` agar lebih ringan)
- [ ] `php artisan event:cache` (Jika ada implementasi event/listener)

### 📦 Build Aset Frontend
Karena Anda menggunakan Tailwind dan Vite (TALL stack Laravel), direktori public membutuhkan file *build*.
- [ ] Pastikan Anda telah menjalankan `npm run build` di lokal, dan folder `public/build/` ikut terunggah (di-commit/push) ke server. Server tidak perlu jalankan `npm run dev`.

### 🗄️ Database & Storage
- [ ] Jalankan migrasi di server: `php artisan migrate --force` (jangan lupa flag `--force` karena mode _production_ akan menolak eksekusi database tanpa konfirmasi).
- [ ] Jika Anda menggunakan fitur penyimpanan file gambar (upload melalui web), pastikan untuk membuat symbolic link folder storage dengan perintah: `php artisan storage:link`.

### 🔒 Web Server (Apache/Nginx)
- [ ] Pastikan *Document Root* pada Control Panel Hosting/Web Server Anda diarahkan ke folder `/public`, **bukan** ke folder *root* project.
- [ ] Instal *SSL Certificate* (biasanya gratis pakai Let's Encrypt) agar URL menjadi `https://` dan website tidak dianggap "Not Secure" oleh Google Chrome.

---
**Rekomendasi Utama:** Mulailah dengan merapikan folder `public/` dengan memindahkan semua gambar ke `public/images/`.
