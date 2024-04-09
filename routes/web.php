<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('users');
Route::get('/get-users', [UserController::class, 'getUsers'])->name('get.users');


