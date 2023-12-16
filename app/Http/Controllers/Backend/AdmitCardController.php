<?php

namespace App\Http\Controllers\Backend;

use App\Models\AdmitCard;
use App\Models\Session;
use App\Models\Exam;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmitCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::get();
        $exam = Exam::get();
        $session = Session::get();
        return view('backend.admitcard.index',compact('student','exam','session'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(AdmitCard $admitCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdmitCard $admitCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdmitCard $admitCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdmitCard $admitCard)
    {
        //
    }
}
