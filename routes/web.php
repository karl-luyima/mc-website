<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MCController;
use App\Http\Controllers\BookingController;

// Public pages
Route::get('/', [MCController::class, 'index'])->name('home');
Route::get('/about', [MCController::class, 'about'])->name('about');
Route::get('/services', [MCController::class, 'services'])->name('services');
Route::get('/gallery', [MCController::class, 'gallery'])->name('gallery');
Route::get('/contact', [MCController::class, 'contact'])->name('contact');
Route::post('/contact/send', [MCController::class, 'sendMessage'])->name('contact.send');

// Public booking form
Route::get('/book', [BookingController::class, 'showBookingForm'])->name('booking.form');
Route::post('/book', [BookingController::class, 'store'])->name('booking.submit');

// MC Login & Logout
Route::get('/login', [MCController::class, 'showLogin'])->name('admin.login');
Route::post('/login', [MCController::class, 'login'])->name('admin.login.submit');
Route::post('/logout', [MCController::class, 'logout'])->name('admin.logout');

// Admin routes (protected by session check inside controller)
Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [MCController::class, 'adminDashboard'])->name('dashboard');

    // Bookings management
    Route::get('/bookings', [BookingController::class, 'adminIndex'])->name('bookings');
    Route::post('/bookings/{id}/status', [BookingController::class, 'updateStatus'])->name('bookings.status');

    // Messages management
    Route::get('/messages', [MCController::class, 'adminMessages'])->name('messages');
    Route::post('/messages/{id}/reply', [MCController::class, 'replyMessage'])->name('messages.reply');
});
