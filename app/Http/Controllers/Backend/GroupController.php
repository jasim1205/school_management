<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $group = Group::paginate(10);
        return view('backend.group.index',compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            $group = new Group;
            $group->group_name_en = $request->group_name_en;
            $group->group_name_bn = $request->group_name_bn;
            if($group->save())
                $this->notice::success('Group Successfully Saved');
                return redirect()->route('group.index');
        }
        catch(Exception $e)
        {
            // dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $group = Group::findOrFail(encryptor('decrypt',$id));
        return view('backend.group.edit',compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
         try
        {
            $group = Group::findOrFail(encryptor('decrypt',$id));
            $group->group_name_en = $request->group_name_en;
            $group->group_name_bn = $request->group_name_bn;
            if($group->save())
                $this->notice::success('Group Successfully Updated');
                return redirect()->route('group.index');
        }
        catch(Exception $e)
        {
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
        $group = Group::findOrFail(encryptor('decrypt',$id));
        if($group->delete())
            $this->notice::success('Group successfully deleted');
            return back();
    }
}
