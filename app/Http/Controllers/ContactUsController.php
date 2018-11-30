<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contact(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message')
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->subject('Message from ' . $data['name']);

            $message->from('dgroofing@servnx.com', 'D&G Roofing');

            $message->to('gerri.dgroofing@gmail.com');

            $message->bcc('servnx@gmail.com');

        });

        return response()->json(['message' => 'Request completed'], 200);
    }
}
