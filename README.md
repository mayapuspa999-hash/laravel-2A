# Tugas Praktikum Framework Laravel

Tugas praktikum Pemrograman Web menggunakan framework Laravel. Materi yang
dipraktikkan meliputi Route, Controller, Parsing Data ke View, dan Sistem
Templating Blade.

- **Nama:** Maya Puspa Wardhani
- **NPM:** 2513020073
- **Repository:** https://github.com/mayapuspa999-hash/laravel-2A

## Deskripsi

Aplikasi sederhana yang berisi dua halaman latihan:

1. **Daftar Mahasiswa** (`/daftar/mahasiswa`): menampilkan data mahasiswa
   (Nama, Alamat, Gender) dalam bentuk tabel.
2. **Kalkulator Luas Segitiga** (`/kalkulator/segitiga`): form untuk menghitung
   luas segitiga (`1/2 x alas x tinggi`) lengkap dengan validasi input.

Data dikirim dari Controller ke View menggunakan array `$data`, lalu
ditampilkan dengan Blade (`{{ }}`, `@foreach`, dan `@if`). Tampilan dibagi
menjadi layout, header, dan footer dengan sistem templating Blade
(`@extends`, `@include`, `@yield`).

## Teknologi

- PHP 8.5.12 atau lebih baru
- Laravel 13.40.0
- Composer
- Bootstrap 5.3 (CDN) dan CSS

## Daftar Halaman (Route)

| Method | URL                    | Controller             | Fungsi           | Keterangan             |
| ------ | ---------------------- | ---------------------- | ---------------- | ---------------------- |
| GET    | `/daftar/mahasiswa`    | `MahasiswaController`  | `index`          | Tabel daftar mahasiswa |
| GET    | `/kalkulator/segitiga` | `KalkulatorController` | `segitiga`       | Form luas segitiga     |
| POST   | `/kalkulator/segitiga` | `KalkulatorController` | `hitungSegitiga` | Proses hitung luas     |

## Struktur File Penting

```
web-app
 |- app/Http/Controllers
 |    |- MahasiswaController.php     (baru)
 |    |- KalkulatorController.php    (segitiga + hitungSegitiga)
 |- public/css
 |    |- style.css                   (tema hijau mint + pink pastel)
 |- resources/views
 |    |- template
 |    |    |- header.blade.php       (navbar)
 |    |    |- footer.blade.php
 |    |- layout.blade.php            (template utama)
 |    |- mahasiswa.blade.php         (latihan)
 |    |- segitiga.blade.php          (latihan)
 |- routes
 |    |- web.php                     (ditambah 3 route)
 |- screenshots                      (gambar untuk README)
```

## Cara Menjalankan

1. Clone repository dan masuk ke foldernya:

    ```
    git clone https://github.com/mayapuspa999-hash/laravel-2A.git
    cd laravel-2A
    ```

2. Install dependency (jika folder `vendor` belum ada):

    ```
    composer install
    ```

3. Siapkan file environment (jika belum ada `.env`):

    ```
    copy .env.example .env
    php artisan key:generate
    ```

4. Jalankan server:

    ```
    php artisan serve
    ```

5. Buka di browser:
    - http://localhost:8000/daftar/mahasiswa
    - http://localhost:8000/kalkulator/segitiga

> Koneksi internet diperlukan karena Bootstrap dan font dimuat lewat CDN.

## Contoh Pengujian

- `/daftar/mahasiswa` menampilkan 4 baris: Anton, Budi, Ani, Sinta.
- `/kalkulator/segitiga`: isi alas `10` dan tinggi `5`, klik **HITUNG**,
  hasilnya **25**.
- `/kalkulator/segitiga`: kosongkan kolom atau isi `0`, akan muncul pesan
  kesalahan validasi.
- `/kalkulator/segitiga`: isi alas `0` dan tinggi `0`, klik **HITUNG**, akan
  muncul pesan "Alas harus lebih besar dari 0" dan "Tinggi harus lebih besar
  dari 0".

## Screenshot

### 1. Daftar Mahasiswa (`/daftar/mahasiswa`)

![Daftar Mahasiswa](screenshots/mahasiswa.png)

### 2. Kalkulator Segitiga, sebelum dihitung (`/kalkulator/segitiga`)

![Segitiga Awal](screenshots/segitiga-awal.png)

### 3. Kalkulator Segitiga, setelah dihitung

![Segitiga Hasil](screenshots/segitiga-hasil.png)

### 4. Kalkulator Segitiga, pesan validasi (alas dan tinggi diisi 0)

![Segitiga Error](screenshots/segitiga-error.png)

## Referensi

- Modul Praktikum Framework Laravel, Rudy Eko Prasetya, S.Kom
- Dokumentasi Laravel: https://laravel.com/docs
- Dokumentasi Bootstrap: https://getbootstrap.com/docs/5.3

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
