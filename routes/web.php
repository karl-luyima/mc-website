<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

// Controllers
use App\Http\Controllers\MCController;
use App\Http\Controllers\ContactController;

// -------------------------------------
// Public Pages
// -------------------------------------
Route::get('/',        [MCController::class, 'index'])->name('home');
Route::get('/about',   [MCController::class, 'about'])->name('about');
Route::get('/services',[MCController::class, 'services'])->name('services');
Route::get('/gallery', [MCController::class, 'gallery'])->name('gallery');
Route::get('/contact', [MCController::class, 'contact'])->name('contact');

