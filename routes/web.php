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
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');




/**
 * *Route Barang
 */
Route::get('/merchandise', [MerchandiseController::class, 'index'])->name('merchandise.index');


/**
 * *Route Transaction
 */
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::get('/transaction/create', [TransactionController::class, 'create'])->name('transaction.create');
Route::post('/transaction/store', [TransactionController::class, 'store'])->name('transaction.store');

