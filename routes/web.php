<?php

use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/explore', view: 'explore');
Route::view('/journals', view: 'journals');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/index-main', 'index-main');

Route::get('/signup', [RegisterUserController::class, 'create']);
Route::post('/signup', [RegisterUserController::class, 'store']);

