<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\NoticeBoard;


class frontteacher extends Controller
{
    public function index()
    {
        $notice = NoticeBoard::get();
        $teacher = Teacher::get();
        return view('frontend.home.index',compact('teacher','notice'));
    }
}
