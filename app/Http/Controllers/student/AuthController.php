<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\Students\Auth\SignupRequest;
use App\Http\Requests\Students\Auth\SigninRequest;
use Exception;
use Illuminate\Support\Facades\Hash;
use Toastr;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function signInForm(){
        return view('student.auth.login');
    }

    public function signInCheck(SigninRequest $request){
        try{
            $student=Student::where('username',$request->username)
                        ->orWhere('email',$request->username)->first();
            if($student){
                if(Hash::check($request->password , $student->password)){
                    $this->setSession($student);
                    return redirect()->route('studentdashboard')->with('success','Successfully login');
                }else
                    return redirect()->route('frontstu.login')->with('error','Your phone number or password is wrong!');
            }else
                return redirect()->route('frontstu.login')->with('error','Your phone number or password is wrong!');
        }catch(Exception $e){
            dd($e);
            return redirect()->route('frontstu.login')->with('error','Your phone number or password is wrong!');
        }
    }
     
    public function setSession($student){
        return request()->session()->put([
                'userId'=>encryptor('encrypt',$student->id),
                'userName'=>encryptor('encrypt',$student->name),
                'userEmail'=>encryptor('encrypt',$student->email)
            ]
        );
    }

    public function signOut(){
        request()->session()->flush();
        return redirect('/')->with('danger','Succfully Logged Out');
    }
}
