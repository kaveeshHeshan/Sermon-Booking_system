<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'mobile_number',
        'address',
    ];

    // Related User Profile Data
    public function userData()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
