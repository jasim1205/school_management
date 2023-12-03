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
        '2024' => '2025',
        '2026' => '2026',
        '2027' => '2027'
        ];
        $currentMonth = now()->format('m');
        $currentYear = now()->format('Y');
        $student = Student::get();
        return view('backend.student_fee.create',compact('student','currentMonth','currentYear','months','years'));
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
    public function edit($id)
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
        '2024' => '2025',
        '2026' => '2026',
        '2027' => '2027'
        ];
        $currentMonth = now()->format('m');
        $currentYear = now()->format('Y');
        $student = Student::get();
        $studentfee = StudentFee::findOrFail('encryptor'('decrypt',$id));
        return view('backend.student_fee.edit',compact('student','currentMonth','currentYear','months','years','studentfee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $studentfee = StudentFee::findOrFail('encryptor'('decrypt',$id));
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
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $studentfee = StudentFee::findOrFail('encryptor'('decrypt',$id));
        if($studentfee->delete())
            $this->notice::success('Data successfully Deleted');
            return back();

    }
}
