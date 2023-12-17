<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $student_info = Student::find(currentUserId());
        return view('student.dashboard', compact('student_info'));
        
    }
}
