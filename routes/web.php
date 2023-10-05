<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function() {
    return view('posts.index');
});


Route::get('/', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);