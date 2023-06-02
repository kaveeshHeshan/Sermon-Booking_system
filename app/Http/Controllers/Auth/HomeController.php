<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\SermonBooking;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboardView()
    {

        if (auth()->user()->hasRole('admin')) {

            $userBookings = SermonBooking::with(['sermonDayData', 'sermonBookedUserData'])->get();

            return Inertia::render('AdminDashboard',[
                'user_bookings' => $userBookings,
                'user_bookings_count' => $userBookings->count(),
            ]);

        } else {

            $userBookings = SermonBooking::with(['sermonDayData', 'sermonBookedUserData'])->where('booked_by_id', auth()->user()->id)->get();

            return Inertia::render('Dashboard', [
                'user_bookings' => $userBookings,
                'user_bookings_count' => $userBookings->count(),
            ]);

        }
        
    }
}
