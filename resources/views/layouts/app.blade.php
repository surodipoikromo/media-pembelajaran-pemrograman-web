<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title','Media Pemrograman Web')</title>
<meta name="description" content="Media pembelajaran terbuka Pemrograman Web I dan II berbasis Laravel.">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">@stack('head')
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top border-bottom"><div class="container py-2"><a class="navbar-brand" href="{{ route('home') }}"><span class="text-primary">&lt;/&gt;</span> Pemrograman Web</a><button class="navbar-toggler border-0" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button><div id="nav" class="collapse navbar-collapse"><div class="navbar-nav ms-auto gap-lg-2"><a class="nav-link {{ request()->routeIs('home')?'active':'' }}" href="{{ route('home') }}">Beranda</a><a class="nav-link {{ request()->routeIs('materials','lesson')?'active':'' }}" href="{{ route('materials') }}">Materi</a><a class="nav-link {{ request()->routeIs('practicum')?'active':'' }}" href="{{ route('practicum') }}">Praktikum</a><a class="nav-link {{ request()->routeIs('playground')?'active':'' }}" href="{{ route('playground') }}">Playground</a><a class="nav-link {{ request()->routeIs('quiz')?'active':'' }}" href="{{ route('quiz') }}">Quiz</a><a class="nav-link {{ request()->routeIs('glossary')?'active':'' }}" href="{{ route('glossary') }}">Glosarium</a></div></div></div></nav>
<main>@yield('content')</main>
<footer class="footer mt-5"><div class="container py-4 d-flex flex-column flex-md-row justify-content-between gap-2"><div><strong>Media Pemrograman Web</strong><div class="small">Belajar terbuka • Web I & Web II</div></div><a class="small text-secondary" href="{{ route('about') }}">Tentang media pembelajaran</a></div></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script><script src="{{ asset('assets/js/app.js') }}"></script>@stack('scripts')
</body></html>