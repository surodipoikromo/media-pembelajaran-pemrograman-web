@extends('layouts.app')
@section('title','HTML/CSS Playground')
@section('content')<div class="container-fluid px-lg-5 py-5"><div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end gap-3 mb-4"><div><div class="eyebrow mb-2">Code Playground</div><h1 class="section-title mb-1">HTML + CSS Preview</h1><p class="text-secondary mb-0">Ubah kode lalu lihat hasilnya langsung. Kode hanya berjalan di browser kamu.</p></div><button id="run" class="btn btn-brand"><i class="fa-solid fa-play me-2"></i>Jalankan</button></div><div class="row g-4"><div class="col-lg-6"><textarea id="editor" class="playground-editor w-100"><!doctype html>
<html lang="id">
<head>
<style>
body { font-family: Arial, sans-serif; padding: 32px; background: #f5f7fb; }
.card { max-width: 420px; background: white; padding: 24px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,.08); }
h1 { color: #3157d5; }
</style>
</head>
<body>
<div class="card">
  <h1>Halo Web!</h1>
  <p>Edit kode di sebelah kiri lalu klik Jalankan.</p>
  <button>Mulai Belajar</button>
</div>
</body>
</html></textarea></div><div class="col-lg-6"><iframe id="preview" class="preview-frame" sandbox="allow-forms allow-modals"></iframe></div></div></div>@endsection
@push('scripts')<script>const e=document.getElementById('editor'),p=document.getElementById('preview');function run(){p.srcdoc=e.value}document.getElementById('run').onclick=run;run()</script>@endpush