<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\ClassSection;
use App\Models\Classes;
use App\Models\Section;
use Illuminate\Http\Request;

class ClassSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $class_id=$request->class_id ?? 0;
        $classSection =array();
        if($class_id)
            $classSection = ClassSection::where('class_id',$class_id)->pluck('section_id')->toArray();
        
        $classes = Classes::get();
        $section = Section::get();
        return view('backend.assign_section.index',compact('classSection','classes','section','class_id'));
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
        if(!empty($request->section_id))
        {
            $classSection = ClassSection::where('class_id',$request->class_id)->delete();
            foreach($request->section_id as $section_id){
                $save = new ClassSection;
                $save->class_id = $request->class_id;
                $save->section_id = $section_id;
                $save->save();
                
            }
            $this->notice::success('Section successfully assign to class ');
             return redirect()->route('assignsection.index');
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
