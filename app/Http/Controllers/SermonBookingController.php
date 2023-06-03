<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\SermonDay;
use Illuminate\Http\Request;
use App\Models\SermonBooking;
use App\Models\BankPaymentSlip;
use App\Http\Requests\BankSlipImageStoreRequest;
use App\Http\Requests\SermonBookingStoreRequest;

class SermonBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poyaDays = SermonDay::select('id', 'title', 'date')
            ->doesntHave('sermonBookingData')
            ->orWhereHas('sermonBookingData', function ($query) {
                $query->where('status', 'declined');
            })->get();

        return Inertia::render('SermonBookings/AddSermonBooking', [
            'poya_days' => $poyaDays,
            'poya_days_count' => $poyaDays->count(),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SermonBookingStoreRequest $request)
    {
        SermonBooking::create([
            'sermon_day_id' => $request->sermon_day_id,
            'description' => $request->description,
            'status' => 'requested',
            'booked_by_id' => auth()->user()->id,
        ]);

        return redirect('/dashboard')->with('success', 'Sermon Booking successfully requested!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function acceptBookingRequest(Request $request)
    {
        $bookingId = $request->booking_id;

        $booking = SermonBooking::findOrFail($bookingId);

        $booking->update([
            'status' => 'booked',
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Sermon Booking request accepted successfully!'
        ]);

    }

    public function declineBookingRequest(Request $request)
    {
        $bookingId = $request->booking_id;

        $booking = SermonBooking::findOrFail($bookingId);

        $booking->update([
            'status' => 'declined',
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Sermon Booking request declined successfully!'
        ]);
    }

    public function paySlipUploadView($id)
    {
        return Inertia::render('SermonBookings/AddPaymentSlip', [
            'bookingId' => $id,
        ]);
    }

    public function paySlipUpload(BankSlipImageStoreRequest $request, $id)
    {

        if ($request->hasFile('slipImage')) {

            // Get filename with extension
            $fileNameWithExtension = $request->file('slipImage')->getClientOriginalName();

            // Get Just File Name
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

            // Get Extension
            $extension = $request->file('slipImage')->getClientOriginalExtension();

            // File name to Store
            if (str_contains($fileName, '/') || str_contains($fileName, ':')) {

                $charcrs = array('/', ':');

                $fileNameModified = str_replace($charcrs, '-', $fileName);
                $fileNameToStore = time() . auth()->user()->id . '-payment-slip-' . $fileNameModified .'.'.$extension;

            }else {

                $fileNameToStore = time() . auth()->user()->id . '-payment-slip-' . $fileName .'.'.$extension;

            }

            // Upload Image
            $path = $request->file('slipImage')->storeAs('public/payment_slips', $fileNameToStore);

            $request->merge(['bank_slip_image' => $fileNameToStore]);

            BankPaymentSlip::create([
                'sermon_booking_id' => $id,
                'payment_by_id' => auth()->user()->id,
                'bank_slip_image' => $request->bank_slip_image,
            ]);

        }

        return redirect('/dashboard')->with('success', 'Payment Slip stored successfully!');

    }

    public function paySlipView($id)
    {

        $payment = BankPaymentSlip::findOrFail($id);

        return Inertia::render('SermonBookings/PaymentView', [
            'payment_detail' => $payment,
        ]);
    }
}
