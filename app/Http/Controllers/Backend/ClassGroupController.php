<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\ClassGroup;
use App\Models\Classes;
use App\Models\Group;
use Illuminate\Http\Request;

class ClassGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $class_id=$request->class_id ?? 0;
        $classGroup =array();
        if($class_id)
            $classGroup = ClassGroup::where('class_id',$class_id)->pluck('group_id')->toArray();
        
        $classes = Classes::get();
        $group = Group::get();
        return view('backend.assign_group.index',compact('classGroup','classes','group','class_id'));
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
        if(!empty($request->group_id))
        {
            $classGroup = ClassGroup::where('class_id',$request->class_id)->delete();
            foreach($request->group_id as $group_id){
                $save = new ClassGroup;
                $save->class_id = $request->class_id;
                $save->group_id = $group_id;
                $save->save();
                
            }
            $this->notice::success('Group successfully assign to class ');
            return redirect()->route('assigngroup.index');
        }
        else
        {
            // dd($request);
            $this->notice::error('Due to some error pls try again');
            return redirect()->back();
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
