<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Student;
use App\Models\Exam;
use App\Models\ExamResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_info=Student::find(currentUserId()); 
        return view('student.profile',compact('student_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    public function save_profile(Request $request)
    {
        try {
            $student=Student::find(currentUserId());
            $student->first_name_en = $request->fname_en;
            $student->last_name_en = $request->lname_en;
            $student->father_name = $request->father_name;
            $student->mother_name = $request->mother_name;
            $student->father_contact = $request->father_contact;
            $student->mother_contact = $request->mother_contact;
            $student->contact_no_en = $request->contactNumber_en;
            $student->email = $request->emailAddress;
            $student->username = $request->username;
            $student->contact_no_en = $request->contactNumber_en;
            $student->present_address_en = $request->present_address_en;
            $student->parmanent_address_en = $request->parmanent_address_en;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/students'), $imageName);
                $student->image = $imageName;
            }
            if ($student->save()){
                $this->setSession($student);
                return redirect()->back()->with('success', 'Data Saved');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    public function change_password(Request $request)
    {
        try {
            $data = Student::find(currentUserId());
            $data->password = Hash::make($request->password);
            if ($data->save()) {
                $this->setSession($data);
                $this->notice::success('Data Saved');
                return redirect()->back()->with('success', 'Data Saved');
            }
        } catch (Exception $e) {
            dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }
    public function student_result(Request $request)
    {
        $exam = Exam::get();
        $student = Student::find(currentUserId());
        $studentInfo = Student::find($request->student_id);
        $finalresult = array();
        $finalresult = ExamResult::where('exam_id',$request->exam_id)->get();
        return view('student.result',compact('finalresult','student','exam','studentInfo'));
    }

    public function setSession($student)
    {
        return request()->session()->put(
            [
                'userId' => encryptor('encrypt', $student->id),
                'userName' => encryptor('encrypt', $student->first_name_en),
                'emailAddress' => encryptor('encrypt', $student->email),
                'studentLogin' => 1,
                'image' => $student->image ?? 'No Image Found' 
            ]
        );
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
