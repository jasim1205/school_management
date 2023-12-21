<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exam = Exam::all();
        return view('backend.exam.index',compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.exam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $exam = new Exam;
            $exam->exam_name = $request->exam_name;
            $exam->start_date = $request->start_date;
            $exam->end_date = $request->end_date;
            if($exam->save())
                $this->notice::success('Exam data Successfully Saved');
                return redirect()->route('exam.index');
        }
        catch(Exception $e)
        {
            dd($e);
            $this->notice::error('Data Not Saved!please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $exam = Exam::findOrFail(encryptor('decrypt',$id));
        return view('backend.exam.edit',compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $exam = Exam::findOrFail(encryptor('decrypt',$id));
            $exam->exam_name = $request->exam_name;
            $exam->start_date = $request->start_date;
            $exam->end_date = $request->end_date;
            if($exam->save())
                $this->notice::success('Exam data Successfully Updated');
                return redirect()->route('exam.index');
        }
        catch(Exception $e)
        {
            dd($e);
            $this->notice::error('Data Not Saved!please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $exam = Exam::findOrFail(encryptor('decrypt',$id));
        if($exam->delete())
            $this->notice::success('Exam data Successfully Deleted');
            return back();

    }
}
