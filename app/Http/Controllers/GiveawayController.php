<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GiveawayController extends Controller
{
    public function show()
    {
        $date = 'June 15, 2018';
        $ended = false;

        if(Carbon::parse($date, 'America/New_York') <= Carbon::now('America/New_York')) {
            $ended = true;
        }

        return view('giveaways', [
            'date' => $date,
            'ended' => $ended
        ]);
    }

    public function referral(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'additional' => $request->input('additional'),

            'fname' => $request->input('fname'),
            'femail' => $request->input('femail'),
            'fphone' => $request->input('fphone'),
            'faddress' => $request->input('faddress'),
            'fadditional' => $request->input('fadditional')
        ];

        Mail::send('emails.referral', $data, function ($message) {
            $message->subject('New Referral');

            $message->from('dgroofing@servnx.com', 'D&G Giveaway');

            $message->to('gerri.dgroofing@gmail.com');

            $message->bcc('servnx@gmail.com');

        });

        Mail::send('emails.referralresponse', $data, function ($message) use ($data) {
            $message->subject('Entry Confirmation');

            $message->from('dgroofing@servnx.com', 'D&G Giveaway');

            $message->to($data['email']);
        });

        return response()->json(['message' => 'Request completed'], 200);
    }
}
