<?php

namespace App\Http\Controllers\Backend;

use App\Models\TeacherAttendance;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TeacherAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacherAttend = DB::select("SELECT teacher_attendances.att_date,sum(if(`status`=1,1,0)) as present,sum(if(`status`=0,1,0)) as absent FROM `teacher_attendances` group by teacher_attendances.att_date order by teacher_attendances.att_date DESC");
        return view('backend.teacherAttendance.index',compact('teacherAttend'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $teacher = array();
        $teacher = Teacher::get();
        return view('backend.teacherAttendance.create',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      try {
            TeacherAttendance::where('att_date',$request->attendance[$request->teacher_id]['att_date'])->delete();
            foreach ($request->attendance as $attendanceData) 
                 {
                    $teacherAttend = new TeacherAttendance;
                    $teacherAttend->teacher_id = $attendanceData['teacher_id'];
                    $teacherAttend->att_date = $attendanceData['att_date'];
                    $teacherAttend->status = $attendanceData['status'];
                    $teacherAttend->save();
            }

            $this->notice::success('Data successfully saved');
            return redirect()->route('teacherattend.index');
        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($att_date)
    {
        $teacherAttend = TeacherAttendance::where('att_date',$att_date)->get();
        return view('backend.teacherAttendance.show',compact('teacherAttend','att_date'));
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
            return redirect()->route('teacherattend.show',[$attend->att_date]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherAttendance $teacherAttendance)
    {
        //
    }
}
