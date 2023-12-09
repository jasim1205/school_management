<?php

namespace App\Http\Controllers\Backend;

use App\Models\StudentAttendance;
use App\Models\Student;
use App\Models\Classes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class StudentAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentAttend = DB::select("SELECT classes.id,classes.class_name_en,student_attendances.att_date,sum(if(`status`=1,1,0)) as present,sum(if(`status`=0,1,0)) as absent FROM `student_attendances` join classes on classes.id=student_attendances.class_id group by student_attendances.class_id,student_attendances.att_date order by student_attendances.att_date DESC");
        return view('backend.studentAttendance.index',compact('studentAttend'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $classes = Classes::get();
        $student = array();
        if($request->class_id){
            $student = Student::where('class_id',$request->class_id)->get();
        }
        return view('backend.studentAttendance.create',compact('student','classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            StudentAttendance::where('class_id',$request->attendance[$request->student_id]['class_id'])
            ->where('att_date',$request->attendance[$request->student_id]['att_date'])->delete();
            foreach ($request->attendance as $attendanceData) {
                    $stuattendance = new StudentAttendance;
                    $stuattendance->student_id = $attendanceData['student_id'];
                    $stuattendance->class_id = $attendanceData['class_id'];
                    $stuattendance->att_date = $attendanceData['att_date'];
                    $stuattendance->status = $attendanceData['status'];
                    $stuattendance->save();
            }
            $this->notice::success('Data successfully saved');
            return redirect()->route('studentattend.index');
        }
        catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id,$att_date)
    {
        $studentAttend = StudentAttendance::where('class_id',$id)->where('att_date',$att_date)->get();
        return view('backend.studentAttendance.show',compact('studentAttend','att_date'));
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
            return redirect()->route('studentattend.show',[$attend->class_id,$attend->att_date]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentAttendance $studentAttendance)
    {
        //
    }
}
