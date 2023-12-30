<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Section;
use App\Models\NoticeBoard;

class DashboardController extends Controller
{
    public function index()
    {
        $notice = NoticeBoard::latest()->take(1)->get();
        $class = Classes::get();
        $section = Section::get();
        $student_info = Student::find(currentUserId());
        return view('student.dashboard', compact('student_info','class','section','notice'));
    }
}
