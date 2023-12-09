<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\StudentFee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTeachers = Teacher::countTeachers();
        $totalStudents = Student::countStudents();
        $studentFees = StudentFee::with('student')->get();
        $totalCollection =  $studentFees->sum('total_fees');

        return view('backend.adminDashboard',compact('totalTeachers','totalStudents','totalCollection'));
        
        if(fullAccess()){
            return view('backend.adminDashboard');
        }else{
            return view('backend.dashboard');
        }
        
    }
}
