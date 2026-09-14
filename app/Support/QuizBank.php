<?php
namespace App\Support;
final class QuizBank
{
 public static function questions(): array { return [
  [
   'question'=>'File route utama untuk halaman web Laravel adalah ...',
   'options'=>[
    'routes/web.php',
    'routes/api.php',
    'config/app.php',
    'resources/views.php',
   ],
   'answer'=>0,
   'explanation'=>'Route web aplikasi didefinisikan pada routes/web.php.',
  ],
  [
   'question'=>'Elemen HTML untuk membuat tautan adalah ...',
   'options'=>[
    '<link>',
    '<a>',
    '<href>',
    '<url>',
   ],
   'answer'=>1,
   'explanation'=>'Tag <a> atau anchor digunakan untuk membuat hyperlink.',
  ],
  [
   'question'=>'Grid Bootstrap dibagi menjadi ... kolom.',
   'options'=>[
    '8',
    '10',
    '12',
    '16',
   ],
   'answer'=>2,
   'explanation'=>'Grid Bootstrap menggunakan 12 kolom.',
  ],
  [
   'question'=>'Class Bootstrap 5 untuk dua kolom sama lebar pada layar md ke atas adalah ...',
   'options'=>[
    'col-md-6',
    'col-xs-6',
    'grid-6',
    'span-6',
   ],
   'answer'=>0,
   'explanation'=>'col-md-6 mengambil 6 dari 12 kolom mulai breakpoint md.',
  ],
  [
   'question'=>'Perintah menjalankan development server Laravel adalah ...',
   'options'=>[
    'php artisan run',
    'php artisan serve',
    'composer serve',
    'laravel start',
   ],
   'answer'=>1,
   'explanation'=>'php artisan serve menjalankan server development bawaan.',
  ],
  [
   'question'=>'Bagian MVC yang menangani tampilan adalah ...',
   'options'=>[
    'Model',
    'View',
    'Controller',
    'Migration',
   ],
   'answer'=>1,
   'explanation'=>'View menyajikan antarmuka kepada pengguna.',
  ],
  [
   'question'=>'Method HTTP yang lazim digunakan untuk menyimpan data baru adalah ...',
   'options'=>[
    'GET',
    'POST',
    'PATCH',
    'DELETE',
   ],
   'answer'=>1,
   'explanation'=>'POST digunakan untuk submit resource baru.',
  ],
  [
   'question'=>'Fungsi migration adalah ...',
   'options'=>[
    'Mengatur CSS',
    'Version control struktur database',
    'Menyimpan session',
    'Membuat route',
   ],
   'answer'=>1,
   'explanation'=>'Migration mendefinisikan dan melacak perubahan struktur database.',
  ],
  [
   'question'=>'Untuk membuat resource controller digunakan ...',
   'options'=>[
    'php artisan make:controller NamaController --resource',
    'php artisan controller:new',
    'composer controller',
    'php artisan resource',
   ],
   'answer'=>0,
   'explanation'=>'Flag --resource menghasilkan method CRUD standar.',
  ],
  [
   'question'=>'Validasi input sebaiknya terutama dilakukan ...',
   'options'=>[
    'Hanya di browser',
    'Di server',
    'Di CSS',
    'Di database client',
   ],
   'answer'=>1,
   'explanation'=>'Validasi server wajib karena input browser tidak dapat dipercaya sepenuhnya.',
  ],
  [
   'question'=>'Relasi banyak record administrasi menuju satu dokter adalah ...',
   'options'=>[
    'hasMany',
    'belongsTo',
    'belongsToMany',
    'hasOneThrough',
   ],
   'answer'=>1,
   'explanation'=>'Pada sisi Administrasi, setiap record belongsTo satu Dokter.',
  ],
  [
   'question'=>'Method Eloquent untuk memecah daftar menjadi halaman adalah ...',
   'options'=>[
    'chunkView()',
    'split()',
    'paginate()',
    'pages()',
   ],
   'answer'=>2,
   'explanation'=>'paginate() mengembalikan data beserta metadata pagination.',
  ],
];} 
}
