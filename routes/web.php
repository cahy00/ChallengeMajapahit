<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MerchandiseController;

Route::get('/', function () {
    return view('templates.main');
});

/**
 * *Route User
 */
Route::get('/user', [UserController::class, 'index'])->name('user.index');




/**
 * *Route Barang
 */
Route::get('/merchandise', [MerchandiseController::class, 'index'])->name('merchandise.index');
