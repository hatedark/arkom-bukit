<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\ReservationController;

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

Route::middleware('auth')->group(function () {
    Route::get('/reservasi-meja', [ReservationController::class, 'showForm'])->name('show_reservation_form');
    Route::post('/reservasi-meja', [ReservationController::class, 'submitReservation'])->name('submit_reservation');
});

Route::get('/tiket-online', function () {
    return view('reservasi.tiket-online');
});

Route::middleware('auth')->group(function () {
    Route::view('/pemesanan-tiket', 'reservasi.pemesanan_tiket')->name('pemesanan_tiket');
    Route::post('/submit-tiket', [TiketController::class, 'submitTiket'])->name('submit_tiket');
});

// PAGES
Route::get('/informasi', function () {
    return view('pages.informasi');
});

Route::middleware('auth')->group(function () {
    Route::resource('/riwayat', TiketController::class);
});

// Route::get('/riwayat', function () {
//     return view('pages.riwayat');
// });

// Route::get('/struk', function () {
//     return view('pages.struk');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::get('/reservasi-meja', function () {
    return view('reservasi.pemesanan_meja');
});*/

/*Route::get('/pemesanan-tiket', function () {
    return view('reservasi.pemesanan_tiket');
});*/