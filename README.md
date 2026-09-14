# Media Pembelajaran Pemrograman Web

Media pembelajaran terbuka **Pemrograman Web I & II** berbasis Laravel 12, Bootstrap 5, dan Font Awesome.

## Fitur

- 23 modul materi Web I & Web II
- materi terbuka tanpa login
- pencarian materi
- latihan/praktikum per modul
- quiz mandiri tanpa penyimpanan hasil
- glosarium
- HTML/CSS code playground dengan live preview
- responsive Bootstrap 5
- Font Awesome dan typography Plus Jakarta Sans + JetBrains Mono

## Instalasi

Persyaratan: PHP 8.2+, Composer, dan ekstensi PHP standar Laravel.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Buka `http://127.0.0.1:8000`.

Aplikasi V1 tidak membutuhkan database karena seluruh konten pembelajaran disimpan sebagai data source PHP. Ini sengaja dibuat agar ringan dan mudah dipasang. Database dapat ditambahkan nanti jika diperlukan CMS/admin.

## Struktur Konten

- Web I: fondasi HTML, CSS, Bootstrap, Laravel dasar, database, MVC, CRUD, template.
- Web II: project Laravel studi kasus, database, authentication, CRUD lengkap, validation, pagination, relasi, dashboard, formatting, proyek akhir.

## Deployment

Document root hosting diarahkan ke folder `public/`. Setelah upload, jalankan `composer install --no-dev --optimize-autoloader`, set `.env`, lalu `php artisan optimize` jika lingkungan hosting mendukung.
