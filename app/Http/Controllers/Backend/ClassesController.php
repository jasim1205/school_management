<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Crypt;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $class = Classes::paginate(5);
        return view('Backend.classes.index',compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        try{
            $data = new Classes();
            $data->class_name_en=$request->class_name_en;
            $data->class_name_bn=$request->class_name_bn;
            
            if($data->save())
                $this->notice::success('Successfully saved');
                return redirect()->route('classes.index');
        }catch(Exception $e){
            // dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $class = Classes::findOrFail(encryptor('decrypt',$id));
        return view('backend.classes.edit',compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data = Classes::findOrFail(encryptor('decrypt',$id));
            $data->class_name_en=$request->class_name_en;
            $data->class_name_bn=$request->class_name_bn;
            if($data->save())
                $this->notice::success('Successfully updated');
                return redirect()->route('classes.index');
        }catch(Exception $e){
            // dd($e);
            $this->notice::error('Please try again');
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
            $id = Crypt::decrypt($id);
            $classes = Classes::findOrFail($id);
            $classes->delete();
            $this->notice::warning('Data Deleted Permanently!');
            return back();
            } 
        catch (\Exception $e) {
                // dd($e);
                $this->notice::error('Please try again');
                return back();
            }
    }
}
