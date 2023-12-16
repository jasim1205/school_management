@extends('backend.layouts.app')
@section('title','Individual Result List')
@section('content')
@push('styles')
    <style>
        @media print {
            .sidebar-wrapper,.header,.chatbox,.nav-header,.searchform,.heading,.no-print {
                display: none;
            }
            .page-wrapper{
                padding: 0;
                margin:0;
            }
            
        }
    </style>
@endpush
<!--breadcrumb-->
<div class="page-breadcrumb no-print">
    <div class="breadcrumb-title"><h2 class="text-center"><i>Student Admit Card</i></h2></div>
</div>
<!--end breadcrumb-->
<!--start stepper two--> 
<hr class="no-print">
<div id="stepper2" class="bs-stepper">
    <div class="card no-print">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form needs-validation" method="get"  action="">
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            
                            <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Exam</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="exam_id" id="roleId">
                                    <option value="">Select Exam</option>
                                @forelse($exam as $e)
                                    <option value="{{$e->id}}" {{ old('exam_id')==$e->id?"selected":""}}> {{ $e->exam_name}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <button class="btn btn-success px-4 mt-4" type="submit">Search</button>
                            </div>
                        </div><!---end row-->
                    </div>
                </form> 
            </div>
        </div>
    </div>
    @foreach($student as $s)
    <div class="card">
        <div class="card-header text-center">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{asset('public/assets/images/result_logo_2.png')}}" class="" alt="logo icon">
                </div>
                <div class="col-lg-6">
                    <h1>ABC English School & College</h1>
                    <h5 class="text-center">Muradpur, Chittagong, 4205 Bangladesh</h5>
                    <p class="text-center"><strong>Contact:</strong> 88015-555555, 88018-188888</p>
                    <h4>Admit Card</h4>
                </div>
                <div class="col-lg-3">
                    <h5>
                        <img src="{{asset('public/assets/images/result_logo.png')}}" class=""  alt="Student Image">
                    </h5>
                    <p class="m-0"><strong>Session:</strong>  
                       
                    </p>
                </div>
            </div>
               
            <hr>
            <div class="bg-secondary  mb-2">
                <h3 class="text-white">
                    @foreach($exam as $e)
                        {{ $e->exam_name }}
                        @break
                    @endforeach
                </h3>
            </div>
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                   
                    <tr>
                        <th>Name</th>
                        <td>
                            {{$s->first_name_en}} {{$s->last_name_en}}
                        </td>
                        <th>Class</th>
                        <td>
                            {{$s->class->class_name_en}}
                        </td>
                    </tr>
                    <tr>
                        <th>Student Id</th>
                        <td>{{$s->student_id}}</td>
                        <th>Roll No</th>
                        <td>
                            {{$s->roll}}
                        </td>
                    </tr>
                    
                </table>
            </div> 
        </div>
    </div>
    @endforeach
</div>
<!--end stepper two-->
@endsection

