<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

//Halaman langsung ke login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Protect halaman products supaya tidak bisa diakses tanpa login
Route::middleware('auth')->group(function(){
    Route::resource('products', ProductController::class);
});