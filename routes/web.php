<?php

use App\Helpers\Penilian;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KepegawaianController;
use App\Http\Controllers\PenilaianController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/refresh-captcha', [AuthController::class, 'refreshCaptcha']);
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');    
});
Route::group(['prefix' => 'kepegawaian'], function () {
    Route::get('/', [KepegawaianController::class, 'index'])->name('kepegawaian');    
    Route::get('/nonaktif/{id}', [KepegawaianController::class, 'nonaktif'])->name('nonaktif');
    Route::post('/post-tambah', [KepegawaianController::class, 'post_tambah'])->name('post-tambah');

    Route::get('/detail-pegawai/{id}', [PenilaianController::class, 'detail'])->name('detail-pegawai');
    Route::get('/ranking-pegawai/{id}/{tahun}', [PenilaianController::class, 'ranking'])->name('ranking-pegawai');
    Route::post('/post-nilai/{id}', [PenilaianController::class, 'post_nilai'])->name('post-nilai');
});

Route::group(['prefix' => 'penilaian'], function () {
    Route::get('/', [PenilaianController::class, 'index'])->name('penilaian');
    Route::get('/detail-pegawai/{id}', [PenilaianController::class, 'detail'])->name('detail-pegawai');
    Route::get('/ranking-pegawai/{id}/{tahun}', [PenilaianController::class, 'ranking'])->name('ranking-pegawai');
    Route::post('/post-nilai/{id}', [PenilaianController::class, 'post_nilai'])->name('post-nilai');
});


Route::get('/cek-nilai', function () {
   $nilai =  Penilian::hitung_total(23,2);
   return $nilai;
});    