<?php
namespace App\Support;
final class CourseCatalog
{
    public static function lessons(): array
    {
        return [
            [
                'slug' => 'web1-01',
                'series' => 'web1',
                'level' => 'Fondasi Web',
                'title' => 'Pengenalan Laravel, Project, Route & View',
                'icon' => 'fa-brands fa-laravel',
                'objectives' => [
                    'Memahami struktur dasar project Laravel',
                    'Menjalankan development server',
                    'Membuat route dan view sederhana',
                ],
                'topics' => [
                    [
                        'heading' => 'Laravel sebagai framework web',
                        'body' => 'Laravel membantu memisahkan struktur aplikasi, routing, tampilan, logika, dan akses data agar pengembangan lebih terorganisasi.',
                    ],
                    [
                        'heading' => 'Route dan View',
                        'body' => 'Route menentukan alamat yang dapat diakses. View bertugas menyajikan antarmuka kepada pengguna.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'bash',
                        'code' => <<<'CODE'
composer create-project laravel/laravel belajar-web
cd belajar-web
php artisan serve
CODE
                    ],
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
Route::get('/halo', function () {
    return view('halo');
});
CODE
                    ],
                    [
                        'language' => 'html',
                        'code' => <<<'CODE'
<h1>Halo, Pemrograman Web!</h1>
CODE
                    ],
                ],
                'practice' => 'Buat route /profil yang menampilkan view berisi nama, program studi, dan satu paragraf perkenalan.',
            ],
            [
                'slug' => 'web1-02',
                'series' => 'web1',
                'level' => 'Fondasi Web',
                'title' => 'Dasar HTML dan Struktur Dokumen',
                'icon' => 'fa-brands fa-html5',
                'objectives' => [
                    'Mengenali struktur dokumen HTML',
                    'Menggunakan heading, paragraf, link, dan gambar',
                    'Membuat halaman HTML semantik sederhana',
                ],
                'topics' => [
                    [
                        'heading' => 'HTML',
                        'body' => 'HTML adalah bahasa markup untuk menyusun struktur konten web. Browser membaca elemen HTML lalu menampilkannya sebagai halaman.',
                    ],
                    [
                        'heading' => 'Struktur dokumen',
                        'body' => 'Dokumen modern menggunakan doctype, html, head, title, meta viewport, dan body.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'html',
                        'code' => <<<'CODE'
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Belajar HTML</title>
</head>
<body>
  <h1>Pemrograman Web</h1>
  <p>Belajar struktur halaman web.</p>
  <a href="https://laravel.com">Laravel</a>
</body>
</html>
CODE
                    ],
                ],
                'practice' => 'Buat halaman profil sederhana dengan heading, paragraf, tautan, gambar, dan garis pemisah.',
            ],
            [
                'slug' => 'web1-03',
                'series' => 'web1',
                'level' => 'Fondasi Web',
                'title' => 'Tabel HTML',
                'icon' => 'fa-solid fa-table',
                'objectives' => [
                    'Membuat tabel dengan struktur yang benar',
                    'Membedakan thead, tbody, th, dan td',
                    'Menggunakan colspan dan rowspan seperlunya',
                ],
                'topics' => [
                    [
                        'heading' => 'Struktur tabel',
                        'body' => 'Gunakan table untuk data tabular. Heading sebaiknya ditempatkan pada thead dan isi pada tbody.',
                    ],
                    [
                        'heading' => 'Aksesibilitas',
                        'body' => 'Gunakan th untuk header agar struktur tabel lebih mudah dipahami manusia maupun teknologi bantu.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'html',
                        'code' => <<<'CODE'
<table>
  <thead><tr><th>NIM</th><th>Nama</th><th>Prodi</th></tr></thead>
  <tbody>
    <tr><td>23001</td><td>Alya</td><td>Sistem Informasi</td></tr>
    <tr><td>23002</td><td>Raka</td><td>Informatika</td></tr>
  </tbody>
</table>
CODE
                    ],
                ],
                'practice' => 'Buat tabel jadwal kuliah lima baris dengan kolom Hari, Mata Kuliah, Jam, dan Ruang.',
            ],
            [
                'slug' => 'web1-04',
                'series' => 'web1',
                'level' => 'Fondasi Web',
                'title' => 'List dan Form HTML',
                'icon' => 'fa-solid fa-list-check',
                'objectives' => [
                    'Membuat ordered dan unordered list',
                    'Mengenali input, textarea, select, checkbox, dan radio',
                    'Menyusun form yang mudah dibaca',
                ],
                'topics' => [
                    [
                        'heading' => 'List',
                        'body' => 'Gunakan ul untuk daftar tanpa urutan dan ol untuk daftar berurutan.',
                    ],
                    [
                        'heading' => 'Form',
                        'body' => 'Form adalah sarana menerima input pengguna. Setiap kontrol sebaiknya memiliki label dan name yang jelas.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'html',
                        'code' => <<<'CODE'
<form action="/mahasiswa" method="post">
  <label for="nama">Nama</label>
  <input id="nama" name="nama" type="text">

  <label for="prodi">Program Studi</label>
  <select id="prodi" name="prodi">
    <option>Sistem Informasi</option>
    <option>Informatika</option>
  </select>

  <button type="submit">Simpan</button>
</form>
CODE
                    ],
                ],
                'practice' => 'Buat form biodata mahasiswa yang berisi nama, NIM, program studi, jenis kelamin, alamat, dan tombol kirim.',
            ],
            [
                'slug' => 'web1-05',
                'series' => 'web1',
                'level' => 'Fondasi Web',
                'title' => 'CSS: Styling Halaman Web',
                'icon' => 'fa-brands fa-css3-alt',
                'objectives' => [
                    'Membedakan inline, internal, dan external CSS',
                    'Menggunakan selector dan properti dasar',
                    'Membuat tampilan sederhana yang konsisten',
                ],
                'topics' => [
                    [
                        'heading' => 'CSS',
                        'body' => 'CSS mengatur presentasi HTML seperti warna, ukuran teks, jarak, border, dan layout.',
                    ],
                    [
                        'heading' => 'External stylesheet',
                        'body' => 'Untuk project nyata, external CSS lebih mudah dipelihara karena style berada pada file terpisah.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'css',
                        'code' => <<<'CODE'
body {
  font-family: Arial, sans-serif;
  background: #f5f7fb;
  color: #1f2937;
}
.card {
  max-width: 520px;
  margin: 40px auto;
  padding: 24px;
  background: white;
  border-radius: 16px;
}
CODE
                    ],
                ],
                'practice' => 'Percantik halaman profil sebelumnya menggunakan external CSS. Atur typography, warna latar, card, dan tombol.',
            ],
            [
                'slug' => 'web1-06',
                'series' => 'web1',
                'level' => 'Fondasi Web',
                'title' => 'Bootstrap 5 dan Grid System',
                'icon' => 'fa-brands fa-bootstrap',
                'objectives' => [
                    'Memahami container, row, dan column',
                    'Menggunakan grid responsive Bootstrap 5',
                    'Membuat layout tanpa banyak CSS manual',
                ],
                'topics' => [
                    [
                        'heading' => 'Bootstrap',
                        'body' => 'Bootstrap menyediakan komponen dan utility class untuk membangun antarmuka responsive dengan cepat.',
                    ],
                    [
                        'heading' => 'Grid modern',
                        'body' => 'Bootstrap 5 menggunakan breakpoint col-, col-sm-, col-md-, col-lg-, col-xl-, dan col-xxl. Materi lama col-xs-* tidak dipakai lagi.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'html',
                        'code' => <<<'CODE'
<div class="container py-4">
  <div class="row g-3">
    <div class="col-12 col-md-6"><div class="p-3 border rounded">Kolom A</div></div>
    <div class="col-12 col-md-6"><div class="p-3 border rounded">Kolom B</div></div>
  </div>
</div>
CODE
                    ],
                ],
                'practice' => 'Buat layout tiga card. Di desktop tampil tiga kolom, di tablet dua kolom, dan di ponsel satu kolom.',
            ],
            [
                'slug' => 'web1-07',
                'series' => 'web1',
                'level' => 'Antarmuka Web',
                'title' => 'Navbar Bootstrap',
                'icon' => 'fa-solid fa-bars',
                'objectives' => [
                    'Membuat navbar responsive',
                    'Menggunakan collapse untuk mobile',
                    'Menyusun menu navigasi yang jelas',
                ],
                'topics' => [
                    [
                        'heading' => 'Navbar',
                        'body' => 'Navbar membantu pengguna berpindah halaman. Gunakan struktur sederhana dan label menu yang mudah dipahami.',
                    ],
                    [
                        'heading' => 'Responsive navigation',
                        'body' => 'Komponen navbar Bootstrap dapat berubah menjadi tombol menu pada layar kecil.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'html',
                        'code' => <<<'CODE'
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">WebClass</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="menu" class="collapse navbar-collapse">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="#">Beranda</a>
        <a class="nav-link" href="#">Materi</a>
      </div>
    </div>
  </div>
</nav>
CODE
                    ],
                ],
                'practice' => 'Buat navbar untuk website kampus dengan minimal empat menu dan pastikan nyaman digunakan di ponsel.',
            ],
            [
                'slug' => 'web1-08',
                'series' => 'web1',
                'level' => 'Antarmuka Web',
                'title' => 'Card, Grid, Form, dan Table Bootstrap',
                'icon' => 'fa-solid fa-layer-group',
                'objectives' => [
                    'Menggabungkan komponen Bootstrap',
                    'Membuat card informasi',
                    'Menata form dan table secara responsive',
                ],
                'topics' => [
                    [
                        'heading' => 'Komponen',
                        'body' => 'Bootstrap menyediakan card, form control, button, badge, alert, dan table yang dapat digabungkan secara konsisten.',
                    ],
                    [
                        'heading' => 'Utility classes',
                        'body' => 'Gunakan utility seperti p-*, m-*, gap-*, d-flex, shadow-sm, dan rounded untuk mengurangi CSS tambahan.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'html',
                        'code' => <<<'CODE'
<div class="card shadow-sm border-0">
  <div class="card-body">
    <h2 class="h5">Data Mahasiswa</h2>
    <div class="table-responsive">
      <table class="table align-middle">...</table>
    </div>
  </div>
</div>
CODE
                    ],
                ],
                'practice' => 'Buat satu halaman dashboard sederhana yang berisi navbar, tiga card statistik, dan tabel data.',
            ],
            [
                'slug' => 'web1-09',
                'series' => 'web1',
                'level' => 'Laravel Fundamental',
                'title' => 'Database dan Migration Laravel',
                'icon' => 'fa-solid fa-database',
                'objectives' => [
                    'Memahami konfigurasi koneksi database',
                    'Mengenal migration',
                    'Membuat dan menjalankan migration',
                ],
                'topics' => [
                    [
                        'heading' => 'Database',
                        'body' => 'Laravel menggunakan konfigurasi environment untuk koneksi database sehingga credential tidak ditulis langsung pada source code.',
                    ],
                    [
                        'heading' => 'Migration',
                        'body' => 'Migration adalah version control untuk struktur database. Struktur tabel dapat dibuat dan diubah melalui kode.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'bash',
                        'code' => <<<'CODE'
php artisan make:migration create_mahasiswa_table
php artisan migrate
CODE
                    ],
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
Schema::create('mahasiswa', function (Blueprint $table) {
    $table->id();
    $table->string('nim')->unique();
    $table->string('nama');
    $table->string('prodi');
    $table->timestamps();
});
CODE
                    ],
                ],
                'practice' => 'Buat migration tabel mahasiswa dengan id, nim, nama, prodi, email, dan timestamps.',
            ],
            [
                'slug' => 'web1-10',
                'series' => 'web1',
                'level' => 'Laravel Fundamental',
                'title' => 'MVC, Resource Controller, dan CRUD',
                'icon' => 'fa-solid fa-diagram-project',
                'objectives' => [
                    'Memahami pembagian Model, View, Controller',
                    'Mengenal resource route',
                    'Menjelaskan alur CRUD',
                ],
                'topics' => [
                    [
                        'heading' => 'MVC',
                        'body' => 'Model mengelola data, View menyajikan antarmuka, dan Controller menjembatani request dengan proses aplikasi.',
                    ],
                    [
                        'heading' => 'Resource controller',
                        'body' => 'Laravel menyediakan tujuh method standar: index, create, store, show, edit, update, dan destroy.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'bash',
                        'code' => <<<'CODE'
php artisan make:model Mahasiswa -m
php artisan make:controller MahasiswaController --resource
CODE
                    ],
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
Route::resource('mahasiswa', MahasiswaController::class);
CODE
                    ],
                ],
                'practice' => 'Tuliskan fungsi masing-masing method resource controller dan URL yang digunakan untuk CRUD mahasiswa.',
            ],
            [
                'slug' => 'web1-11',
                'series' => 'web1',
                'level' => 'Laravel Fundamental',
                'title' => 'Integrasi Template ke Blade',
                'icon' => 'fa-solid fa-window-maximize',
                'objectives' => [
                    'Memahami layout Blade',
                    'Menggunakan @extends, @section, dan @yield',
                    'Mengubah asset statis menjadi asset Laravel',
                ],
                'topics' => [
                    [
                        'heading' => 'Blade layout',
                        'body' => 'Daripada menyalin seluruh HTML di setiap halaman, gunakan layout utama lalu isi bagian konten dengan section.',
                    ],
                    [
                        'heading' => 'Asset',
                        'body' => 'Gunakan helper asset() untuk file CSS, JavaScript, dan gambar yang berada di public.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'html',
                        'code' => <<<'CODE'
{{-- resources/views/layouts/app.blade.php --}}
<!doctype html>
<html>
<body>
  @include('partials.navbar')
  <main>@yield('content')</main>
</body>
</html>

{{-- child view --}}
@extends('layouts.app')
@section('content')
  <h1>Dashboard</h1>
@endsection
CODE
                    ],
                ],
                'practice' => 'Pecah satu template HTML menjadi layout Blade, navbar partial, dan satu halaman child view.',
            ],
            [
                'slug' => 'web1-12',
                'series' => 'web1',
                'level' => 'Evaluasi',
                'title' => 'Quiz dan Proyek Mini Web I',
                'icon' => 'fa-solid fa-clipboard-question',
                'objectives' => [
                    'Mengintegrasikan materi HTML, CSS, Bootstrap, dan Laravel dasar',
                    'Membuat halaman yang konsisten',
                    'Menjelaskan struktur project yang dibuat',
                ],
                'topics' => [
                    [
                        'heading' => 'Proyek mini',
                        'body' => 'Bangun website profil akademik sederhana dengan beberapa route, Blade, Bootstrap 5, form, table, dan satu migration.',
                    ],
                    [
                        'heading' => 'Evaluasi',
                        'body' => 'Gunakan quiz pada website ini untuk memeriksa pemahaman konsep dasar sebelum masuk ke Web II.',
                    ],
                ],
                'codes' => [
                ],
                'practice' => 'Buat mini project “Data Kegiatan Mahasiswa” dengan halaman beranda, daftar kegiatan, form tambah, dan tampilan responsive.',
            ],
            [
                'slug' => 'web2-01',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'Setup Project Laravel untuk Aplikasi Klinik',
                'icon' => 'fa-solid fa-stethoscope',
                'objectives' => [
                    'Menyiapkan project Laravel',
                    'Memahami struktur aplikasi studi kasus Klinik',
                    'Menetapkan konvensi nama dan alur pengembangan',
                ],
                'topics' => [
                    [
                        'heading' => 'Studi kasus',
                        'body' => 'Web II menggunakan aplikasi klinik sebagai kasus berkelanjutan agar setiap konsep terhubung dengan fitur nyata.',
                    ],
                    [
                        'heading' => 'Setup',
                        'body' => 'Gunakan PHP, Composer, database server, editor kode, dan browser. Laragon/XAMPP boleh dipakai, tetapi Laravel tidak bergantung pada salah satu aplikasi tersebut.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'bash',
                        'code' => <<<'CODE'
composer create-project laravel/laravel klinik
cd klinik
php artisan serve
CODE
                    ],
                ],
                'practice' => 'Buat project baru klinik dan catat fungsi folder app, routes, resources, database, public, dan storage.',
            ],
            [
                'slug' => 'web2-02',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'Database Aplikasi Klinik',
                'icon' => 'fa-solid fa-database',
                'objectives' => [
                    'Merancang tabel dokter, pasien, dan administrasi',
                    'Membuat migration dan relasi kunci',
                    'Menjalankan migration',
                ],
                'topics' => [
                    [
                        'heading' => 'Perancangan',
                        'body' => 'Sebelum CRUD dibuat, tentukan entitas, atribut, primary key, dan hubungan antar data.',
                    ],
                    [
                        'heading' => 'Konvensi Laravel',
                        'body' => 'Gunakan migration agar struktur database dapat dilacak dan direproduksi.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
Schema::create('dokters', function (Blueprint $table) {
    $table->id();
    $table->string('kode_dokter')->unique();
    $table->string('nama');
    $table->string('spesialisasi');
    $table->timestamps();
});
CODE
                    ],
                ],
                'practice' => 'Rancang migration untuk doctors/patients/administrations dan tuliskan foreign key yang diperlukan.',
            ],
            [
                'slug' => 'web2-03',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'Authentication dan Proteksi Halaman',
                'icon' => 'fa-solid fa-user-lock',
                'objectives' => [
                    'Memahami konsep authentication',
                    'Membedakan halaman publik dan halaman terlindungi',
                    'Menggunakan middleware auth',
                ],
                'topics' => [
                    [
                        'heading' => 'Authentication',
                        'body' => 'Authentication memastikan identitas pengguna sebelum mengakses fitur tertentu.',
                    ],
                    [
                        'heading' => 'Catatan versi',
                        'body' => 'Materi lama menggunakan Laravel UI. Pada project modern, pilih starter kit sesuai kebutuhan. Konsep middleware auth tetap sama meskipun paket autentikasi berbeda.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
Route::middleware('auth')->group(function () {
    Route::resource('dokter', DokterController::class);
});
CODE
                    ],
                ],
                'practice' => 'Jelaskan fitur mana pada aplikasi klinik yang sebaiknya publik dan mana yang hanya untuk pengguna terautentikasi.',
            ],
            [
                'slug' => 'web2-04',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'CRUD Dokter: Read dan Create',
                'icon' => 'fa-solid fa-user-doctor',
                'objectives' => [
                    'Membuat Model dan Controller Dokter',
                    'Menampilkan data',
                    'Membuat form tambah data',
                ],
                'topics' => [
                    [
                        'heading' => 'CRUD dokter',
                        'body' => 'Mulai dari index untuk melihat data lalu create untuk menampilkan form input.',
                    ],
                    [
                        'heading' => 'Mass assignment',
                        'body' => 'Tentukan field yang diizinkan pada model menggunakan fillable agar penyimpanan data eksplisit.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
class Dokter extends Model {
    protected $fillable = ['kode_dokter','nama','spesialisasi'];
}

public function index() {
    $dokters = Dokter::latest()->get();
    return view('dokter.index', compact('dokters'));
}
CODE
                    ],
                ],
                'practice' => 'Buat halaman index dan create untuk data dokter menggunakan Bootstrap table dan form.',
            ],
            [
                'slug' => 'web2-05',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'CRUD Dokter: Store dan Validation',
                'icon' => 'fa-solid fa-shield-halved',
                'objectives' => [
                    'Memvalidasi input',
                    'Menyimpan data valid',
                    'Menampilkan pesan kesalahan dan sukses',
                ],
                'topics' => [
                    [
                        'heading' => 'Validation',
                        'body' => 'Validasi dilakukan di server agar data yang masuk memenuhi aturan aplikasi.',
                    ],
                    [
                        'heading' => 'Feedback',
                        'body' => 'Tampilkan error dekat field terkait dan pesan sukses setelah data berhasil disimpan.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
$validated = $request->validate([
    'kode_dokter' => ['required','unique:dokters,kode_dokter'],
    'nama' => ['required','max:120'],
    'spesialisasi' => ['required','max:120'],
]);
Dokter::create($validated);
return redirect()->route('dokter.index')->with('success','Data dokter berhasil disimpan.');
CODE
                    ],
                ],
                'practice' => 'Tambahkan validasi pada form dokter dan pastikan error lama tetap menampilkan input dengan old().',
            ],
            [
                'slug' => 'web2-06',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'CRUD Dokter: Edit, Update, Delete, Pagination',
                'icon' => 'fa-solid fa-pen-to-square',
                'objectives' => [
                    'Mengubah data',
                    'Menghapus data dengan konfirmasi',
                    'Menggunakan pagination',
                ],
                'topics' => [
                    [
                        'heading' => 'Update',
                        'body' => 'Gunakan route model binding agar record dapat diterima langsung sebagai instance model.',
                    ],
                    [
                        'heading' => 'Pagination',
                        'body' => 'Untuk daftar panjang, gunakan paginate() agar data tidak dimuat sekaligus.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
public function update(Request $request, Dokter $dokter) {
    $data = $request->validate([
        'nama' => ['required','max:120'],
        'spesialisasi' => ['required','max:120'],
    ]);
    $dokter->update($data);
    return redirect()->route('dokter.index');
}

$doctors = Dokter::paginate(10);
CODE
                    ],
                ],
                'practice' => 'Lengkapi edit, update, delete, dan pagination. Gunakan modal/confirm sebelum delete.',
            ],
            [
                'slug' => 'web2-07',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'Dashboard dan Integrasi Template',
                'icon' => 'fa-solid fa-gauge-high',
                'objectives' => [
                    'Mengubah template menjadi layout Blade',
                    'Mengelola asset dengan benar',
                    'Menyusun sidebar/navbar aplikasi',
                ],
                'topics' => [
                    [
                        'heading' => 'Template',
                        'body' => 'Template seperti SB Admin dapat menjadi latihan integrasi, tetapi struktur Blade dan asset sebaiknya tetap rapi.',
                    ],
                    [
                        'heading' => 'Konsistensi',
                        'body' => 'Gunakan satu layout utama dan partial untuk komponen berulang.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'html',
                        'code' => <<<'CODE'
<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
<img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
<script src="{{ asset('assets/js/app.js') }}"></script>
CODE
                    ],
                ],
                'practice' => 'Integrasikan sebuah template dashboard ke Blade tanpa menyalin navbar/sidebar pada setiap halaman.',
            ],
            [
                'slug' => 'web2-08',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'CRUD Administrasi: Read',
                'icon' => 'fa-solid fa-file-medical',
                'objectives' => [
                    'Membuat Model dan Controller Administrasi',
                    'Menampilkan data administrasi',
                    'Menghubungkan halaman ke layout dashboard',
                ],
                'topics' => [
                    [
                        'heading' => 'Administrasi',
                        'body' => 'Data administrasi menjadi contoh entitas transaksi yang berhubungan dengan pasien dan dokter.',
                    ],
                    [
                        'heading' => 'Read',
                        'body' => 'Tampilkan data penting saja pada index dan sediakan aksi untuk melihat atau mengubah detail.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
$administrasi = Administrasi::with(['pasien','dokter'])->latest()->paginate(10);
return view('administrasi.index', compact('administrasi'));
CODE
                    ],
                ],
                'practice' => 'Buat index Administrasi yang menampilkan tanggal, pasien, dokter, biaya, dan aksi.',
            ],
            [
                'slug' => 'web2-09',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'CRUD Administrasi: Create dan Relasi',
                'icon' => 'fa-solid fa-link',
                'objectives' => [
                    'Mengisi pilihan pasien/dokter dari database',
                    'Menyimpan foreign key',
                    'Menerapkan relasi Eloquent',
                ],
                'topics' => [
                    [
                        'heading' => 'Relasi',
                        'body' => 'Foreign key menghubungkan data administrasi dengan pasien dan dokter.',
                    ],
                    [
                        'heading' => 'Eloquent',
                        'body' => 'Relasi belongsTo membuat pemanggilan data terkait lebih mudah dibaca.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
class Administrasi extends Model {
    public function dokter() { return $this->belongsTo(Dokter::class); }
    public function pasien() { return $this->belongsTo(Pasien::class); }
}

$dokters = Dokter::orderBy('nama')->get();
$pasiens = Pasien::orderBy('nama')->get();
CODE
                    ],
                ],
                'practice' => 'Buat form administrasi dengan select dokter dan pasien yang datanya berasal dari database.',
            ],
            [
                'slug' => 'web2-10',
                'series' => 'web2',
                'level' => 'Laravel Application Development',
                'title' => 'CRUD Administrasi: Update, Delete, dan Formatting',
                'icon' => 'fa-solid fa-receipt',
                'objectives' => [
                    'Mengubah dan menghapus transaksi',
                    'Memformat tanggal',
                    'Memformat nilai rupiah',
                ],
                'topics' => [
                    [
                        'heading' => 'Formatting',
                        'body' => 'Tampilan boleh memformat data agar mudah dibaca tanpa mengubah nilai asli di database.',
                    ],
                    [
                        'heading' => 'Tanggal',
                        'body' => 'Gunakan Carbon/cast date untuk format tanggal. Untuk uang, format pada layer presentasi atau helper khusus.',
                    ],
                ],
                'codes' => [
                    [
                        'language' => 'php',
                        'code' => <<<'CODE'
{{ $administrasi->tanggal->format('d/m/Y') }}
{{ 'Rp '.number_format($administrasi->biaya, 0, ',', '.') }}
CODE
                    ],
                ],
                'practice' => 'Lengkapi edit/delete administrasi lalu tampilkan tanggal Indonesia dan biaya dalam format rupiah.',
            ],
            [
                'slug' => 'web2-11',
                'series' => 'web2',
                'level' => 'Evaluasi',
                'title' => 'Proyek Akhir Pemrograman Web II',
                'icon' => 'fa-solid fa-graduation-cap',
                'objectives' => [
                    'Mengintegrasikan CRUD, relasi, validasi, pagination, dan layout',
                    'Membangun aplikasi Laravel yang konsisten',
                    'Menjelaskan keputusan implementasi',
                ],
                'topics' => [
                    [
                        'heading' => 'Proyek akhir',
                        'body' => 'Kembangkan aplikasi data terstruktur minimal tiga entitas dengan satu relasi, CRUD lengkap, validasi, pagination, dan dashboard Bootstrap.',
                    ],
                    [
                        'heading' => 'Dokumentasi',
                        'body' => 'Sertakan diagram tabel singkat, route utama, screenshot fitur, dan petunjuk instalasi.',
                    ],
                ],
                'codes' => [
                ],
                'practice' => 'Selesaikan mini aplikasi Laravel bertema bebas dengan minimal tiga tabel berelasi dan CRUD lengkap.',
            ],
        ];
    }

    public static function find(string $slug): ?array
    {
        foreach (self::lessons() as $lesson) {
            if ($lesson['slug'] === $slug) return $lesson;
        }
        return null;
    }
}
