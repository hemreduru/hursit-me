<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

Route::middleware(['web', \App\Http\Middleware\SetLocale::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
});
