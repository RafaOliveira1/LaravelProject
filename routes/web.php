<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class,'index']);
Route::get('/blog/create', [BlogController::class,'create']);
Route::post('/blog/store', [BlogController::class,'store']);
Route::get('/blog/{id}', [BlogController::class, 'show']);
