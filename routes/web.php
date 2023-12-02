<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


// HOME
Route::get('/', function () {
    return view('home');
});

// JELAJAHI
Route::get('/jelajah-bukit', function () {
    return view('jelajahi.jelajah_bukit');
});

Route::get('/galeri', function () {
    return view('jelajahi.galeri');
});

Route::get('/rekomendasi', function () {
    return view('jelajahi.rekomendasi');
});

Route::get('/profil', function () {
    return view('jelajahi.profile');
});

// DESTINASI
Route::get('/area-keluarga', function () {
    return view('destinasi.area-keluarga');
});

Route::get('/area-kafe', function () {
    return view('destinasi.area-kafe');
});

Route::get('/area-foto', function () {
    return view('destinasi.area-foto');
});

Route::get('/camping-ground', function () {
    return view('destinasi.camping-ground');
});

// RESERVASI
Route::get('/reservasi-kafe', function () {
    return view('reservasi.meja_kafe');
});

Route::get('/reservasi-meja', function () {
    return view('reservasi.pemesanan_meja');
});

Route::get('/tiket-online', function () {
    return view('reservasi.tiket-online');
});

Route::get('/pemesanan-tiket', function () {
    return view('reservasi.pemesanan_tiket');
});

// PAGES
Route::get('/informasi', function () {
    return view('pages.informasi');
});

Route::get('/riwayat', function () {
    return view('pages.riwayat');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
