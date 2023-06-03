<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\SermonDay;
use Illuminate\Http\Request;
use App\Http\Requests\SermonDayStoreRequest;
use App\Http\Requests\SermonDayUpdateRequest;

class SermonDaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermonDays = SermonDay::all();
        return Inertia::render('SermonDays/SermonDaysList', [
            'sermonDays' => $sermonDays,
            'daysCount' => $sermonDays->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('SermonDays/AddSermonDays');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SermonDayStoreRequest $request)
    {
        SermonDay::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => 'Poya Day',
            'date' => $request->date,
        ]);

        return redirect('/sermon_days')->with(['status'=>'success', 'message' => 'Sermon Day added successfully!']);
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

        $sermon_day = SermonDay::findOrFail($id);

        return Inertia::render('SermonDays/EditSermonDay', [
            'sermonDay' => $sermon_day,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SermonDayUpdateRequest $request, $id)
    {
        $sermon_day = SermonDay::findOrFail($id);

        $sermon_day->update($request->all());

        return redirect('/sermon_days')->with(['status'=>'success', 'message' => 'Sermon Day updated successfully!']);

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
}
