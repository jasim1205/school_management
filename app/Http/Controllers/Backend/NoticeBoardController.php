<?php

namespace App\Http\Controllers\Backend;

use App\Models\NoticeBoard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notice = NoticeBoard::get();
        return view('backend.noticeboard.index',compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.noticeboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $notice = new NoticeBoard;
            $notice->notice = $request->notice;
            $notice->start_date = $request->start_date;
            $notice->end_date = $request->end_date;
            if($notice->save())
                $this->notice::success('Notice Board Successfully Saved');
                return redirect()->route('notice.index');
        }catch(Exception $e){
            $this->notice::error('Data does not saved.please try again!');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(NoticeBoard $noticeBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $notice = NoticeBoard::findOrFail('encryptor'('decrypt',$id));
        return view('backend.noticeboard.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         try{
            $notice = NoticeBoard::findOrFail('encryptor'('decrypt',$id));
            $notice->notice = $request->notice;
            $notice->start_date = $request->start_date;
            $notice->end_date = $request->end_date;
            if($notice->save())
                $this->notice::success('Notice Board Successfully Saved');
                return redirect()->route('notice.index');
        }catch(Exception $e){
            $this->notice::error('Data does not saved.please try again!');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notice = NoticeBoard::findOrFail('encryptor'('decrypt',$id));
        if($notice->delete())
            $this->notice::success('Data successfully deleted');
            return redirect()->route('notice.index');
    }
}
