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

// LANGKAH 1: Pilih Layanan
Route::get('/booking/layanan', function () {
    // Perhatikan titik di bawah, itu berarti masuk ke folder
    return view('booking-barber.layanan', ['title' => 'Booking - Pilih Layanan']);
})->name('booking.layanan');

// LANGKAH 2: Pilih Jadwal & Barber
Route::post('/booking/barber-pilih', function () {
    return view('booking-barber.pilih-barber', ['title' => 'Booking - Pilih Barber']);
})->name('booking.barber-pilih');

//pilih jam
// LANGKAH 3: PILIH JADWAL (MENERIMA POST DARI LANGKAH 2)
Route::post('/booking/jadwal', function () {
    return view('booking-barber.jadwal', ['title' => 'Booking - Pilih Jadwal']);
})->name('booking.jadwal');// ALUR BOOKING BARBER
// ==========================================
