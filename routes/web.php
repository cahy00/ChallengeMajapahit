<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
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


/**
 * *Route Transaction
 */
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::get('/transaction/create', [TransactionController::class, 'create'])->name('transaction.create');
Route::get('/transaction/merc/{id}', [TransactionController::class, 'create'])->name('transaction.merc');

