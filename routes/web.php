<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UIController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\WriterController;
use Illuminate\Http\Request;
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

Route::group(['middleware' => 'onlyAuth'], function () {
    Route::get('/logout', function () {
        session()->flush();
        return redirect()->route('home');
    })->name('logout');

    Route::get('book/upload', [UIController::class, 'renderBookUpload'])->name('book.upload');
    Route::post('book/upload', [BookController::class, 'storeBook'])->name('book.upload');

    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/statistics', [UIController::class, 'renderAdminStats'])->name('stats');
        Route::get('/readers', [UIController::class, 'renderAdminReaders'])->name('readers');
        Route::get('/writers', [UIController::class, 'renderAdminWriters'])->name('writers');
        Route::get('/books', [UIController::class, 'renderAdminBooks'])->name('books');
    });
});

Route::group(['middleware' => 'onlyGuest'], function () {
    Route::get('/login/{type}', [UIController::class, 'renderLogin'])->name('login.form');
    Route::post('/login/reader', [ReaderController::class, 'accessAccount'])->name('login.reader.submit');
    Route::post('/login/writer', [WriterController::class, 'accessAccount'])->name('login.writer.submit');
    Route::post('/login/admin', [AdminController::class, 'accessAccount'])->name('login.admin.submit');
    Route::get('/register/{type}', [UIController::class, 'renderRegister'])->name('register');
    Route::post('/register/reader', [ReaderController::class, 'storeTemp'])->name('register.reader.storeTemp');
    Route::post('/register/writer', [WriterController::class, 'storeTemp'])->name('register.writer.storeTemp');
    Route::post('/register/reader/submit', [ReaderController::class, 'create'])->name('register.reader.submit');
    Route::post('/register/writer/submit', [WriterController::class, 'create'])->name('register.writer.submit');
    Route::get('/plan/{type}', [UIController::class, 'renderSubscriptionPlan'])->name('register.plan');
});

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/books', function () {
    return view('books');
})->name('books.search');

Route::get('/book/display', function () {
    return view('book-details');
})->name('book.display');
