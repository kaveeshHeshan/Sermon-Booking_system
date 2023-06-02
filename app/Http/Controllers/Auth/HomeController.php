<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboardView()
    {

        if (auth()->user()->hasRole('admin')) {
            return Inertia::render('AdminDashboard');
        } else {
            return Inertia::render('Dashboard');
        }
        
    }
}
