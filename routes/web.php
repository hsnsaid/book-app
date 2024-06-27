<?php

use App\Http\Controllers\UIController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\WriterController;
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

Route::get('/logout', function () {
    session()->flush();
    return redirect()->route('home');
})->name('logout');


Route::get('/login/{type}', [UIController::class, 'renderLogin'])->name('login.form');
Route::post('/login/reader', [ReaderController::class, 'accessAccount'])->name('login.reader.submit');
Route::post('/login/writer', [WriterController::class, 'accessAccount'])->name('login.writer.submit');
Route::get('/register/{type}', [UIController::class, 'renderRegister'])->name('register');
Route::post('/register/reader', [ReaderController::class, 'storeTemp'])->name('register.reader.storeTemp');
Route::post('/register/writer', [WriterController::class, 'storeTemp'])->name('register.writer.storeTemp');
Route::post('/register/reader/submit', [ReaderController::class, 'create'])->name('register.reader.submit');
Route::post('/register/writer/submit', [ReaderController::class, 'create'])->name('register.writer.submit');
Route::get('/plan/{type}', [UIController::class, 'renderSubscriptionPlan'])->name('register.plan');


Route::get('/books', function () {
    return view('books');
})->name('books.search');

Route::get('/book/{id}', function () {
    return view('book-details');
})->name('book');
