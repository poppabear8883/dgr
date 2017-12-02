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
        $chartdata = $this->data();

        //dd($chartdata);

        return view(
            'admin.contacts',
            compact(
                'contacts',
                'chartdata'
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

    private function data()
    {

        $start = Carbon::now()->subDays(7);
        $end = Carbon::now()->subDay();
        $contacts = Contact::where('created_at', '>', $start)->get();
        $dates = [];

        for($date = $start; $date->lte($end); $date->addDay()) {

            $dates[$date->format('m/d')] = 0;
        }

        $weeks = collect($dates);

        $merged = $weeks->merge($contacts->groupBy(function ($date) {
            return Carbon::parse($date->created_at)->format('m/d');
        })->sortBy(function($key) {
            return $key;
        })->map(function ($item, $key) {
            return collect($item)->count();
        }));

        return $merged;
    }
}
