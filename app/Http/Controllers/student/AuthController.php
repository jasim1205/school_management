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
            $user=Student::where('username',$request->username)
                        ->orWhere('email',$request->username)->first();
            if($user){
                if(Hash::check($request->password , $user->password)){
                    $this->setSession($user);
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

    public function setSession($user){
        return request()->session()->put([
                'userId'=>encryptor('encrypt',$user->id),
                'userName'=>encryptor('encrypt',$user->name),
                'userEmail'=>encryptor('encrypt',$user->email)
            ]
        );
    }

    public function signOut(){
        request()->session()->flush();
        return redirect('/')->with('danger','Succfully Logged Out');
    }
}
