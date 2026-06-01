<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
})->name('home');

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog'
    ]);
})->name('blog');

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
})->name('about');



/*
|--------------------------------------------------------------------------
| DETAIL TOKO
|--------------------------------------------------------------------------
*/

Route::get('/detail-toko', function () {
    return view('detail-toko.detail-toko', [
        'title' => 'Detail Toko'
    ]);
})->name('detail-toko');

Route::get('/layanan', function () {
    return view('detail-toko.layanan-toko', [
        'title' => 'Layanan'
    ]);
})->name('layanan');

Route::get('/produk', function () {
    return view('detail-toko.produk-toko', [
        'title' => 'Produk'
    ]);
})->name('produk-toko');

Route::get('/data-barber', function () {
    return view('detail-toko.data-barber', [
        'title' => 'Data Barber'
    ]);
})->name('data-barber');

Route::get('/detail-produk/{id}', function ($id) {
    return view('detail-toko.detail-produk', [
        'title' => 'Detail Produk'
    ]);
})->name('detail-produk');



/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    return view('base-client.register', [
        'title' => 'Register'
    ]);
})->name('register');

Route::get('/register-admin', function () {
    return view('base-admin.register-admin', [
        'title' => 'Register Admin'
    ]);
})->name('register-admin');
Route::get('/booking-barber/layanan', function () {
    return view('booking-barber.layanan');
})->name('layanan');
// ==========================================
// ALUR BOOKING (KEBERLANJUTAN)
// ==========================================

// ==========================================
// ALUR BOOKING BARBER
// ==========================================

// LANGKAH 1 - PILIH LAYANAN
Route::get('/booking/layanan', function () {
    return view('booking-barber.layanan', [
        'title' => 'Booking - Pilih Layanan'
    ]);
})->name('booking.layanan');


// LANGKAH 2 - PILIH BARBER
Route::post('/booking/barber-pilih', function () {
    return view('booking-barber.barber-pilih', [
        'title' => 'Booking - Pilih Barber'
    ]);
})->name('booking.jadwal');


// LANGKAH 3 - PILIH JADWAL
Route::post('/booking/jadwal', function () {
    return view('booking-barber.jadwal', [
        'title' => 'Booking - Pilih Jadwal'
    ]);
})->name('booking.step3');


// LANGKAH 4 - KONFIRMASI
Route::post('/booking/konfirmasi', function () {
    return view('booking-barber.konfirmasi', [
        'title' => 'Booking - Konfirmasi'
    ]);
})->name('booking.konfirmasi');


// LANGKAH 5 - SUKSES
Route::post('/booking/sukses', function () {
    return view('booking-barber.sukses', [
        'title' => 'Booking Berhasil'
    ]);
})->name('booking.sukses');