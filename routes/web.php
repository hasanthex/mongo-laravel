<?php

Auth::routes();
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book', [BookController::class, 'index'])->name('item');
Route::post('/book/saveBook', [BookController::class, 'saveBook'])->name('saveBook');
Route::get('/book-add', [BookController::class, 'index'])->name('item');
