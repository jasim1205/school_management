<?php

namespace App\Http\Controllers\Backend;

use App\Models\StudentFeePayment;
use App\Models\Classes;
use App\Models\Student;
use App\Models\Fees;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentFeePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feepayment = StudentFeePayment::get();
        return view('backend.feepayment.index',compact('feepayment'));
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
        return view('backend.feepayment.create',compact('classes','student','fees','months','years'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $payment = new StudentFeePayment;
            $payment->student_roll = $request->student_roll;
            $payment->student_name = $request->student_name;
            $payment->class_id = $request->class_id;
            $payment->fee_id = $request->fee_id;
            $payment->fee_month = $request->fee_month;
            $payment->fee_year = $request->fee_year;
            $payment->amount = $request->amount;
            $payment->payment_date = $request->payment_date;
            $payment->status = $request->status;
            if($payment->save())
                $this->notice::success('Data successfully Saved');
                return redirect()->route('feepayment.index');
        }catch(Exception $e){
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }
    public function getStudentsByClass($class_id)
    {
        $students = Student::where('class_id', $class_id)->get();
        return response()->json(['students' => $students]);
    }


    /**
     * Display the specified resource.
     */
    public function show(StudentFeePayment $studentFeePayment)
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
        '2025' => '2025',
        '2026' => '2026',
        '2027' => '2027'
        ];
        $classes = Classes::get();
        $student = Student::get();
        $fees = Fees::get();
        $payment = StudentFeePayment::findOrFail(encryptor('decrypt',$id));
        return view('backend.feepayment.edit',compact('classes','student','fees','months','years','payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $payment = StudentFeePayment::findOrFail(encryptor('decrypt',$id));
            $payment->student_roll = $request->student_roll;
            $payment->student_name = $request->student_name;
            $payment->class_id = $request->class_id;
            $payment->fee_id = $request->fee_id;
            $payment->fee_month = $request->fee_month;
            $payment->fee_year = $request->fee_year;
            $payment->amount = $request->amount;
            $payment->payment_date = $request->payment_date;
            $payment->status = $request->status;
            if($payment->save())
                $this->notice::success('Data successfully Updated');
                return redirect()->route('feepayment.index');
        }catch(Exception $e){
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $payment = StudentFeePayment::findOrFail(encryptor('decrypt',$id));
        if($payment->delete())
            $this->notice::success('Data successfully deleted');
            return back();
    }
}
