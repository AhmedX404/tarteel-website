<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\EnrollMail;
use App\Models\Enroll;
use App\Models\Enrolls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;

class StudentInqueries extends Controller
{
    public function enroll(Request $request)
    {
        Enroll::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'course'=>$request->course,
            'student_age'=>$request->student_age,
            'student_gender'=>$request->student_gender,
            'teacher_gender'=>$request->teacher_gender,
            'days'=>$request->days,
            'package'=>$request->package,
        ]);
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

    public function dashboard()
    {
        $enrolls = Enroll::all();
        return view('dashboard.layouts.index',compact('enrolls'));
    }

    public function enrolls_ajax(DataTables $dataTables)
    {

        return $dataTables->eloquent(Enroll::query()->orderBy('created_at', 'desc'))->toJson();
    }
}
