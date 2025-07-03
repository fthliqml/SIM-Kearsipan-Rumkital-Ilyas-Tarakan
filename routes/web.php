<?php

use App\Http\Controllers\ArsipMedisController;
use App\Http\Controllers\ArsipTUController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailBerkasController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\UnggahBerkasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page.index');
});
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/arsip-tu/{jenis}', [ArsipTUController::class, 'index'])->name('arsip-tu.index');
Route::get('/arsip-medis/{jenis}', [ArsipMedisController::class, 'index'])->name('arsip-medis.index');
Route::get('/unggah-berkas', [UnggahBerkasController::class, 'index']);
Route::get('/detail-berkas', [DetailBerkasController::class, 'index']);
Route::get('/referensi-5-tahun', [ReferensiController::class, 'index']);
Route::get('/pencarian', [PencarianController::class, 'index']);

