@extends('layouts.app')
@section('title','Media Pembelajaran Pemrograman Web')

@section('content')

<section class="hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <div class="eyebrow mb-3">Media Pembelajaran Terbuka</div>

```
            <h1 class="display-3 display-title mb-4">
                Belajar Pemrograman Web dari fondasi hingga aplikasi Laravel.
            </h1>

            <p class="lead lead-soft mb-4">
                Materi Pemrograman Web I dan II disajikan dalam format pembelajaran berbasis web yang terstruktur, interaktif, responsif, dan dapat diakses secara terbuka untuk mendukung pembelajaran mandiri maupun pembelajaran di kelas.
            </p>

            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('materials') }}" class="btn btn-brand">
                    <i class="fa-solid fa-book-open me-2"></i>
                    Mulai Belajar
                </a>

                <a href="{{ route('playground') }}" class="btn btn-outline-dark rounded-3 px-4">
                    <i class="fa-solid fa-code me-2"></i>
                    Coba Playground
                </a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card-clean p-4">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="icon-box">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div>
                        <strong>{{ count($lessons) }} modul</strong>
                        <div class="text-secondary small">dua seri pembelajaran</div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="icon-box">
                        <i class="fa-solid fa-unlock"></i>
                    </div>
                    <div>
                        <strong>Akses terbuka</strong>
                        <div class="text-secondary small">tanpa login dan akun</div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <div class="icon-box">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <div>
                        <strong>Berbasis praktik</strong>
                        <div class="text-secondary small">contoh kode dan latihan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
```

</section>

<section class="container py-5">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <div class="eyebrow mb-2">Jalur Belajar</div>
            <h2 class="section-title mb-0">
                Mulai dari dasar, lanjut ke pengembangan aplikasi.
            </h2>
        </div>

```
    <a class="d-none d-md-inline" href="{{ route('materials') }}">
        Semua materi
        <i class="fa-solid fa-arrow-right ms-1"></i>
    </a>
</div>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card-clean p-4 h-100">
            <span class="badge rounded-pill badge-soft mb-3">
                Pemrograman Web I
            </span>

            <h3 class="h4 fw-bold">Fondasi Web & Laravel</h3>

            <p class="text-secondary">
                HTML, CSS, Bootstrap 5, route, view, database, MVC, CRUD dasar, dan integrasi template.
            </p>

            <a href="{{ route('materials',['q'=>'web1']) }}" class="fw-semibold">
                Pelajari fondasi
                <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card-clean p-4 h-100">
            <span class="badge rounded-pill badge-soft mb-3">
                Pemrograman Web II
            </span>

            <h3 class="h4 fw-bold">Laravel Application Development</h3>

            <p class="text-secondary">
                Database, authentication, CRUD lengkap, validation, pagination, relasi Eloquent, dashboard, dan formatting.
            </p>

            <a href="{{ route('materials',['q'=>'web2']) }}" class="fw-semibold">
                Lanjut ke aplikasi
                <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</div>
```

</section>

<section class="container pb-5">
    <div class="card-clean p-4 p-lg-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="eyebrow mb-2">Belajar sambil mencoba</div>

```
            <h2 class="section-title">
                Ubah kode HTML/CSS dan lihat hasilnya langsung.
            </h2>

            <p class="text-secondary mb-0">
                Code Playground dapat digunakan langsung di browser untuk mencoba contoh kode dan melakukan latihan dasar secara interaktif.
            </p>
        </div>

        <div class="col-lg-4 text-lg-end">
            <a href="{{ route('playground') }}" class="btn btn-brand">
                Buka Code Playground
            </a>
        </div>
    </div>
</div>
```

</section>
@endsection
