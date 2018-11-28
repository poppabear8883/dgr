<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplyController extends Controller
{
    public function apply(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'altphone' => $request->input('altphone'),
            'whyus' => $request->input('whyus'),
            'whyyou' => $request->input('whyyou')
        ];

        Mail::send('emails.apply', $data, function ($message) {
            $message->subject('New Applicant');

            $message->from('dgroofing@servnx.com', 'D&G Roofing');

            $message->to('gerri.dgroofing@gmail.com');

            $message->bcc('servnx@gmail.com');

        });

        Mail::send('emails.applyresponse', $data, function ($message) use ($data) {
            $message->subject('Application Submitted');

            $message->from('dgroofing@servnx.com', 'D&G Roofing');

            $message->to($data['email']);
        });

        return response()->json(['message' => 'Request completed'], 200);
    }
}
