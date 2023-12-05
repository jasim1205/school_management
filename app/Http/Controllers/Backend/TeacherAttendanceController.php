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
        $teacherAttend = TeacherAttendance::get();
        return view('backend.teacherAttendance.index',compact('teacherAttend'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $teacher = Teacher::get();
        return view('backend.teacherAttendance.create',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      try {
            foreach ($request->attendance as $attendanceData) {
                    $teacherAttend = new TeacherAttendance;
                    $teacherAttend->teacher_id = $attendanceData['teacher_id'];
                    $teacherAttend->att_date = $request->att_date;
                    $teacherAttend->status = $attendanceData['status'];
                    if ($teacherAttend->save()) {
                        $this->notice::success('Data successfully saved');
                        return redirect()->route('teacherattend.index');
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
        $teacherAttend = TeacherAttendance::get();
        return view('backend.teacherAttendance.show',compact('teacherAttend'));
    }
    public function singleedit($id)
    {
        $attend = TeacherAttendance::findOrFail(encryptor('decrypt',$id));
        return view('backend.teacherAttendance.single',compact('attend'));
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
    public function update(Request $request, $id)
    {
        $attend = TeacherAttendance::findOrFail(encryptor('decrypt',$id));
        $attend->status = $request->status;
        if($attend->save())
            return redirect()->route('teacherattend.singleedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherAttendance $teacherAttendance)
    {
        //
    }
}
