<?php

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ReviewController;
use App\Http\Controllers\frontend\TermController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('review', ReviewController::class);
Route::resource('term', TermController::class);
Route::resource('contact', ContactController::class);