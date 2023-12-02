<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\ExamResult;
use App\Models\Exam;
use App\Models\STudent;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Session;
use App\Models\Subject;
use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $examresult = ExamResult::get();
        return view('backend.examresult.index',compact('examresult'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $exam = Exam::get();
        $student = Student::get();
        $classes = Classes::get();
        $section = Section::get();
        $session = Session::get();
        $subject = Subject::get();
        return view('backend.examresult.create',compact('exam','student','classes','section','session','subject'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            $examresult = new ExamResult;
            $examresult->exam_id = $request->exam_id;
            $examresult->student_id = $request->student_id;
            $examresult->class_id = $request->class_id;
            $examresult->section_id = $request->section_id;
            $examresult->session_id = $request->session_id;
            $examresult->subject_id = $request->subject_id;
            $examresult->sub_marks = $request->sub_marks;
            $examresult->ob_marks = $request->ob_marks;
            $examresult->prac_marks = $request->prac_marks;
            $examresult->gp = $request->gp;
            $examresult->gl = $request->gl;
            $examresult->status = $request->status;
            if($examresult->save()){
                $this->notice::success('Data Successfully Saved');
                return redirect()->route('examresult.index');
            }
        }
        catch(Exception $e){
            dd($e);
            $this->notice::error('Please try Again');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamResult $examResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $exam = Exam::get();
        $student = Student::get();
        $classes = Classes::get();
        $section = Section::get();
        $session = Session::get();
        $subject = Subject::get();
        $examresult = ExamResult::findOrFail(encryptor('decrypt',$id));
        return view('backend.examresult.edit',compact('exam','student','classes','section','session','subject','examresult'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         try
        {
            $examresult = ExamResult::findOrFail(encryptor('decrypt',$id));
            $examresult->exam_id = $request->exam_id;
            $examresult->student_id = $request->student_id;
            $examresult->class_id = $request->class_id;
            $examresult->section_id = $request->section_id;
            $examresult->session_id = $request->session_id;
            $examresult->subject_id = $request->subject_id;
            $examresult->sub_marks = $request->sub_marks;
            $examresult->ob_marks = $request->ob_marks;
            $examresult->prac_marks = $request->prac_marks;
            $examresult->gp = $request->gp;
            $examresult->gl = $request->gl;
            $examresult->status = $request->status;
            if($examresult->save()){
                $this->notice::success('Data Successfully Saved');
                return redirect()->route('examresult.index');
            }
        }
        catch(Exception $e){
            dd($e);
            $this->notice::error('Please try Again');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $examresult = ExamResult::findOrFail(encryptor('decrypt',$id));
        if($examresult->delete())
            $this->notice::success('Data successfully deleted');
            return back();
    }
}