<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AssesorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScemeController;
use App\Http\Controllers\LspController;
use App\Http\Controllers\MisionController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VisionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('web.home');
// }); d2d5d8

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/sceme', ScemeController::class);
    Route::resource('/setting', SettingController::class);
    Route::resource('/assesor', AssesorController::class);
    Route::resource('/partner', PartnerController::class)->except([
        'create',
        'show',
        'edit',
    ]);
    Route::resource('/article', ArticleController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/vision', VisionController::class)->only([
        'index',
        'update',
    ]);
    Route::resource('/mision', MisionController::class)->only([
        'store',
        'update',
        'destroy',
    ]);
});

Route::controller(LspController::class)->group(function () {
    Route::get('/', 'index')->name('web');
    Route::get('/registration', 'registration')->name('registration');
    Route::get('/assesors', 'assesors')->name('assesors');
    Route::get('/assesors/{assesor:assesor_slug}', 'assesorsingle')->name(
        'assesorsingle'
    );
    Route::get('/search', 'search')->name('search');
    Route::get('/scemes', 'scemes')->name('scemes');
    Route::get('/viepdf/{sceme_slug}', 'viepdf')->name('viepdf');
    Route::get('/scemes/{sceme:sceme_slug}', 'scemesingle')->name(
        'scemesingle'
    );
    Route::get('/articles', 'articles')->name('articles');
    Route::get('/articles/{article:article_slug}', 'articlesingle')->name(
        'articlesingle'
    );
    Route::get('/mision', 'mision')->name('mision');
    Route::get('download/{article:article_slug}', 'download')->name('download');
});
