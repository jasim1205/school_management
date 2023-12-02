<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Crypt;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section = Section::get();
        return view('backend.section.index',compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data = new Section();
            $data->section_name_en=$request->section_name_en;
            $data->section_name_bn=$request->section_name_bn;
            if($data->save())
                return redirect()->route('section.index')->with('success','Successfully saved');
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please  again');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $section = Section::findOrFail(encryptor('decrypt',$id));
        return view('backend.section.edit',compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         try{
            $data = Section::findOrFail(encryptor('decrypt',$id));
            $data->section_name_en=$request->section_name_en;
            $data->section_name_bn=$request->section_name_bn;
            if($data->save())
                return redirect()->route('section.index')->with('success','Successfully saved');
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please  again');
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
            $section = Section::findOrFail($id);
            $section->delete();
            
            return back()->with('success', 'Data deleted');
            } catch (\Exception $e) {
                // dd($e);
                return back()->with('error', 'Please try again');
            }
    }
}
