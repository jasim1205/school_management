<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTeachers = Teacher::countTeachers();
        $totalStudents = Student::countStudents();

        return view('backend.adminDashboard',compact('totalTeachers','totalStudents'));
        
        if(fullAccess()){
            return view('backend.adminDashboard');
        }else{
            return view('backend.dashboard');
        }
        
    }
}
