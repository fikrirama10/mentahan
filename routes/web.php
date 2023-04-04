<?php

use App\Helpers\Penilian;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KepegawaianController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\ProfileController;
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
    Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
});
Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', function () {
        return view('welcome', [
            'title' => 'Dashboard',
            'id' => 'dashboard'
        ]);
    })->name('home');

    Route::group(['prefix' => 'profil'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profil');
        Route::get('/ganti-password', [ProfileController::class, 'ganti_password'])->name('ganti-password');
    });
    Route::group(['prefix' => 'kepegawaian'], function () {
        Route::get('/{aktif?}', [KepegawaianController::class, 'index'])->name('kepegawaian');
        Route::get('/nonaktif/{id}', [KepegawaianController::class, 'nonaktif'])->name('nonaktif');
        Route::get('/aktif/{id}', [KepegawaianController::class, 'aktif'])->name('aktif');
        Route::get('/edit-pegawai/{id}', [KepegawaianController::class, 'edit_pegawai'])->name('edit-pegawai');
        Route::post('/post-tambah', [KepegawaianController::class, 'post_tambah'])->name('post-tambah');

        Route::get('/detail-pegawai/{id}', [PenilaianController::class, 'detail'])->name('detail-pegawai');
        Route::get('/ranking-pegawai/{id}/{tahun}', [PenilaianController::class, 'ranking'])->name('ranking-pegawai');
        Route::post('/post-nilai/{id}', [PenilaianController::class, 'post_nilai'])->name('post-nilai');
        Route::post('/post-passsword', [KepegawaianController::class, 'post_password'])->name('post.password');
    });

    Route::group(['prefix' => 'laporan'], function () {
        Route::get('/', [LaporanController::class, 'index'])->name('laporan');
        Route::get('/lihat-laporan/{tahun}/{kode_absen}', [LaporanController::class, 'lihat_laporan'])->name('lihat-laporan');
        Route::post('/print-laporan', [LaporanController::class, 'print_laporan'])->name('print-laporan');
    });
    Route::group(['prefix' => 'kriteria'], function () {
        Route::get('/', [KriteriaController::class, 'index'])->name('kriteria');
        Route::get('/edit-kriteria/{id}', [KriteriaController::class, 'edit'])->name('edit-kriteria');
        Route::post('/post-edit/{id}', [KriteriaController::class, 'post_edit'])->name('post-edit');
    });
    Route::group(['prefix' => 'penilaian'], function () {
        Route::get('/', [PenilaianController::class, 'index'])->name('penilaian');
        Route::get('/detail-pegawai/{id}', [PenilaianController::class, 'detail'])->name('detail-pegawai');
        Route::get('/ranking-pegawai/{id}/{tahun}', [PenilaianController::class, 'ranking'])->name('ranking-pegawai');
        Route::post('/post-nilai/{id}', [PenilaianController::class, 'post_nilai'])->name('post-nilai');
    });
});



Route::get('/cek-nilai', function () {
    $nilai =  Penilian::hitung_total(23, 2);
    return $nilai;
});
