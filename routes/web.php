<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\PesanController;
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

Route::get('/', [RegisterController::class, 'index'])->name('login');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/auth', [AdminController::class, 'auth']);
Route::get('/login', [AdminController::class, 'login']);


Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AdminController::class, 'logout']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/pengunjung', [PengunjungController::class, 'index']);
    Route::get('/instansi', [InstansiController::class, 'index']);
    Route::delete('/admin/pengunjungs/{id}', [AdminController::class, 'delete']);
    Route::get('/pengunjung/export', [PengunjungController::class, 'export']);
    Route::get('/pengunjung/active', [PengunjungController::class, 'active']);
    Route::get('/pengunjung/jurusan', [PengunjungController::class, 'Chartjurusan']);
    Route::get('/tracking/{id}', [PengunjungController::class, 'trackingIndex']);
});


Route::get('/desain-komunikasi-visual', [PengunjungController::class, 'dkv']);
Route::get('/pengembangan-perangkat-lunak-dan-gim', [PengunjungController::class, 'pplg']);
Route::get('/teknik-jaringan-komputer-dan-telekomunikasi', [PengunjungController::class, 'tjkt']);
Route::get('/pemasaran', [PengunjungController::class, 'pemasaran']);
Route::get('/hotel', [PengunjungController::class, 'hotel']);
Route::get('/kuliner', [PengunjungController::class, 'kuliner']);
Route::get('/manajemen-perkantoran-dan-layanan-bisnis', [PengunjungController::class, 'mplb']);

Route::get('/dashboard', function () {
    return view('index')->with('success','Selamat Datang');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/cbt-wikrama', function () {
    return view('cbt');
});

Route::resource('pesan', PesanController::class);

