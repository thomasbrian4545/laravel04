<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index']);
// Route::get('/mahasiswa', [PageController::class, 'tampil']);
Route::get('/coba-facade', [PageController::class, 'cobaFacade']);
Route::get('/coba-class', [PageController::class, 'cobaClass']);
Route::get('/coba-buah', [PageController::class, 'cobaBuah']);
Route::get('/coba-minuman', [PageController::class, 'cobaMinuman']);
Route::get('/mobil', [MobilController::class, 'merk']);

Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/dosen', [MahasiswaController::class, 'dosen'])->name('dosen');
Route::get('/gallery', [MahasiswaController::class, 'gallery'])->name('gallery');
Route::get('/informasi/{fakultas}/{jurusan}', [MahasiswaController::class, 'info'])->name('info');

Route::get('/produk', ProdukController::class);
