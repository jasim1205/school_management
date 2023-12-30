<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Student;
use App\Models\Exam;
use App\Models\ExamResult;
use App\Models\Routine;
use App\Models\Classes;
use App\Models\Period;
use App\Models\WeekDay;
use App\Models\StudentAttendance;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentProfileController extends Controller
{

    public function student_details($id)
    {
        $student_info=Student::find(encryptor('decrypt',$id));
        $attendance = StudentAttendance::where('student_id',encryptor('decrypt',$id))->orderBy('created_at', 'desc')->get();
        $exam = Exam::get();
        $data=array('student_info'=>$student_info,'attendance'=>$attendance);
        return response($data, 200);
    }
    


    public function result($id,$exam_id)
    {
        $finalresult = ExamResult::where('student_id',encryptor('decrypt',$id))->where('exam_id',$exam_id)->get();
        return response($finalresult, 200);
    }

    public function change_password(Request $request)
    {
        try {
            $data = Student::find(currentUserId());
            //validate current password
            if(!Hash::check($request->current_password, $data->password)){
                $this->notice::error('Current Password is incorrect');
                return redirect()->back();
            }
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
        $finalresult = array();
        $finalresult = ExamResult::where('student_id',currentUserId())->where('exam_id',$request->exam_id)->get();
        return view('student.result',compact('finalresult','student','exam'));
    }
    public function student_routine(Request $request)
    {
       $class_id=false;
        if($request->class_id){
             $class_id=$request->class_id;
        }
        $classes = Classes::get();
        $period = Period::get();
        $weekday = WeekDay::where('isOff',0)->orderBy('id')->get();
        $routine = Routine::get();
        return view('student.routine',compact('routine','weekday','period','classes','class_id'));
    }
    

    public function signInCheck(Request $request){
       
        $error=array('error'=>'Your phone number or password is wrong!');
        $student=Student::where('username',$request->username)
                    ->orWhere('email',$request->username)->first();
        if($student){
            if(Hash::check($request->password , $student->password)){
                $data=array('id'=>encryptor('encrypt',$student->id));
                return response($data, 200);
            }else
                return response($error, 204);
        }else
            return response($error, 204);
        
    }
     
    public function setSession($student){
        return request()->session()->put([
                'userName'=>encryptor('encrypt',$student->name),
                'userEmail'=>encryptor('encrypt',$student->email)
            ]
        );
    }
}
