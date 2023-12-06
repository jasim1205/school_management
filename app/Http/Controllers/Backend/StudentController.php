<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\student\AddNewRequest;
use App\Http\Requests\Backend\student\UpdateRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::get();
        return view('backend.students.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = Classes::get();
        $section = Section::get();
        return view('backend.students.create',compact('classes','section'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            $student = new Student;
            $student->student_id = $request->stu_id;
            $student->roll = $request->roll;
            $student->first_name_en = $request->fname_en;
            $student->first_name_bn = $request->fname_bn;
            $student->last_name_en = $request->lname_en;
            $student->last_name_bn = $request->lname_bn;
            $student->gender = $request->gender;
            $student->father_name = $request->father_name;
            $student->father_contact = $request->father_contact;
            $student->mother_name = $request->mother_name;
            $student->mother_contact = $request->mother_contact;
            $student->date_of_birth = $request->date_of_birth;
            $student->place_of_birth = $request->place_of_birth;
            $student->class_id = $request->class_id;
            $student->section_id = $request->section_id;
            $student->email = $request->EmailAddress;
            $student->contact_no_en = $request->contactNumber_en;
            $student->contact_no_bn = $request->contactNumber_bn;
            $student->username = $request->username;
            $student->present_address_en = $request->present_address_en;
            $student->parmanent_address_en = $request->parmanent_address_en;
            $student->password = $request->password;
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.
                $request->image->extension();
                $request->image->move(public_path('uploads/students'),$imageName);
                $student->image = $imageName;
            }
            if($student->save()){
                $this->notice::success('Student Data Successfully saved');
                return redirect()->route('student.index');
            }else{
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
        }
        catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please  again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::findOrFail(encryptor('decrypt',$id));
        return view('backend.students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $classes = Classes::get();
        $section = Section::get();
        $student = Student::findOrFail(encryptor('decrypt',$id));
        return view('backend.students.edit',compact('student','classes','section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try
        {
            $student = Student::findOrFail(encryptor('decrypt',$id));
            $student->student_id = $request->stu_id;
            $student->roll = $request->roll;
            $student->first_name_en = $request->fname_en;
            $student->first_name_bn = $request->fname_bn;
            $student->last_name_en = $request->lname_en;
            $student->last_name_bn = $request->lname_bn;
            $student->gender = $request->gender;
            $student->father_name = $request->father_name;
            $student->father_contact = $request->father_contact;
            $student->mother_name = $request->mother_name;
            $student->mother_contact = $request->mother_contact;
            $student->date_of_birth = $request->date_of_birth;
            $student->place_of_birth = $request->place_of_birth;
            $student->class_id = $request->class_id;
            $student->section_id = $request->section_id;
            $student->email = $request->EmailAddress;
            $student->contact_no_en = $request->contactNumber_en;
            $student->contact_no_bn = $request->contactNumber_bn;
            $student->username = $request->username;
            if($request->present_address_en)
                $student->present_address_en = $request->present_address_en;
            if($request->parmanent_address_en)
                $student->parmanent_address_en = $request->parmanent_address_en;
            if($request->password)
                $student->password = $request->password;
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.
                $request->image->extension();
                $request->image->move(public_path('uploads/students'),$imageName);
                $student->image = $imageName;
            }
            if($student->save()){
                $this->notice::success('Student Data Successfully saved');
                return redirect()->route('student.index');
            }else{
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
        }
        catch(Exception $e){
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
            $student = Student::findOrFail(encryptor('decrypt',$id));
            if($student->delete())
                return back()->with('success', 'Data deleted');
        } 
            
        catch (\Exception $e) {
            // dd($e);
            return back()->with('error', 'Please try again');
        }
    }
}
