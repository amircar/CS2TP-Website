<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', action: [ProductController::class, 'products4']);

Route::get('/mens', function(){
    return view('mens');
});

Route::get('/mens', action: [ProductController::class, 'products3']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/about-us', function(){
    return view('about-us');
});