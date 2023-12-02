<?php

namespace App\Http\Controllers\Backend;

use App\Models\StudentFee;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentfee = Studentfee::get();
        return view('backend.student_fee.index',compact('studentfee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $currentMonth = now()->format('m');
        $currentYear = now()->format('Y');
        $student = Student::get();
        return view('backend.student_fee.create',compact('student','currentMonth','currentYear'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $studentfee = new StudentFee;
            $studentfee->student_id = $request->student_id;
            $studentfee->total_fees = $request->total_fees;
            $studentfee->fee_month = $request->fee_month;
            $studentfee->fee_year = $request->fee_year;
            if($studentfee->save())
                $this->notice::success('Data successfully saved');
                return redirect()->route('studentfee.index');

        }catch(Exception $e){
            dd($e);
            $this->notice::error('due to wrong! Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentFee $studentFee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentFee $studentFee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentFee $studentFee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentFee $studentFee)
    {
        //
    }
}
