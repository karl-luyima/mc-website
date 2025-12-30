<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MCController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Mail;

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
// MC Login & Logout (Custom Admin Auth)
// ----------------------------
Route::get('/login', [MCController::class, 'showLogin'])->name('admin.login');
Route::post('/login', [MCController::class, 'login'])->name('admin.login.submit');
Route::post('/logout', [MCController::class, 'logout'])->name('admin.logout');

// ----------------------------
// Admin Routes (Protected with custom middleware 'admin.auth')
// ----------------------------
Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin.auth') // Make sure you have this middleware
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // Bookings Management
        Route::get('/bookings', [BookingController::class, 'adminIndex'])->name('bookings');
        Route::post('/bookings/{id}/status', [AdminController::class, 'updateBookingStatus'])
            ->name('bookings.status');

        // Messages Management
        Route::get('/messages', [AdminController::class, 'adminMessages'])->name('messages');
        Route::post('/messages/{id}/reply', [AdminController::class, 'replyMessage'])->name('messages.reply');
        Route::post('/messages/{id}/read', [AdminController::class, 'markRead'])->name('messages.read');

        // Test Email
        Route::get('/test-email', function () {
            try {
                $toEmail = config('mail.from.address');

                Mail::raw('This is a test email from Laravel using Gmail SMTP.', function ($message) use ($toEmail) {
                    $message->to($toEmail)
                        ->subject('Laravel Gmail SMTP Test');
                });

                return "✅ Email sent successfully to {$toEmail}!";
            } catch (\Exception $e) {
                return "❌ Error sending email: " . $e->getMessage();
            }
        });
    });
