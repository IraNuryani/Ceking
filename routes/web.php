<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/artikel', function () {
    return view('artikel', [
        "title" => "Artikel"
    ]);
});

// Route::get('/makanan-sehat', function () {
//     return view('rekomendasi makanan', [
//         "title" => "Makanan Sehat"
//     ]);
// });

Route::get('/anak', function () {
    return view('anak', [
        "title" => "Anak"
    ]);
});

// Route::get('/grafik-pertumbuhan', function () {
//     return view('grafik pertumbuhan', [
//         "title" => "grafik Pertumbuhan"
//     ]);
// });

// Route::get('/konsultasi', function () {
//     return view('konsultasi', [
//         "title" => "konsultasi"
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/beranda', function(){
    return view('beranda.index', [
        'title' => 'Beranda',
        'active' => 'beranda'
    ]);
})->middleware('auth');