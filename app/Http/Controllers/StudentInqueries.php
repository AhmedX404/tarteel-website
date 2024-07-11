<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\EnrollMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentInqueries extends Controller
{
    public function enroll(Request $request)
    {
        // Send the email
        Mail::to('ahmedomar012072204140@gmail.com')->send(new EnrollMail($request->all()));

        return response()->json([
            'status'=>'success',
        ]);
    }

    public function contact(Request $request)
    {
        // Send the email
        Mail::to('ahmedomar012072204140@gmail.com')->send(new ContactMail($request->all()));

        return response()->json([
            'status'=>'success',
        ]);
    }
}
