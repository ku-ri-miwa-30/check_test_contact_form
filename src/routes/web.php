<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

Route::get('/', [ContactController::class, 'input']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'login_check']);

Route::get('/admin', [ContactController::class, 'admin']);
