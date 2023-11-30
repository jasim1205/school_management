<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Routine;
use App\Models\Classes;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Period;
use App\Models\WeekDay;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $class_id=false;
        if($request->class_id){
             $class_id=$request->class_id;
        }
        $classes = Classes::get();
        $period = Period::get();
        $weekday = WeekDay::where('isOff',0)->orderBy('id')->get();
        $routine = Routine::get();
        return view('backend.routines.index',compact('routine','weekday','period','classes','class_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = Classes::get();
        $teacher = Teacher::get();
        $subject = Subject::get();
        $period = Period::get();
        $weekday = WeekDay::get();
        return view('backend.routines.create',compact('classes','teacher','subject','period','weekday'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            $routine = new Routine;
            $routine->class_id = $request->class_id;
            $routine->weekday_id = $request->weekday_id;
            $routine->teacher_id = $request->teacher_id;
            $routine->subject_id = $request->subject_id;
            $routine->period_id = $request->period_id;
            if($routine->save())
                $this->notice::success('Data successfully Saved');
                return redirect()->route('routine.index');
        }
        catch(Exception $e)
        {
            dd($e);
            $this->notice::error('Please try again');
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Routine $routine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Routine $routine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Routine $routine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Routine $routine)
    {
        //
    }
}
