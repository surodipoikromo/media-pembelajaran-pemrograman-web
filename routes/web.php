<?php
use App\Http\Controllers\LearningController;
use Illuminate\Support\Facades\Route;
Route::get('/', [LearningController::class,'home'])->name('home');
Route::get('/materi', [LearningController::class,'materials'])->name('materials');
Route::get('/materi/{slug}', [LearningController::class,'lesson'])->name('lesson');
Route::get('/praktikum', [LearningController::class,'practicum'])->name('practicum');
Route::get('/quiz', [LearningController::class,'quiz'])->name('quiz');
Route::get('/glosarium', [LearningController::class,'glossary'])->name('glossary');
Route::get('/playground', [LearningController::class,'playground'])->name('playground');
Route::get('/tentang', [LearningController::class,'about'])->name('about');
