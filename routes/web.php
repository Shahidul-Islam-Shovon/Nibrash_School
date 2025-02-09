<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\FeaturedNewsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\InsidePageManageController;
use App\Http\Controllers\TecherSectionController;
use App\Http\Controllers\UpcomingEventsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [FrontEndController::class, 'front_end_index'])->name('front');

Route::get('/admin/dashboard', [BackendController::class, 'back_end_index'])->name('back')->middleware('auth');

// for login

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('back')->with('message', 'আপনি ইতোমধ্যে লগিন অবস্থায় আছেন');
    }
    return view('auth.login');
})->name('login');

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

// inside page linking 

Route::get('/Teachers-list/all', [InsidePageManageController::class, 'see_page_teacher'])->name('see_page.teachers');

Route::get('/Notice/single/{id}', [InsidePageManageController::class, 'single_notice'])->name('see_page.notices.single');

Route::get('/Events/single/{id}', [InsidePageManageController::class, 'single_events'])->name('see_page.events.single');
