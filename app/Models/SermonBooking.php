<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SermonBooking extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'sermon_day_id',
        'description',
        'status',
        'booked_by_id',
    ];
}
