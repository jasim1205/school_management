<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Models\Subject;
use Illuminate\Http\Request;
use Exception;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject = Subject::paginate(10);
        return view('backend.subject.index',compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $subject = new Subject();
            $subject->subject_name_en=$request->subject_name_en;
            $subject->subject_name_bn=$request->subject_name_bn;
            
            if($subject->save())
                return redirect()->route('subject.index')->with('success','Successfully saved');
        }catch(Exception $e){
            dd($e);
            //return redirect()->back()->withInput()->with('error','Please  again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail(encryptor('decrypt',$id));
        return view('backend.subject.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $subject = Subject::findOrFail(encryptor('decrypt',$id));
            $subject->subject_name_en=$request->subject_name_en;
            $subject->subject_name_bn=$request->subject_name_bn;
            
            if($subject->save())
                return redirect()->route('subject.index')->with('success','Successfully saved');
        }catch(Exception $e){
            dd($e);
            //return redirect()->back()->withInput()->with('error','Please  again');
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
            $classes = Subject::findOrFail($id);
            $classes->delete();
            
            return back()->with('success', 'Data deleted');
            } catch (\Exception $e) {
                // dd($e);
                return back()->with('error', 'Please try again');
            }
    }
}
