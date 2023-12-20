<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\StudentFee;
use App\Models\Classes;
use App\Models\StudentAttendance;
use App\Models\TeacherAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTeachers = Teacher::count();
        $totalStudents = Student::count();
        $studentFees = StudentFee::with('student')->get();
        $totalCollection =  $studentFees->sum('total_fees');
        $classes = Classes::all();
        $classCounts = [];

        $studentPresentToday = StudentAttendance::where('att_date', Carbon::today())->where('status',1)
        ->count();
        $teacherPresentToday = TeacherAttendance::where('att_date', Carbon::today())->where('status',1)
        ->count();
        $studentAbsentToday = StudentAttendance::where('att_date', Carbon::today())->where('status',0)
        ->count();

        foreach ($classes as $class) {
            $classCounts[$class->class_name_en] = Student::where('class_id', $class->id)->count();
        }
        
        if(fullAccess()){
            return view('backend.adminDashboard',compact('totalTeachers','totalStudents','totalCollection','classCounts','studentFees'));
           
        }else{
            return view('backend.dashboard',compact('totalTeachers','totalStudents','classCounts','studentPresentToday','studentAbsentToday','teacherPresentToday'));
        }
        
    }
}
