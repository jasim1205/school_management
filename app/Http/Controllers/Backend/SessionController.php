<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $session = Session::paginate(10);
        return view('backend.session.index',compact('session'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.session.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data = new Session();
            $data->session_year_en=$request->session_year_en;
            $data->session_year_bn=$request->session_year_bn;
            
            if($data->save())
                $this->notice::success('Successfully saved');
                return redirect()->route('session.index');
        }catch(Exception $e){
            // dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Session $session)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $session=Session::findOrFail(encryptor('decrypt',$id));
        return view('backend.session.edit',compact('session'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $session=Session::findOrFail(encryptor('decrypt',$id));
            $session->session_year_en=$request->session_year_en;
            $session->session_year_bn=$request->session_year_bn;
            
            if($session->save())
                $this->notice::success('Successfully Updated');
                return redirect()->route('session.index');
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
        $session=Session::findOrFail(encryptor('decrypt',$id));
        if($session->delete())
            $this->notice::success('Data deleted Parmanently');
            return back();
    }
}
