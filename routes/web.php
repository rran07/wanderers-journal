<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Livewire\DropdownMenu;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $articles = Article::latest()->paginate(4);

    return view('blog.index', ['articles' => $articles]);
});


Route::view('/explore', view: 'blog.explore');
Route::view('/journals', view: 'blog.journals');
Route::view('/about', 'blog.about');
Route::view('/contact', 'blog.contact');
Route::view('/index-main', 'blog.index-main');

Route::middleware('guest')->group(function () {
    Route::get('/signup', [RegisterUserController::class, 'create']);
    Route::post('/signup', [RegisterUserController::class, 'store']);

    Route::get(uri: '/login', action: [SessionController::class, 'create']);
    Route::post('/login', action: [SessionController::class, 'store']);
});

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
