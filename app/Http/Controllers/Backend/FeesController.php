<?php

namespace App\Http\Controllers\Backend;

use App\Models\Fees;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fee = Fees::get();
        return view('backend.fee.index',compact('fee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.fee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $fee = new Fees;
            $fee->fee_name = $request->fee_name;
            $fee->amount = $request->amount;
            if($fee->save())
                $this->notice::success('Data successfully saved');
                return redirect()->route('fee.index');
        }
        catch(Exception $e)
        {
            dd($e);
            $this->notice::error ('please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Fees $fees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fee = Fees::findOrFail(encryptor('decrypt',$id));
        return view('backend.fee.edit',compact('fee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
        try{
            $fee = Fees::findOrFail(encryptor('decrypt',$id));
            $fee->fee_name = $request->fee_name;
            $fee->amount = $request->amount;
            if($fee->save())
                $this->notice::success('Data successfully Update');
                return redirect()->route('fee.index');
        }
        catch(Exception $e)
        {
            dd($e);
            $this->notice::error ('please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fee = Fees::findOrFail(encryptor('decrypt',$id));
        if($fee->delete())
            $this->notice::success('Data successfully Deleted');
            return back();
    }
}
