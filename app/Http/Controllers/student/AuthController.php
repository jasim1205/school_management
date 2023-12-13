<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Student;
use App\Http\Requests\Students\SignupRequest;
use App\Http\Requests\Students\SigninRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

class AuthController extends Controller
{
    
    public function signInForm(){
        return view('student.auth.login');
    }

    public function signInCheck(SigninRequest $request){
        try{
            $user=Student::where('username',$request->username)
                        ->orWhere('email',$request->username)->first();
            if($user){
                if($user->status==1){
                    if(Hash::check($request->password , $user->password)){
                        $this->setSession($user);
                        return redirect()->route('dashboard')->with('success','Successfully login');
                    }else
                        return redirect()->route('login')->with('error','Your phone number or password is wrong!');
                }else
                    return redirect()->route('login')->with('error','You are not active user. Please contact to authority!');
        }else
                return redirect()->route('login')->with('error','Your phone number or password is wrong!');
        }catch(Exception $e){
            //dd($e);
            return redirect()->route('login')->with('error','Your phone number or password is wrong!');
        }
    }

    public function setSession($user){
        return request()->session()->put([
                'userId'=>encryptor('encrypt',$user->id),
                'userName'=>encryptor('encrypt',$user->name_en),
                'email'=>encryptor('encrypt',$user->email),
                'role_id'=>encryptor('encrypt',$user->role_id),
                'accessType'=>encryptor('encrypt',$user->full_access),
                'role'=>encryptor('encrypt',$user->role->name),
                'roleIdentity'=>encryptor('encrypt',$user->role->identity),
                'language'=>encryptor('encrypt',$user->language),
                'Contact'=>encryptor('encrypt',$user->contact_no_en),
                'image'=>$user->image ?? 'no-image.png',
                'image'=>$user->teacher?->image,
            ]
        );
    }

    public function signOut(){
        request()->session()->flush();
        return redirect('login')->with('danger','Succfully Logged Out');
    }
    // public function show(User $data)
    // {
    //     return view('backend.user.profile', compact('data')); 
    // }
}
