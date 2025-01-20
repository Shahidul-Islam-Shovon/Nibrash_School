<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [FrontEndController::class, 'front_end_index'])->name('front');

Route::get('/home', [BackendController::class, 'back_end_index'])->name('back');
