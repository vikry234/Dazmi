<?php

use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SaranasController;
use App\Http\Controllers\VideoController;
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

Route::get('/', [AppController::class, 'index'])->name('home');

Route::get('home-slider', [SliderController::class, 'index']);
Route::get('add-slider', [SliderController::class, 'create']);
Route::post('store-slider', [SliderController::class, 'store']);
Route::get('edit-slider/{id}', [SliderController::class, 'edit']);
Route::put('update-slider/{id}', [SliderController::class, 'update']);


Route::get('/kurikulum', function () {
    return view('kurikulum.kurikulum');
});

Route::get('/berita', [AppController::class, 'berita']);

Route::get('/detail/{slug}', [AppController::class, 'detail']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/dazmi', function () {
    return view('dazmi.dazmi');
});

Route::get('/visi', function () {
    return view('visi.visi');
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
Route::get('/gallery', [AppController::class, 'gallery']);

Route::get('/sarana', [AppController::class, 'sarana']);

Route::get('/search', 'App\Http\Controllers\ArtikelController@search')->name('search');
Route::get('/searchyt', 'App\Http\Controllers\YoutubeController@searchyt')->name('searchyt');

Route::get('/youtube', [AppController::class, 'youtube']);


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');

Route::get('/video', [VideoController::class, 'index'])->name('video')->middleware('auth');
Route::post('/video/store', [videoController::class, 'store'])->name('video.store')->middleware('auth');
Route::post('/video/update/{id}', [videoController::class, 'update'])->name('video.update')->middleware('auth');
Route::post('/video/destroy/{id}', [videoController::class, 'destroy'])->name('video.destroy')->middleware('auth');

Route::get('/saranas', [SaranasController::class, 'index'])->name('saranas')->middleware('auth');
Route::post('/saranas/store', [SaranasController::class, 'store'])->name('saranas.store')->middleware('auth');
Route::post('/saranas/update/{id}', [SaranasController::class, 'update'])->name('saranas.update')->middleware('auth');
Route::post('/saranas/destroy/{id}', [SaranasController::class, 'destroy'])->name('saranas.destroy')->middleware('auth');
