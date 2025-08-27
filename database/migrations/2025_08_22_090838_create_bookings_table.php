<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
        $table->id('bookingID');
        $table->string('name');
        $table->string('email');
        $table->string('phone');
        $table->string('event_type');
        $table->date('event_date');
        $table->text('message')->nullable();
        $table->string('status')->default('Pending'); // NEW: Pending, Approved, Rejected
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
