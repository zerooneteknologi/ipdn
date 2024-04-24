<?php

use App\Http\Controllers\AssesorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScemeController;
use App\Http\Controllers\LspController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('/sceme', ScemeController::class);
    Route::resource('/setting', SettingController::class);
    Route::resource('/assesor', AssesorController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::controller(LspController::class)->group(function () {
    Route::get('/registration', 'registration')->name('registration');
});
