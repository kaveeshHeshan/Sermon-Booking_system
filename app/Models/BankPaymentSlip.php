<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankPaymentSlip extends Model
{
    use HasFactory;

    protected $fillable = [
        'sermon_booking_id',
        'payment_by_id',
        'bank_slip_image',
    ];

    protected $appends = ['imageURL'];

    // Related Sermon Booked payment Data
    public function paymentData()
    {
        return $this->belongsTo('App\Models\SermonBooking', 'sermon_booking_id', 'id');
    }

    public function getImageUrlAttribute()
    {

        $image = asset('/storage/payment_slips/'.$this->bank_slip_image);

        return $image;
    }
}
