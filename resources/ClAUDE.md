# CLAUDE.MD: PROTOKOL PENGEMBANGAN SENIOR & AI ORCHESTRATION

## 1. PERINTAH PROYEK (QUICK START)
* **Server**: `php artisan serve`
* **Frontend**: `npm run dev` (development) | `npm run build` (production)
* **Database**: `php artisan migrate` | `php artisan migrate:rollback`
* **Testing**: `php artisan test`
* **Optimasi**: `php artisan optimize:clear` | `php artisan config:cache`

---

## 2. STANDAR CODING & ARSITEKTUR
### Backend (Laravel)
* **Prinsip**: Gunakan *Fat Models, Skinny Controllers*. Logika bisnis yang kompleks harus dipindah ke `Services` atau `Actions`.
* **Database**: Selalu gunakan *Eager Loading* (`with()`) untuk mencegah masalah N+1 pada Eloquent.
* **Keamanan**: Wajib memvalidasi input menggunakan `FormRequest`. Jangan pernah menggunakan `$request->all()` secara langsung.

### Frontend & UX (Senior Persona)
* **Styling Utama**: Gunakan **Tailwind CSS**. Implementasikan tren desain modern seperti **Bento Grids**, **Floating UI**, dan *glassmorphism* jika sesuai.
* **Akurasi Figma**: Saat menerjemahkan desain (Figma ke Blade), pastikan presisi piksel yang tinggi namun tetap sangat responsif di berbagai perangkat.
* **JavaScript & Interaktivitas**: 
  * Utamakan **Alpine.js** untuk manipulasi DOM dan *state* ringan (sangat cocok dengan ekosistem Laravel/Livewire).
  * Implementasikan *Micro-interactions*: Berikan *feedback* visual pada setiap klik, *hover*, dan *loading state* (ubah tombol *submit* menjadi *spinner* saat diproses).
  * Gunakan *Skeleton Screens* alih-alih *spinner* layar penuh untuk meningkatkan *perceived performance*.
* **Elegansi**: Jika desain bawaan terasa kaku, inisiatiflah untuk merombaknya dengan transisi yang lebih *smooth* (`transition-all duration-300`).

---

## 3. ALUR KERJA STAFF ENGINEER (AI OPS)
### Manajemen Memori & Perencanaan
* **Koreksi Diri**: Jika pengguna mengoreksi kesalahan logika atau memberi arahan baru, segera perbarui file `CLAUDE.md` atau catat di `tasks/lessons.md` agar kesalahan tidak terulang.
* **Plan Mode**: Untuk fitur kompleks (seperti algoritma prediksi atau portal data besar), buat spesifikasi teknis dan alur kerja detail sebelum menulis satu baris kode pun.

### Eksplorasi & Perbaikan Otonom
* **Sub-agents**: Gunakan sub-agen secara paralel untuk mengeksplorasi *codebase* atau memetakan arsitektur saat berhadapan dengan komponen yang saling terkait.
* **Autonomous Bug Fixing (No Laziness)**: Jika diberikan log *error* (dari Laravel, terminal, atau *browser console*), cari akar masalahnya secara mandiri. Berikan solusi permanen yang elegan, bukan sekadar perbaikan sementara (*patch*).
* **Prinsip Simplicity First**: Buat setiap perubahan sesederhana mungkin dengan dampak seminimal mungkin (*Minimal Impact*) pada kode yang sudah berjalan.

---

## 4. PENINJAUAN KINERJA & KESIAPAN HOSTING (DEPLOYMENT)
### Audit Kinerja
* **Optimasi Aset**: Pastikan gambar dan komponen berat menggunakan teknik *lazy loading*.
* **Query Check**: Pastikan tidak ada *query database* yang redundan atau memakan memori berlebih sebelum fitur dinyatakan selesai.
* **UX Performance**: Jaga agar animasi JS tetap ringan dan tidak menjatuhkan *Frame Per Second* (FPS) pengguna.

### Kesiapan Server & Hosting
* **Path Safety**: Selalu gunakan fungsi *helper* Laravel (`asset()`, `route()`, `vite()`) untuk memanggil aset. Jangan pernah menggunakan *hardcoded* URL yang akan rusak di server produksi.
* **Environment Check**: Pastikan variabel di `.env` sudah dinamis dan aman. Cek potensi masalah *permission* folder (`storage`, `bootstrap/cache`).
* **Verifikasi Pra-Rilis**: Uji semua fitur utama dengan mentalitas seolah-olah aplikasi sedang diakses di server publik yang ketat.

---

## 5. DEFINISI SLASH COMMANDS (KUSTOM)

### `/techdebt`
Pindai kode saat ini untuk menemukan fungsi duplikat, komponen Blade yang bisa disederhanakan, atau logika *controller* yang terlalu gemuk, lalu tawarkan *refactoring*.

### `/deploy-check`
Jalankan simulasi validasi hosting. Periksa koneksi path aset, helper URL, dan keamanan *query* database untuk memastikan tidak ada *error 500* atau *404* saat diunggah ke *server* cPanel/VPS.

### `/ux-boost [nama_file/komponen]`
**Tugas AI:** Beralih menjadi **Senior UI/UX & Motion Engineer**.
1. **Analisis**: Evaluasi HTML/Tailwind pada file yang dituju. Cari elemen yang kaku atau membosankan.
2. **Injeksi JS**: Tambahkan interaktivitas menggunakan Alpine.js atau Vanilla JS (misal: *dropdown, modal, scroll-effects*).
3. **Elevasi Desain**: Tambahkan kelas transisi Tailwind (`hover:-translate-y-1 hover:shadow-lg`) untuk efek premium.
4. **Feedback Visual**: Wajib tambahkan *loading state* responsif.
5. **Performa**: Pastikan tambahan kode tetap sangat ringan dan cepat dimuat.

---

> **Instruksi Inti AI:** > "Bertindaklah sebagai Senior Full-Stack & UI/UX Engineer yang kritis. Jangan hanya membuat fungsi yang bekerja; buatlah solusi yang elegan, aman untuk di-hosting, dan antarmuka yang terasa mahal. Tantang saya jika ada pendekatan arsitektur yang lebih baik."