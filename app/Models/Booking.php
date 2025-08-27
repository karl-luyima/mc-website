<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'bookingID';

    protected $fillable = [
        'name', 'email', 'phone', 'event_type', 'event_date', 'message', 'status'
    ];
}

