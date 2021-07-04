<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book', [App\Http\Controllers\BookController::class, 'index'])->name('item');
Route::get('/book-add', [App\Http\Controllers\BookController::class, 'index'])->name('item');
