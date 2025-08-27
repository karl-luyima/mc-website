<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $primaryKey = 'messageID';

    protected $fillable = ['name', 'email', 'message', 'status'];
}
