# BEN-Connect

Pusat Data Pelayanan Dasar Provinsi Bengkulu

---

BEN-Connect adalah platform digital terintegrasi yang menyatukan data pelayanan dasar dari berbagai Organisasi Perangkat Daerah (OPD) di Provinsi Bengkulu. Aplikasi ini memudahkan akses, monitoring, dan pengelolaan data secara real-time untuk mendukung tata kelola pemerintahan yang efektif, efisien, dan transparan.

## Fitur Utama

- **Dashboard Real-time**: Pantau data pelayanan dasar (kesehatan, pendidikan, infrastruktur, administratif) dalam satu tampilan dashboard analitik.
- **Direktori OPD**: Informasi lengkap dan pencarian instansi pemerintah daerah.
- **Integrasi Data**: Data terhubung langsung dari berbagai OPD, selalu update.
- **Akses 24/7**: Platform dapat diakses kapan saja oleh publik dan pemerintah.
- **Panduan & Bantuan**: Halaman syarat, panduan penggunaan, dan bantuan pengguna.

## Teknologi

- **Backend**: Laravel 12.x (PHP 8.2+)
- **Frontend**: Blade, TailwindCSS, Vite
- **Dev Tools**: Laravel Vite Plugin, Axios, Concurrently

## Instalasi

1. **Clone repository**
   ```bash
   git clone <repo-url>
   cd ben-connect
   ```
2. **Install dependency PHP**
   ```bash
   composer install
   ```
3. **Install dependency Node.js**
   ```bash
   npm install
   ```
4. **Copy file environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. **Jalankan migrasi database**
   ```bash
   php artisan migrate
   ```
6. **Jalankan aplikasi**
   ```bash
   npm run dev
   # atau gunakan script dev untuk menjalankan server, queue, dan vite secara bersamaan
   composer dev
   ```

Aplikasi akan berjalan di `http://localhost:8000`.

## Struktur Halaman Utama

- `/` : Beranda & ringkasan fitur
- `/data-opd` : Direktori OPD
- `/tentang` : Tentang aplikasi & visi misi
- `/syarat` : Syarat penggunaan
- `/help` : Bantuan pengguna
- `/login` : Login admin/operator

## Kontribusi

Kontribusi terbuka untuk pengembangan lebih lanjut. Silakan fork, buat branch, dan pull request.

## Lisensi

Aplikasi ini menggunakan lisensi MIT.

## Kontak

Pengembang: Alan Syahlan Santriago

---

> BEN-Connect: Menuju Bengkulu Maju, Religius, Sejahtera, dan Berkelanjutan melalui tata kelola data yang terintegrasi.
