<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * Fields that can be safely filled from request data.
     */
    protected $fillable = [
        'order_number',
        'author',
        'message',
    ];
}