<?php

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

Route::get('/', function () {
<<<<<<< HEAD
    return view('home', ['title' => 'Home Page']);
=======
    return view('home', ['title' => 'Home']);
>>>>>>> qowwy
})->name('home');

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
})->name('blog');
<<<<<<< HEAD
Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
})->name('about');
=======

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('about');
>>>>>>> qowwy
