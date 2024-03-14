<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'home'])
    ->name('home');

Route::get('/login', [AuthController::class, 'login'])
    ->name('users.login');

Route::get('/register', [AuthController::class, 'register'])
    ->name('users.register');
