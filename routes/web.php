<?php

use App\Http\Controllers\AccountController;
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


Route::get('/login/{type}', [AccountController::class, 'renderLogin'])->name('login.form');
Route::post('/login/{type}', [AccountController::class, 'accessAccount'])->name('login.submit');
Route::get('/register/{type}', [AccountController::class, 'renderRegister'])->name('register');
Route::post('/pack/{type}', [AccountController::class, 'renderSubscriptionPlan'])->name('register.pack');
