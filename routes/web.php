<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/kurikulum', function () {
    return view('kurikulum.kurikulum');
});

Route::get('/berita', function () {
    return view('berita.berita');
});

Route::get('/dazmi', function () {
    return view('dazmi.dazmi');
});
Route::get('/pengajar', function () {
    return view('pengajar.pengajar');
});
Route::get('/pimpinan', function () {
    return view('pimpinan.pimpinan');
});
Route::get('/pengajar', function () {
    return view('pengajar.pengajar');
});
Route::get('/milestone', function () {
    return view('milestone.milestone');
});
Route::get('/kontak', function () {
    return view('kontak.kontak');
});
Route::get('/gallery', function () {
    return view('gallery.gallery');
});
Route::get('/sarana', function () {
    return view('sarana.sarana');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
