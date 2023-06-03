<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\SermonDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class PagesController extends Controller
{
    public function HomeView()
    {
        $poyaDays = SermonDay::select('id', 'title', 'date')->with('sermonBookingData')->get();

        return Inertia::render('Welcome', [
            'poya_days' => $poyaDays,
            'poya_days_count' => $poyaDays->count(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
}
