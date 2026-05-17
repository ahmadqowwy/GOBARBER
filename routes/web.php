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
    return view('detail-toko', ['title' => 'detail-toko']);
})->name('detail-toko');
