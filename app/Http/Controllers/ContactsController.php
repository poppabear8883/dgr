<?php

namespace App\Http\Controllers;

use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        $start = Carbon::now()->subDays(7);
        $end = Carbon::now()->subDay();

        $daily_data = $this->generateData(
            Carbon::now()->subDays(7),
            Carbon::now()->subDay(),
            'm/d'
        );

        $monthly_data = $this->generateData(
            Carbon::now()->subMonths(5),
            Carbon::now(),
            'M'
        );

        return view(
            'admin.contacts',
            compact(
                'contacts',
                'daily_data',
                'monthly_data'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    private function generateData($start, $end, $format = 'm/d/y')
    {
        $contacts = Contact::where('created_at', '>', $start)->get();
        $dates = [];

        for($date = $start; $date->lte($end); $date->addDay()) {

            $dates[$date->format($format)] = 0;
        }

        $weeks = collect($dates);

        $merged = $weeks->merge($contacts->groupBy(function ($date) use ($format) {
            return Carbon::parse($date->created_at)->format($format);
        })->sortBy(function($key) {
            return $key;
        })->map(function ($item, $key) {
            return collect($item)->count();
        }));

        return $merged;
    }
}
