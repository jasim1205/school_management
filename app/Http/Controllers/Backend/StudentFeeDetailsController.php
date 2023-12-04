<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\StudentFeeDetails;
use App\Models\Classes;
use App\Models\Student;
use App\Models\Fees;
use Illuminate\Http\Request;

class StudentFeeDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedetail = StudentFeeDetails::get();
        return view('backend.feedetails.index',compact('feedetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $months = [
        'January' => 'January',
        'February' => 'February',
        'March' => 'March',
        'April' => 'April',
        'May' => 'May',
        'June' => 'June',
        'July' => 'July',
        'August' => 'August',
        'September' => 'September',
        'October' => 'October',
        'November' => 'November',
        'December' => 'December'
        ];
        $years = [
        '2023' => '2023',
        '2024' => '2024',
        '2025' => '2025',
        '2026' => '2026',
        '2027' => '2027'
        ];
        $classes = Classes::get();
        $student = Student::get();
        $fees = Fees::get();
        return view('backend.feedetails.create',compact('classes','student','fees','months','years'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentFeeDetails $studentFeeDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentFeeDetails $studentFeeDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentFeeDetails $studentFeeDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentFeeDetails $studentFeeDetails)
    {
        //
    }
}
