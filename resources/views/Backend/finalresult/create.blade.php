@extends('backend.layouts.app')
@section('title','Add Result List')

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
            
        </div>
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('finalresult.store')}}">
                    @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Exam</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="exam_id" id="">
                                    <option value="">Select Exam</option>
                                @forelse($exam as $e)
                                    <option value="{{$e->id}}" {{ old('exam_id')==$e->id?"selected":""}}> {{ $e->exam_name}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                                @if($errors->has('exam_id'))
                                    <span class="text-danger"> {{ $errors->first('exam_id') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Student</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="student_id" id="">
                                    <option value="">Select Student</option>
                                @forelse($student as $s)
                                    <option value="{{$s->id}}" {{ old('student_id')==$s->id?"selected":""}}> {{ $s->first_name_en}}  {{ $s->last_name_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                                @if($errors->has('student_id'))
                                    <span class="text-danger"> {{ $errors->first('student_id') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Class Name</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="class_id" id="">
                                    <option value="">Select Class</option>
                                @forelse($classes as $c)
                                    <option value="{{$c->id}}" {{ old('class_id')==$c->id?"selected":""}}> {{ $c->class_name_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                                
                                @if($errors->has('class_id'))
                                    <span class="text-danger"> {{ $errors->first('class_id') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="userName_en"><strong>Total Marks</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="total_marks" class="form-control" value="{{ old('total_marks')}}" name="total_marks">
                                @if($errors->has('total_marks'))
                                    <span class="text-danger"> {{ $errors->first('total_marks') }}</span>
                                @endif
                            </div>
                           
                            <div class="col-12 col-lg-6">
                                <label for="userName_en"><strong>Total GPA</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="total_gp" class="form-control" value="{{ old('total_gp')}}" name="total_gp">
                                @if($errors->has('total_gp'))
                                    <span class="text-danger"> {{ $errors->first('total_gp') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for=""><strong>Total Grade Letter</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="total_gl" class="form-control" value="{{ old('total_gl')}}" name="total_gl">
                                @if($errors->has('total_gl'))
                                    <span class="text-danger"> {{ $errors->first('total_gl') }}</span>
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