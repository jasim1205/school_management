@extends('backend.layouts.app')
@section('title','Edit Period')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Forms</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Update Period</li>
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
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <div class="bs-stepper-content">
                 <form class="form" method="post"action="{{route('period.update',encryptor('encrypt',$period->id))}}">
                                @csrf
                                @method('PATCH')
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                 <label class="col-sm-3 col-form-label"><strong>Period Name </strong><i class="text-danger">*</i></label>
                                
                                <input type="text" id="class_name_en" class="form-control shadow-lg" value="{{ old('period_name',$period->period_name)}}" name="period_name">

                                @if($errors->has('period_name'))
                                <span class="text-danger"> {{ $errors->first('class_name_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-sm-3 col-form-label"><strong>Duration</strong></label>
                                
                                <input type="text" id="duration" class="form-control shadow-lg" value="{{ old('duration',$period->duration)}}" name="duration">
                                @if($errors->has('duration'))
                                    <span class="text-danger"> {{ $errors->first('duration') }}</span>
                                @endif
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