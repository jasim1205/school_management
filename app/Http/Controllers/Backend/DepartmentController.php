<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::paginate(5);
        return view('backend.departments.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $department = new Department;
            $department->department_name= $request->department_name;
            if($department->save())
                return redirect()->route('department.index');
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
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $department = Department::findOrFail(encryptor('decrypt',$id));
        return view('backend.departments.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $department = Department::findOrFail(encryptor('decrypt',$id));
        $department->department_name = $request->department_name;
        if($department->save())
            return redirect()->route('department.index')->with('Updated Suceessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $department = Department::findOrFail(encryptor('decrypt',$id));
        if($department->delete()){
           
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
