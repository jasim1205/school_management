<?php

namespace App\Http\Controllers\Backend;

use App\Models\TeacherAttendance;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacherAtt = TeacherAttendance::get();
        return view('backend.teacherAtt.index',compact('teacherAtt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = Teacher::get();
        return view('backend.teacherAtt.create',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      try {
            foreach ($request->attendance as $attendanceData) {
                    $teacherAtt = new TeacherAttendance;
                    $teacherAtt->teacher_id = $attendanceData['teacher_id'];
                    $teacherAtt->att_date = $request->att_date;
                    $teacherAtt->status = $attendanceData['status'];

                    if ($teacherAtt->save()) {
                        $this->notice::success('Data successfully saved');
                        return redirect()->route('teacheratt.index');
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
    public function show(TeacherAttendance $teacherAttendance)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeacherAttendance $teacherAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeacherAttendance $teacherAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherAttendance $teacherAttendance)
    {
        //
    }
}
