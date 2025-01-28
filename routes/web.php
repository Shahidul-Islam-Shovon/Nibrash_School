<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\FeaturedNewsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentEnrollController;
use App\Http\Controllers\TecherSectionController;
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

Route::get('/upcoming_events', [UpcomingEventsController::class, 'show_all_events'])->name('events.show.form');

Route::get('/upcoming_events/edit/{id}', [UpcomingEventsController::class, 'edit_events'])->name('events.edit.form');

Route::post('/upcoming_events/update/{id}', [UpcomingEventsController::class, 'update_events'])->name('events.update.form');

Route::delete('/upcoming_events/destroy/{id}', [UpcomingEventsController::class, 'destroy_events'])->name('event.destroy');


// student Enroll Form
Route::get('/enrollments', [EnrollmentController::class, 'index'])->name('enrollments.index'); // শিক্ষার্থীদের তালিকা দেখাবে

Route::post('/enroll', [EnrollmentController::class, 'store'])->name('enroll.store'); // নতুন শিক্ষার্থী এনরোল করবে

Route::get('/enrollment/{id}', [EnrollmentController::class, 'show'])->name('enrollment.show'); // নির্দিষ্ট শিক্ষার্থীর তথ্য দেখাবে

// teacher manage
Route::get('/teacher/create', [TecherSectionController::class, 'show_form'])->name('teacher.create'); 

Route::post('/teacher/store', [TecherSectionController::class, 'store_form'])->name('teacher.store'); 

Route::get('/teacher/edit/form/{id}', [TecherSectionController::class, 'edit_form'])->name('teacher.edit'); 

Route::delete('/teacher/trash/{id}', [TecherSectionController::class, 'destroy_teacher'])->name('teacher.destroy'); 


