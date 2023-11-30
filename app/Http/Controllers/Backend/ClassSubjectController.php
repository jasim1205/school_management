<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\classSubject;
use App\Models\Classes;
use App\Models\Subject;
use Illuminate\Http\Request;

class ClassSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $class_id=$request->class_id ?? 0;
        $classSubject =array();
        if($class_id)
            $classSubject = classSubject::where('class_id',$class_id)->pluck('subject_id')->toArray();
        
        $classes = Classes::get();
        $subject = Subject::get();
        return view('backend.assign_subject.index',compact('classSubject','classes','subject','class_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        if(!empty($request->subject_id))
        {
            $classSubject = classSubject::where('class_id',$request->class_id)->delete();
            foreach($request->subject_id as $subject_id){
                $save = new classSubject;
                $save->class_id = $request->class_id;
                $save->subject_id = $subject_id;
                $save->save();
                
            }
            $this->notice::success('ubject successfully assign to class ');
             return redirect()->route('assignsubject.index')->with('success', 'subject successfully assign to class ');
        }
        else
        {
            return redirect()->back()->with('error', 'due to some error pls try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(classSubject $classSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
    }
}
