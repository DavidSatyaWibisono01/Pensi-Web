<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
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

Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/login', [AdminController::class, 'login']);
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('index')->with('success','Selamat Datang');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/cbt-wikrama', function () {
    return view('cbt');
});

Route::get('/dkv', function () {
    return view('rombel.dkv');
});
Route::get('/pplg', function () {
    return view('rombel.pplg');
});
Route::get('/tjkt', function () {
    return view('rombel.tjkt');
});
Route::get('/pemasaran', function () {
    return view('rombel.pemasaran');
});
Route::get('/hotel', function () {
    return view('rombel.hotel');
});
Route::get('/kuliner', function () {
    return view('rombel.kuliner');
});
Route::get('/mplb', function () {
    return view('rombel.mplb');
});
