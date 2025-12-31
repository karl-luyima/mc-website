<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

// Controllers
use App\Http\Controllers\MCController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

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
// MC/Admin Login & Logout
// ----------------------------
Route::get('/login', [MCController::class, 'showLogin'])->name('admin.login');
Route::post('/login', [MCController::class, 'login'])->name('admin.login.submit');
Route::post('/logout', [MCController::class, 'logout'])->name('admin.logout');

// ----------------------------
// MC/Admin Registration (public, for one-person setup)
// ----------------------------
Route::get('/register', [MCController::class, 'showRegister'])->name('admin.register');
Route::post('/register', [MCController::class, 'register'])->name('admin.register.submit');

// ----------------------------
// Admin Password Reset Routes (accessible without auth)
// ----------------------------
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
        Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
    });

// ----------------------------
// Admin Routes (Protected with 'admin.auth' middleware)
// ----------------------------
Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin.auth')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // Bookings Management
        Route::get('/bookings', [BookingController::class, 'adminIndex'])->name('bookings');
        Route::post('/bookings/{id}/status', [AdminController::class, 'updateBookingStatus'])->name('bookings.status');

        // Messages Management
        Route::get('/messages', [AdminController::class, 'adminMessages'])->name('messages');
        Route::post('/messages/{id}/reply', [AdminController::class, 'replyMessage'])->name('messages.reply');
        Route::post('/messages/{id}/read', [AdminController::class, 'markRead'])->name('messages.read');

        // Test Email
        Route::get('/test-email', function () {
            try {
                $toEmail = config('mail.from.address');
                Mail::raw('This is a test email from Laravel using Gmail SMTP.', function ($message) use ($toEmail) {
                    $message->to($toEmail)->subject('Laravel Gmail SMTP Test');
                });
                return "✅ Email sent successfully to {$toEmail}!";
            } catch (\Exception $e) {
                return "❌ Error sending email: " . $e->getMessage();
            }
        });
    });
