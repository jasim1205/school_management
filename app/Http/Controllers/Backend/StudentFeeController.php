<?php

namespace App\Http\Controllers\Backend;

use App\Models\StudentFee;
use App\Models\StudentFeeDetails;
use App\Models\Classes;
use App\Models\Student;
use App\Models\Fees;
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
        $classes = Classes::get();
        $fees = Fees::get();
        return view('backend.student_fee.create',compact('classes','fees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            StudentFeeDetails::where('class_id',$request->class_id)
            ->where('fee_month',$request->fee_month)
            ->where('fee_year',$request->fee_year)->delete();
            
            $students=Student::where('class_id',$request->class_id)->pluck('id');
            
            if($students){
                foreach($students as $student_id){
                    $total_fee=0;
                    foreach ($request->fee_id as $fee_id) {
                        $total_fee+=$request->fee_amount[$fee_id];
                        $sf = new StudentFeeDetails;
                        $sf->fee_id = $fee_id;
                        $sf->student_id = $student_id;
                        $sf->class_id = $request->class_id;
                        $sf->fee_amount = $request->fee_amount[$fee_id];
                        $sf->fee_month = $request->fee_month;
                        $sf->fee_year = $request->fee_year;
                        $sf->save();
                    }
                    $stufee= new Studentfee;
                    $stufee->student_id=$student_id;
                    $stufee->total_fees=$total_fee;
                    $stufee->fee_month = $request->fee_month;
                    $stufee->fee_year = $request->fee_year;
                    $stufee->save();
                }
            }
            
            $this->notice::success('Data successfully saved');
            return redirect()->route('studentfee.index');
        }
        catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
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
        $stu_fe=StudentFee::findOrFail('encryptor'('decrypt',$id));
        $student = Student::findOrFail($stu_fe->student_id);
        $studentfee = StudentFeeDetails::where('student_id',$stu_fe->student_id)
        ->where('fee_month',$stu_fe->fee_month)
        ->where('fee_year',$stu_fe->fee_year)->get();
        return view('backend.student_fee.edit',compact('student','studentfee','stu_fe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $total_fee=0;
            foreach ($request->id as $id) {
                $total_fee+=$request->fee_amount[$id];
                $sf = StudentFeeDetails::find($id);
                $sf->fee_amount = $request->fee_amount[$id];
                $sf->save();
            }
            /* student total fee */
            $stufee= Studentfee::where('student_id',$sf->student_id)
            ->where('fee_month',$sf->fee_month)
            ->where('fee_year',$sf->fee_year)->first();

            $stufee->total_fees=$total_fee;
            $stufee->save();
                
            $this->notice::success('Data successfully saved');
            return redirect()->route('studentfee.index');
        }
        catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $stu_fe = StudentFee::findOrFail('encryptor'('decrypt',$id));
        StudentFeeDetails::where('student_id',$stu_fe->student_id)
        ->where('fee_month',$stu_fe->fee_month)
        ->where('fee_year',$stu_fe->fee_year)->delete();
        if($stu_fe->delete())
            $this->notice::success('Data successfully Deleted');
            return back();

    }
}
