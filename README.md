# Hydro Applikasi Web
Aplikasi web demo ini yang menyediakan menu sayuran hydroponik, proses pembelian, dan proses penjualan sayuran hydroponik.

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Ask Me Anything !](https://img.shields.io/badge/Ask%20me-anything-1abc9c.svg)](https://GitHub.com/Naereen/ama)

## Fitur Aplikasi Hydro
- Registrasi, daftar
- Profil
- Beranda
- Penjualan
- Pembelian


## Tech

Proyek ini menggunakan sejumlah teknologi terbaik untuk pengembangan:

Laragon - Sistem database yang efisien dan ringan
Laravel - Framework PHP yang kuat dan elegan untuk backend
Tailwind - Framework CSS modern untuk styling cepat dan konsisten
Node.js - I/O berbasis event untuk pengembangan backend
Alpine.js - Framework JavaScript minimalis untuk interaktivitas dinamis

Markdown adalah bahasa markup ringan yang didasarkan pada konvensi pemformatan 
yang secara alami digunakan orang dalam email. 
Seperti yang ditulis John Gruber di situs Markdown.

---

## Teknologi yang Digunakan

Proyek ini dibangun dengan menggunakan stack teknologi modern yang menggabungkan performa dan produktivitas:

- **Laragon**: Digunakan sebagai solusi database lokal yang ringan dan cepat.
- **Laravel**: Framework PHP yang mempermudah pengembangan backend dengan sintaks elegan dan fitur lengkap.
- **Tailwind CSS**: Framework CSS untuk menghasilkan tampilan yang responsif dan indah secara efisien.
- **Node.js**: Platform berbasis JavaScript untuk mengatur I/O event-driven pada sisi server.
- **Alpine.js**: Framework JavaScript ringan yang membuat aplikasi lebih interaktif tanpa kompleksitas berlebih.

Teknologi-teknologi ini dipilih untuk memastikan proyek ini mudah dikembangkan, cepat, dan dapat diandalkan.

---


## Instalasi dengan Laragon

Ikuti langkah-langkah berikut untuk menginstal proyek ini menggunakan Laragon:

1. **Unduh dan Instal Laragon**
   - Jika belum memiliki Laragon, unduh dari [situs resmi Laragon](https://laragon.org/).
   - Instal Laragon di komputer Anda dan jalankan *Apache* serta *MySQL* langsung dari Laragon.

2. **Kloning Proyek**
   - Buka terminal bawaan Laragon atau terminal lainnya, lalu jalankan perintah berikut:
     ```bash
     git clone https://github.com/username/repository.git
     cd repository
     ```

3. **Buat Database**
   - Klik kanan pada ikon Laragon, pilih *Quick App > MySQL > Create Database*.
   - Berikan nama database sesuai kebutuhan.

4. **Konfigurasi `.env`**
   - Duplikat file `.env.example` menjadi `.env`.
   - Atur kredensial database Anda di file `.env` sesuai database yang dibuat:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nama_database
     DB_USERNAME=root
     DB_PASSWORD=
     ```

5. **Instal Dependensi**
   - Instal semua dependensi proyek menggunakan perintah berikut:
     ```bash
     composer install
     npm install
     ```

6. **Migrasi Database**
   - Migrasikan tabel ke database dengan perintah:
     ```bash
     php artisan migrate
     ```

7. **Jalankan Proyek Menggunakan Laragon**
   - Jalankan server melalui Laragon dengan memilih opsi *Menu > Start All*.
   - Buka terminal di folder proyek, lalu jalankan:
     ```bash
     php artisan serve
     ```
   - Proyek akan dapat diakses di browser melalui `http://localhost:8000`.

8. **Build Frontend (Opsional)**
   - Jika menggunakan Tailwind CSS dan Alpine.js, build aset dengan perintah:
     ```bash
     npm run dev
     ```
## Dibuat Oleh 
> Anisa 2310120019
> Andi Nur Akifah (2310120003)
> Muhammad Adi Firmansyah 1810120014

