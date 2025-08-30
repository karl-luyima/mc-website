<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Use the default "id" primary key (no need to override)
    
    protected $fillable = [
        'name',
        'email',
        'message',
        'status',
    ];
}
