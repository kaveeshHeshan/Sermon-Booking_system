<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\SermonDaysController;
use App\Http\Controllers\SermonBookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'dashboardView'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Sermon Days
    Route::get('/sermon_days', [SermonDaysController::class, 'index'])->name('sermonDays.index');
    Route::get('/sermon_days/create', [SermonDaysController::class, 'create'])->name('sermonDays.create');
    Route::post('/sermon_days/store', [SermonDaysController::class, 'store'])->name('sermonDays.store');
    Route::get('/sermon_days/{id}/edit', [SermonDaysController::class, 'edit'])->name('sermonDays.edit');
    Route::put('/sermon_days/{id}/update', [SermonDaysController::class, 'update'])->name('sermonDays.update');

    // Sermon Bookings
    Route::get('/sermon/booking/create', [SermonBookingController::class, 'create'])->name('sermonBooking.create');
    Route::post('/sermon/booking/store', [SermonBookingController::class, 'store'])->name('sermonBooking.store');
    Route::get('/sermon/booking/{id}/edit', [SermonBookingController::class, 'edit'])->name('sermonBooking.edit');
    Route::get('/sermon/booking/{id}/update', [SermonBookingController::class, 'update'])->name('sermonBooking.update');
    Route::post('/sermon/booking/acceptance', [SermonBookingController::class, 'acceptBookingRequest'])->name('sermonBookingStatus.acceptance');
    Route::post('/sermon/booking/decline', [SermonBookingController::class, 'declineBookingRequest'])->name('sermonBookingStatus.decline');
    
    Route::get('/sermon/booking/payment_slip/{id}/create', [SermonBookingController::class, 'paySlipUploadView'])->name('sermonBooking.paySlip.create');
    Route::post('/sermon/booking/payment_slip/{id}/store', [SermonBookingController::class, 'paySlipUpload'])->name('sermonBooking.paySlip.store');
    Route::get('/sermon/booking/payment_slip/{id}/show', [SermonBookingController::class, 'paySlipView'])->name('sermonBooking.paySlip.show');

});

require __DIR__.'/auth.php';
