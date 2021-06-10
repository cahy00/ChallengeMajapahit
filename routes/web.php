<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('templates.main');
});

/**
 * Route User
 */
Route::get('/user', [UserController::class, 'index'])->name('user.index');