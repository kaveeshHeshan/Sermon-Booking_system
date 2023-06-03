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

    // Related Sermon Day Data
    public function sermonDayData()
    {
        return $this->belongsTo('App\Models\SermonDay', 'sermon_day_id', 'id');
    }

    // Related Sermon Booked User Data
    public function sermonBookedUserData()
    {
        return $this->belongsTo('App\Models\UserProfile', 'booked_by_id', 'user_id');
    }

    // Related Sermon Booked payment Data
    public function paymentData()
    {
        return $this->hasOne('App\Models\BankPaymentSlip', 'sermon_booking_id', 'id');
    }

}
