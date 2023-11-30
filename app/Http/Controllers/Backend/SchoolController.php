<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;
use File;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = School::all();
        return view('backend.school.index',compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.school.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $school = new School();
            $school->school_id_en = $request->school_id_en ;
            $school->school_id_bn = $request->school_id_bn ;
            $school->school_name_en = $request->school_name_en;
            $school->school_name_bn = $request->school_name_bn;
            $school->school_title_en = $request->school_title_en;
            $school->school_title_bn = $request->school_title_bn;
            $school->school_address_en = $request->school_address_en;
            $school->school_address_bn = $request->school_address_bn;
            $school->eiin_no_en = $request->eiin_no_en;
            $school->eiin_no_bn = $request->eiin_no_bn;
            $school->email=$request->email;
            $school->web_address=$request->web_address;
            if($request->hasFile('logo')){
                $imageName = rand(111,999).time().'.'.
                $request->logo->extension();
                $request->logo->move(public_path('uploads/school'),$imageName);
                $school->logo = $imageName;
            }
            if($school->save()){
                $this->notice::success('Successfully saved');
                return redirect()->route('school.index');
            }
            else{
                 return redirect()->back()->withInput()->with('error','Please try again');
            }
        }catch(Exception $e){
            // dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $school =School::findOrFail(encryptor('decrypt',$id));
        return view('backend.school.edit',compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $school =School::findOrFail(encryptor('decrypt',$id));
            $school->school_id_en = $request->school_id_en ;
            $school->school_id_bn = $request->school_id_bn ;
            $school->school_name_en = $request->school_name_en;
            $school->school_name_bn = $request->school_name_bn;
            $school->school_title_en = $request->school_title_en;
            $school->school_title_bn = $request->school_title_bn;
            $school->school_address_en = $request->school_address_en;
            $school->school_address_bn = $request->school_address_bn;
            $school->eiin_no_en = $request->eiin_no_en;
            $school->eiin_no_bn = $request->eiin_no_bn;
            $school->email=$request->email;
            $school->web_address=$request->web_address;
            if($request->hasFile('logo')){
                $imageName = rand(111,999).time().'.'.
                $request->logo->extension();
                $request->logo->move(public_path('uploads/school'),$imageName);
                $school->logo = $imageName;
            }
            if($school->save()){
                $this->notice::success('Successfully Updated');
                return redirect()->route('school.index');
            }
            else{
                 return redirect()->back()->withInput()->with('error','Please try again');
            }
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
        $school= School::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/school/').$school->image;
        
        if($school->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            $this->notice::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
