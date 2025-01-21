<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FeaturedNewsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [FrontEndController::class, 'front_end_index'])->name('front');

Route::get('/home', [BackendController::class, 'back_end_index'])->name('back');

// fetured news
Route::get('/featured-news', [FeaturedNewsController::class, 'show_form'])->name('featured_news.form');

Route::post('/featured-news-insert', [FeaturedNewsController::class, 'insert_news'])->name('featured_news.insert');

Route::get('/featured-news', [FeaturedNewsController::class, 'show_news'])->name('featured_news.form');