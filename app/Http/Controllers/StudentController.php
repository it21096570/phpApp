<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Addstudent()
    {
        return view('Index');
    }

    public function save(Request $request)
    {
        Student::create([

            'student_name' => $request->studentName,
            'student_email' => $request->email,
            'student_dob' => $request->dob,

        ]);

        $notification = [
            "message" => "Student has been Added !!!"
        ];

        return redirect()->back()->with($notification);
    }
}
