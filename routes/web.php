<?php

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

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard', ['title' => 'dashboard']);
})->name('admin.dashboard.page');

Route::get('/login', function () {
    return view('pages.auth.login', ['title' => 'login']);
})->name('login');

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
