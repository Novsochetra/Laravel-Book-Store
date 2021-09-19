<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function() {
    Route::get('book', [App\Http\Controllers\BookController::class, 'index'])->name('book.list');
    Route::get('book/create', [App\Http\Controllers\BookController::class, 'create'])->name('book.create');
    Route::post('book/store', [App\Http\Controllers\BookController::class, 'store'])->name('book.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
