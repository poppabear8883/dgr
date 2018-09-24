<?php

namespace App\Http\Controllers;

use App\Giveaway;
use App\PreviousGiveaway;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GiveawayController extends Controller
{
    public function show()
    {
        $giveaway = Giveaway::latest()->first();
        $ended = false;

        if(Carbon::parse($giveaway->ends_at, 'America/New_York') <= Carbon::now('America/New_York')) {
            $ended = true;
        }

        return view('giveaways', [
            'ended' => $ended,
            'ends_at' => Carbon::parse($giveaway->ends_at)->toFormattedDateString(),
            'giveaway' => $giveaway,
            'features' => explode('\n', $giveaway->features),
            'previous' => PreviousGiveaway::latest()->first()
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

    public function admin()
    {
        $giveaway = Giveaway::latest()->first();
        return view('admin.giveaways', compact('giveaway'));
    }
}
