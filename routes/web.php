<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FeaturedNewsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpcomingEventsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [FrontEndController::class, 'front_end_index'])->name('front');

Route::get('/home', [BackendController::class, 'back_end_index'])->name('back');

// fetured news
Route::get('/featured-news', [FeaturedNewsController::class, 'show_form'])->name('featured_news.form');

Route::post('/featured-news-insert', [FeaturedNewsController::class, 'insert_news'])->name('featured_news.insert');

Route::get('/featured-news', [FeaturedNewsController::class, 'show_news'])->name('featured_news.form');

Route::get('/featured-news/edit/{id}', [FeaturedNewsController::class, 'edit_news'])->name('featured_news.edit');

Route::post('/featured-news/update/{id}', [FeaturedNewsController::class, 'update_news'])->name('featured_news.update');

Route::delete('/featured-news/delete/{id}', [FeaturedNewsController::class, 'destroy_news'])->name('notice.destroy');


//upcoming events

Route::get('/upcoming_events', [UpcomingEventsController::class, 'show_form'])->name('events.show.form');

Route::post('/upcoming_events/store', [UpcomingEventsController::class, 'store_form'])->name('events.store');