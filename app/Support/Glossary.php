<?php
namespace App\Support;
final class Glossary
{
 public static function items(): array { return [
  'Artisan'=>'Command-line interface Laravel untuk menjalankan berbagai tugas pengembangan.',
  'Blade'=>'Template engine bawaan Laravel.',
  'Bootstrap'=>'Framework front-end untuk layout responsive dan komponen antarmuka.',
  'Controller'=>'Kelas yang menangani request dan mengatur alur proses aplikasi.',
  'CRUD'=>'Create, Read, Update, Delete; empat operasi dasar pengelolaan data.',
  'CSS'=>'Bahasa untuk mengatur tampilan dan layout dokumen HTML.',
  'Eloquent'=>'ORM Laravel untuk bekerja dengan database melalui model PHP.',
  'Foreign Key'=>'Kolom yang merujuk primary key pada tabel lain.',
  'Form'=>'Elemen antarmuka untuk menerima input pengguna.',
  'HTML'=>'Bahasa markup untuk menyusun struktur halaman web.',
  'HTTP Method'=>'Kata kerja request seperti GET, POST, PUT/PATCH, dan DELETE.',
  'Laravel'=>'Framework aplikasi web berbasis PHP.',
  'Migration'=>'File version control untuk struktur database.',
  'Model'=>'Representasi data/domain pada pola MVC; di Laravel lazim memakai Eloquent.',
  'MVC'=>'Model-View-Controller, pola pemisahan data, tampilan, dan kontrol aplikasi.',
  'Pagination'=>'Pembagian daftar data ke beberapa halaman.',
  'Primary Key'=>'Identitas unik setiap record tabel.',
  'Responsive'=>'Kemampuan tampilan beradaptasi dengan berbagai ukuran layar.',
  'Route'=>'Pemetaan URL dan HTTP method ke tindakan aplikasi.',
  'Validation'=>'Proses memastikan input memenuhi aturan sebelum diproses.',
  'View'=>'Lapisan tampilan aplikasi yang dilihat pengguna.',
];}
}
