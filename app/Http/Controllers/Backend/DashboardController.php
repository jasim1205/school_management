<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\StudentFee;
use App\Models\Classes;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTeachers = Teacher::countTeachers();
        $totalStudents = Student::countStudents();
        $studentFees = StudentFee::with('student')->get();
        $totalCollection =  $studentFees->sum('total_fees');
        $classes = Classes::all();
        $classCounts = [];

        foreach ($classes as $class) {
            $classCounts[$class->class_name_en] = Student::where('class_id', $class->id)->count();
        }
        
        if(fullAccess()){
            return view('backend.adminDashboard',compact('totalTeachers','totalStudents','totalCollection','classCounts'));
           
        }else{
            return view('backend.dashboard',compact('totalTeachers','totalStudents','classCounts'));
        }
        
    }
}
