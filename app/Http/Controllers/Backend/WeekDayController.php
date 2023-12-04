<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\WeekDay;
use Illuminate\Http\Request;

class WeekDayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $weekDay = WeekDay::get();
        return view('backend.weekday.index',compact('weekDay'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.weekday.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            $weekDay = new weekDay;
            $weekDay->weekday_name = $request->weekday_name;
            if($weekDay->save())
                $this->notice::success('Data successfully Saved');
                return redirect()->route('weekday.index');
        }
        catch(Exception $e)
        {
            $thisf->notice::error('please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(WeekDay $weekDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $weekday = WeekDay::findOrFail(encryptor('decrypt',$id));
        return view('backend.weekday.edit',compact('weekday'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try
        {
            $weekday = WeekDay::findOrFail(encryptor('decrypt',$id));
            $weekday->weekday_name = $request->weekday_name;
            if($weekday->save())
                $this->notice::success('Data successfully Saved');
                return redirect()->route('weekday.index');
        }
        catch(Exception $e)
        {
            $thisf->notice::error('please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try
        {
            $weekday = WeekDay::findOrFail(encryptor('decrypt',$id));
            if($weekday->delete())
                $this->notice::info('data successfully deleted');
                return back();
        }
        catch(Exception $e)
        {
            $this->notice::error('Please try again');
            return back();
        }
    }
}
