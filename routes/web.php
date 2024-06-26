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
    return view('index');
})->name('home');

Route::get('/books', function () {
    return view('books');
})->name('books.search');

Route::get('/book/{id}', function () {
    return view('book-details');
})->name('book');

Route::get('/register/{type}', function ($type = 'reader') {
    return view("register", compact('type'));
})->name('register');

Route::post('/pack/{type}', function ($type) {
    return view('packs', compact('type'));
})->name('register.pack');
