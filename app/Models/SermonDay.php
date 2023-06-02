<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SermonDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'date',
    ];

    // Related Booking Data
    public function sermonBookingData()
    {
        return $this->hasOne('App\Models\SermonBooking', 'sermon_day_id', 'id');
    }
}
