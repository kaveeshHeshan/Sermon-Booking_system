<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboardView()
    {

        

        return Inertia::render('Dashboard', [

        ]);
    }
}
