<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Controllers\HomeController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [ProfilSekolahController::class, 'index']);
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);

