<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\teacher\AddNewRequest;
use App\Http\Requests\Backend\teacher\UpdateRequest;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\Crypt;
use DB;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::paginate(10);
        return view('backend.teacher.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::get();
        $department = Department::get();
        $designation = Designation::get();
        return view('backend.teacher.create',compact('department','designation','role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try{
            DB::beginTransaction();
            $teacher = new Teacher();
            $teacher->teacher_id=$request->teachId;
            $teacher->first_name_en=$request->fName_en;
            $teacher->first_name_bn=$request->fName_bn;
            $teacher->last_name_en=$request->lName_en;
            $teacher->last_name_bn=$request->lName_bn;
            $teacher->father_name=$request->father_name;
            $teacher->mother_name=$request->mother_name;
            $teacher->gender=$request->gender;
            $teacher->date_of_birth=$request->date_of_birth;
            $teacher->place_of_birth=$request->place_of_birth;
            $teacher->subject=$request->subject;
            $teacher->department_id=$request->department_id;
            $teacher->designation_id=$request->designation_id;
            $teacher->salary=$request->salary;
            $teacher->email=$request->EmailAddress;  
            $teacher->contact_no_en=$request->contactNumber_en;
            $teacher->contact_no_bn=$request->contactNumber_bn;
            $teacher->present_address=$request->present_address;
            $teacher->parmanent_address=$request->parmanent_address;
            $teacher->status=$request->status;
            $teacher->role_id=$request->roleId;
            
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.
                $request->image->extension();
                $request->image->move(public_path('uploads/teachers'),$imageName);
                $teacher->image = $imageName;
            }
            if($teacher->save()){
                $user=new User;
                $user->teacher_id = $teacher->id;
                $user->name_en = $request->fName_en;
                $user->email = $request->EmailAddress;
                $user->contact_no_en = $request->contactNumber_en;
                $user->role_id = $request->roleId;
                $user->status = $request->status;
                $user->password = Hash::make($request->password);
                if($user->save()){
                    DB::commit();
                    $this->notice::success('Successfully saved');
                    return redirect()->route('teacher.index');
                }
            }   
            else
                return redirect()->back()->withInput()->with('error','Please try again');
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please  again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail(encryptor('decrypt',$id));
        return view('backend.teacher.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::get();
        $designation = Designation::get();
        $department = Department::get();
        $teacher = Teacher::findOrFail(encryptor('decrypt',$id));
        return view('backend.teacher.edit',compact('teacher','department','designation','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try{
            DB::beginTransaction();
            $teacher = Teacher::findOrFail(\encryptor('decrypt',$id));
            $teacher->teacher_id=$request->teachId;
            $teacher->first_name_en=$request->fName_en;
            $teacher->first_name_bn=$request->fName_bn;
            $teacher->last_name_en=$request->lName_en;
            $teacher->last_name_bn=$request->lName_bn;
            $teacher->father_name=$request->father_name;
            $teacher->mother_name=$request->mother_name;
            $teacher->gender=$request->gender;
            $teacher->date_of_birth=$request->date_of_birth;
            $teacher->place_of_birth=$request->place_of_birth;
            $teacher->subject=$request->subject;
            $teacher->department_id=$request->department_id;
            $teacher->designation_id=$request->designation_id;
            $teacher->salary=$request->salary;
            $teacher->email=$request->EmailAddress;  
            $teacher->contact_no_en=$request->contactNumber_en;
            $teacher->contact_no_bn=$request->contactNumber_bn;
            if($request->present_address)
                $teacher->present_address=$request->present_address;
            if($request->parmanent_address)
                $teacher->parmanent_address=$request->parmanent_address;
            $teacher->status=$request->status;
            $teacher->role_id=$request->roleId;
            
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.
                $request->image->extension();
                $request->image->move(public_path('uploads/teachers'),$imageName);
                $teacher->image = $imageName;
            }
            if($teacher->save()){
                $user=User::where('teacher_id',$teacher->id)->first();
                $user->name_en = $request->fName_en;
                $user->email = $request->EmailAddress;
                $user->contact_no_en = $request->contactNumber_en;
                $user->role_id = $request->roleId;
                $user->status = $request->status;
                if($request->password)
                    $user->password = Hash::make($request->password);
               
                if($user->save()){
                    DB::commit();
                    return redirect()->route('teacher.index')->with('success','Successfully saved');
                }
            }   
            else
                return redirect()->back()->withInput()->with('error','Please try again');
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
            $teacher = Teacher::findOrFail($id);
            $teacher->delete();
            
            return back()->with('success', 'Data deleted');
            } catch (\Exception $e) {
                // dd($e);
                return back()->with('error', 'Please try again');
            }
    }
}
