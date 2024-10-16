<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/explore', view: 'explore');
Route::view('/journals', view: 'journals');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/index-main', 'index-main');

Route::get('/signup', [RegisterUserController::class, 'create']);
Route::post('/signup', [RegisterUserController::class, 'store']);

Route::get(uri: '/login', action: [SessionController::class, 'create']);
Route::post('/login', action: [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
