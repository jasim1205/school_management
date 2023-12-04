<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $period = Period::get();
        return view('Backend.period.index',compact('period'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.period.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
        $period = new Period;
        $period->period_name = $request->period_name;
        $period->duration = $request->duration;
        if($period->save())
            $this->notice::success('Period Successfully Saved');
            return redirect()->route('period.index');
        }
        catch(Exception $e)
        {
            $this->notice::error('Please try agai');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $period=Period::findOrFail(encryptor('decrypt',$id));
        return view('backend.period.edit',compact('period'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try
        {
        $period=Period::findOrFail(encryptor('decrypt',$id));
        $period->period_name = $request->period_name;
        $period->duration = $request->duration;
        if($period->save())
            $this->notice::success('Period Successfully Updated');
            return redirect()->route('period.index');
        }
        catch(Exception $e)
        {
            $this->notice::error('Please try agai');
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
            $period=Period::findOrFail(encryptor('decrypt',$id));
            $period->delete();
            $this->notice::warning('Data Deleted Permanently!');
            return back();
        } 
        catch (\Exception $e)
        {
                // dd($e);
                $this->notice::error('Please try again');
                return back();
        }
    }
}
