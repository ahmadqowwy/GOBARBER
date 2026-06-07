<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBarberController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManajemenUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
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

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
})->name('blog');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('about');
Route::get('/detail-toko', function () {
    return view('detail-toko.detail-toko', ['title' => 'detail-toko']);
})->name('detail-toko');


Route::get('/layanan', function () {
    return view('detail-toko.layanan-toko', ['title' => 'Layanan']);
})->name('layanan');

Route::get('/produk', function () {
    return view('detail-toko.produk-toko', ['title' => 'Produk']);
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

    //route manajemen GoBarberShop
    Route::get('/manajemen-shop', [DataBarberController::class, 'getBarberShop'])->name('admin.shop.index');

    //route manajemen Owner
    Route::get('/manajemen-owner/{owner_id}', [DataBarberController::class, 'getOwner'])->name('admin.owner.index');

});
