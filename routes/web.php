<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScemeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/sceme', ScemeController::class);
