@extends('backend.layouts.app')
@section('title','Individual Result List')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb">
    <div class="breadcrumb-title"><h2 class="text-center"><i>Student Individual Exam Report</i></h2></div>
</div>
<!--end breadcrumb-->
<!--start stepper two--> 
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form needs-validation" method="get"  action="">
                    @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                             <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Class Name</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="class_id" name="class_id" id="">
                                    <option value="">Select Class</option>
                                @forelse($classes as $c)
                                    <option value="{{$c->id}}" {{ old('class_id')==$c->id?"selected":""}}> {{ $c->class_name_en}}</option>
                                @empty
                                    <option value="">No Class found</option>
                                @endforelse
                                </select>
                                
                            </div>
                            <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Student</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="student_id" name="student_id" id="">
                                    <option value="">Select Student</option>
                                @forelse($student as $s)
                                    <option value="{{$s->id}}" {{ old('student_id')==$s->id?"selected":""}}> {{ $s->first_name_en}}  {{ $s->last_name_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                            </div>
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
    <div class="card">
        <div class="card-header text-center">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{asset('public/assets/images/logo.png')}}" class="w-100 mt-5" alt="logo icon">
                </div>
                <div class="col-lg-6">
                    <h1>ABC English School & College</h1>
                    <h5 class="text-center">Muradpur, Chittagong, 4205 Bangladesh</h5>
                    <p class="text-center"><strong>Contact:</strong> 88015-555555, 88018-188888</p>
                </div>
                <div class="col-lg-3">
                    <img src="" class="w-100 mt-5" alt="student image">
                </div>
            </div>
            <hr>
            <div  class="border mb-2">
                <h3 class="bg-secondary text-white">Exam Name</h3>
            </div>
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <td>Kaiser Ahmed</td>
                        <th>Class</th>
                        <td>Class-1</td>
                    </tr>
                    <tr>
                        <th>Student Id</th>
                        <td></td>
                        <th>Session</th>
                        <td></td>
                    </tr>
                </table>
            </div>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">{{__('Subject Name')}}</th>
                            <th scope="col">{{__('Sub Mark')}}</th>
                            <th scope="col">{{__('Obj Mark')}}</th>
                            <th scope="col">{{__('Practical')}}</th> 
                            <th scope="col">{{__('Total')}}</th>
                            <th scope="col">{{__('GPA')}}</th>
                            <th scope="col">{{__('Grade Letter')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $totalMarks = 0;
                            $totalGPA = 0;
                            $subjectCount = count($final)
                        @endphp
                        @foreach($final as $f)
                            <tr>
                                <td>{{$f->subject?->subject_name_en}}</td>
                                <td>{{$f->sub_marks}}</td>
                                <td>{{$f->ob_marks}}</td>
                                <td>{{$f->prac_marks}}</td>
                                <td>{{$f->total}}</td>
                                <td>{{$f->gp}}</td>
                                <td>{{$f->gl}}</td>
                            </tr>
                            @php
                                $totalMarks += $f->total;
                                $totalGPA += $f->gp;
                                $averageGPA = $subjectCount > 0 ? $totalGPA / $subjectCount : 0
                            @endphp
                        @endforeach
                        @if($totalMarks == true)
                            <tr>
                                <th colspan="4">Total</th>
                                <th>{{$totalMarks}}</th>
                                <th>{{$averageGPA}}</th>
                                <th>{{}}</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--end stepper two-->
@endsection
