<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBarberController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
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

Route::get('/detail-produk/{id}', function ($id) {

    return view('detail-toko.detail-produk', ['title' => 'Detail Produk']);
})->name('detail-produk');
Route::get('/detail-toko', function () {
    return view('detail-toko.detail-toko', ['title' => 'Detail Toko']);
})->name('detail-toko');



// miiddleware untuk user yang belum login
Route::middleware('guest')->group(function () {
    //route pannel admin
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', [LoginController::class, 'login'])->name('do.login');
});


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard.page');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //route Manajemen User
    Route::get('/manajemen-user', [ManajemenUserController::class, 'index'])
        ->name('admin.manajemen.user.page');
    Route::delete('/user/{id}', [ManajemenUserController::class, 'destroy'])
        ->name('user.delete');

    // Route Manajemen Toko
    Route::resource('shop', ShopController::class);
    Route::resource('barber', BarberController::class);
    Route::resource('service', ServiceController::class);

    // Route Transaksi & Info
    Route::resource('customer', CustomerController::class)->only(['index', 'show']);
    Route::resource('booking', BookingController::class)->only(['index', 'show', 'update']);
    Route::resource('payment', PaymentController::class)->only(['index', 'show']);

});
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