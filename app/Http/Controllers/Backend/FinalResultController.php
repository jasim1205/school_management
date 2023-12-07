<?php

namespace App\Http\Controllers\Backend;

use App\Models\FinalResult;
use App\Models\Exam;
use App\Models\Classes;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinalResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $finalResult = FinalResult::get();
        return view('backend.finalresult.index',compact('finalResult'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $exam = Exam::get();
        $classes = Classes::get();
        $student = array();
        if($request->class_id){
            $student = Student::where('class_id',$request->class_id)->get();
        }
        return view('backend.finalresult.create',compact('exam','classes','student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $finalResult = new FinalResult;
            $finalResult->exam_id = $request->exam_id;
            $finalResult->class_id = $request->class_id;
            $finalResult->student_id = $request->student_id;
            $finalResult->total_marks = $request->total_marks;
            $finalResult->total_gp = $request->total_gp;
            $finalResult->total_gl = $request->total_gl;
            if($finalResult->save())
                $this->notice::success('Data successfully Saved!');
                return redirect()->route('finalresult.index');
        }
        catch(Exception $e){
            dd($e);
            $this->notice::error('Data do not Saved! please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(FinalResult $finalResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $exam = Exam::get();
        $classes = Classes::get();
        $student = Student::get();
        $finalresult = FinalResult::findOrFail(encryptor('decrypt',$id));
        return view('backend.finalresult.edit',compact('exam','classes','student','finalresult'));
    }

    public function individual($id)
    {
        $individual = FinalResult::findOrFail(encryptor('decrypt',$id));
        return view('backend.finalresult.individual',compact('individual'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $finalResult = FinalResult::findOrFail(encryptor('decrypt',$id));
            $finalResult->exam_id = $request->exam_id;
            $finalResult->class_id = $request->class_id;
            $finalResult->student_id = $request->student_id;
            $finalResult->total_marks = $request->total_marks;
            $finalResult->total_gp = $request->total_gp;
            $finalResult->total_gl = $request->total_gl;
            if($finalResult->save())
                $this->notice::success('Data successfully Saved!');
                return redirect()->route('finalresult.index');
        }
        catch(Exception $e){
            dd($e);
            $this->notice::error('Data do not Saved! please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $finalResult = FinalResult::findOrFail(encryptor('decrypt',$id));
        if($finalResult->delete())
            $this->notice::success('Data successfully deleted');
            return back();
    }
}
