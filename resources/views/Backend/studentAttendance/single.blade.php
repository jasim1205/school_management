@extends('backend.layouts.app')
@section('title','Add School Name')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Forms</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Wizard</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<!--start stepper two--> 
<h6 class="text-uppercase">Linear Stepper</h6>
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-header">
             <h1 class="mt-4">Attendance</h1>
            <div class="d-flex">
                <p><b>Attendance Edit-/</b></p>
                <p><b>Date: {{date('d-M-Y',strtotime($attend->att_date))}}</b></p>
            </div>
        </div>
        <div class="card-body">
            <div class="bs-stepper-content">
                 <form class="form" method="post"action="{{route('studentupdate',encryptor('encrypt',$attend->id))}}">
                                @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label for=""><strong>Student Name</strong><i class="text-danger">*</i> </label>
                                            
                                <input type="text" id="" class="form-control" value="{{ old('student_id',$attend->student?->first_name_en)}}  {{ $attend->student?->last_name_en }}" name="student_id" readonly>
                                
                            </div>
                            <div class="col-12 col-lg-6">
                                <label><strong>Status</strong></label>
                                <select name="status" id="" class="form-control">
                                    <option value="1" @if(old('status',$attend->status)==1) selected @endif>Present</option>
                                    <option value="0" @if(old('status',$attend->status)==0) selected @endif>Absent</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <button class="btn btn-success px-4" type="submit">Submit</button>
                            </div>
                        </div><!---end row-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end stepper two--> 

@endsection
