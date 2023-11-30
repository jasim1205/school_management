<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;
use Execption;
use Toastr;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designation = Designation::paginate(10);
        return view('backend.designations.index',compact('designation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.designations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          try{
            $designation = new Designation;
            $designation->designation_name= $request->designation_name;
            if($designation->save())
                return redirect()->route('designation.index');
                Toastr::success('successfully created!');     
        }
        catch(Exception $e)
        {
            // dd($e);
            // return back();
            // Toastr::error('Please try again!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $designation = Designation::findOrFail(encryptor('decrypt',$id));
        return view('backend.designations.edit',compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $designation = Designation::findOrFail(encryptor('decrypt',$id));
            $designation->designation_name= $request->designation_name;
            if($designation->save())
                return redirect()->route('designation.index');
                Toastr::success('successfully created!');     
        }
        catch(Exception $e)
        {
            // dd($e);
            // return back();
            // Toastr::error('Please try again!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $designation = Designation::findOrFail(encryptor('decrypt',$id));
        if($designation->delete()){
           
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
