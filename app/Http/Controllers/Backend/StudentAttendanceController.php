<?php

namespace App\Http\Controllers\Backend;

use App\Models\StudentAttendance;
use App\Models\Student;
use App\Models\Classes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentAttend = StudentAttendance::get();
        return view('backend.studentAttendance.index',compact('studentAttend'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $classes = Classes::get();
        $student = Student::get();
        return view('backend.studentAttendance.create',compact('student','classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            foreach ($request->attendance as $attendanceData) {
                    $stuattendance = new StudentAttendance;
                    $stuattendance->student_id = $attendanceData['student_id'];
                    $stuattendance->student_id = $attendanceData['student_id'];
                    $stuattendance->class_id = $attendanceData['class_id'];
                    $stuattendance->att_date = $request->att_date;
                    $stuattendance->status = $attendanceData['status'];

                    if ($stuattendance->save()) {
                        $this->notice::success('Data successfully saved');
                        return redirect()->route('studentattend.index');
                    }
            }
        }
        catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $classes = Classes::get();
        $studentAttend = StudentAttendance::get();
        return view('backend.studentAttendance.show',compact('studentAttend','classes'));
    }
    public function singleedit($id)
    {
        $attend = StudentAttendance::findOrFail(encryptor('decrypt',$id));
        return view('backend.studentAttendance.single',compact('attend'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentAttendance $studentAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $attend = StudentAttendance::findOrFail(encryptor('decrypt',$id));
        $attend->status = $request->status;
        if($attend->save())
            return redirect()->route('studentattend.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentAttendance $studentAttendance)
    {
        //
    }
}
