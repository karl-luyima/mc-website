<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MCController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

// ----------------------------
// Public Pages
// ----------------------------
Route::get('/', [MCController::class, 'index'])->name('home');
Route::get('/about', [MCController::class, 'about'])->name('about');
Route::get('/services', [MCController::class, 'services'])->name('services');
Route::get('/gallery', [MCController::class, 'gallery'])->name('gallery');
Route::get('/contact', [MCController::class, 'contact'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// ----------------------------
// Public Booking Form
// ----------------------------
Route::get('/book', [BookingController::class, 'showBookingForm'])->name('booking.form');
Route::post('/book', [BookingController::class, 'store'])->name('booking.submit');

// ----------------------------
// MC Login & Logout
// ----------------------------
Route::get('/login', [MCController::class, 'showLogin'])->name('admin.login');
Route::post('/login', [MCController::class, 'login'])->name('admin.login.submit');
Route::post('/logout', [MCController::class, 'logout'])->name('admin.logout');

// ----------------------------
// Admin Routes (Protected)
// ----------------------------
Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Bookings Management
    Route::get('/bookings', [BookingController::class, 'adminIndex'])->name('bookings');
    Route::post('/bookings/{id}/status', [BookingController::class, 'updateStatus'])->name('bookings.status');

    // Messages Management
    Route::get('/messages', [AdminController::class, 'adminMessages'])->name('messages');
    Route::post('/messages/{id}/reply', [AdminController::class, 'replyMessage'])->name('messages.reply');
    Route::post('/messages/{id}/read', [AdminController::class, 'markRead'])->name('messages.read');

    Route::post('/admin/bookings/{id}/status', [AdminController::class, 'updateBookingStatus'])
    ->name('admin.bookings.status');

});
