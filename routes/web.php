<?php

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);