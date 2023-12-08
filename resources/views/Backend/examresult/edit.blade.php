@extends('backend.layouts.app')
@section('title','Edit Result')

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
                <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('examresult.update',encryptor('encrypt',$examresult->id))}}">
                    @csrf
                    @method('Patch')
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Exam</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control " id="validationCustom05" name="exam_id" id="">
                                    <option value="">Select Exam</option>
                                @forelse($exam as $e)
                                    <option value="{{$e->id}}" {{ old('exam_id',$examresult->exam_id)==$e->id?"selected":""}}> {{ $e->exam_name}}</option>
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
                                <select class="default-select wide form-control " id="validationCustom05" name="student_id" id="">
                                    <option value="">Select Student</option>
                                @forelse($student as $s)
                                    <option value="{{$s->id}}" {{ old('student_id',$examresult->student_id)==$s->id?"selected":""}}> {{ $s->first_name_en}}  {{ $s->last_name_en}}</option>
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
                                <select class="default-select wide form-control " id="validationCustom05" name="class_id" id="">
                                    <option value="">Select Class</option>
                                @forelse($classes as $c)
                                    <option value="{{$c->id}}" {{ old('class_id',$examresult->class_id)==$c->id?"selected":""}}> {{ $c->class_name_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                                
                                @if($errors->has('class_id'))
                                    <span class="text-danger"> {{ $errors->first('class_id') }}</span>
                                @endif
                            </div>

                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Section</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control " id="validationCustom05" name="section_id" id="">
                                    <option value="">Select Section</option>
                                @forelse($section as $s)
                                    <option value="{{$s->id}}" {{ old('section_id',$examresult->section_id)==$s->id?"selected":""}}> {{ $s->section_name_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>

                                @if($errors->has('section_id'))
                                    <span class="text-danger"> {{ $errors->first('section_id') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Session</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="session_id" id="">
                                    <option value="">Select Session</option>
                                @forelse($session as $s)
                                    <option value="{{$s->id}}" {{ old('session_id',$examresult->session_id)==$s->id?"selected":""}}> {{ $s->session_year_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>

                                @if($errors->has('session_id'))
                                    <span class="text-danger"> {{ $errors->first('session_id') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Subject</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="subject_id" id="">
                                    <option value="">Select Subject</option>
                                @forelse($subject as $s)
                                    <option value="{{$s->id}}" {{ old('subject_id',$examresult->subject_id)==$s->id?"selected":""}}> {{ $s->subject_name_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>

                                @if($errors->has('subject_id'))
                                    <span class="text-danger"> {{ $errors->first('subject_id') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="userName_en"><strong>Subjective Marks</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="sub_marks" class="form-control" value="{{ old('sub_marks',$examresult->sub_marks)}}" name="sub_marks">
                                @if($errors->has('sub_marks'))
                                    <span class="text-danger"> {{ $errors->first('sub_marks') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="userName_en"><strong>Objective Marks</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="ob_marks" class="form-control" value="{{ old('ob_marks',$examresult->ob_marks)}}" name="ob_marks">
                                @if($errors->has('ob_marks'))
                                    <span class="text-danger"> {{ $errors->first('ob_marks') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="userName_en"><strong>Practical Marks</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="prac_marks" class="form-control" value="{{ old('prac_marks',$examresult->prac_marks)}}" name="prac_marks">
                                @if($errors->has('prac_marks'))
                                    <span class="text-danger"> {{ $errors->first('prac_marks') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for=""><strong>Total</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="total" class="form-control" value="{{ old('total',$examresult->total)}}" name="total">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="userName_en"><strong>GPA Marks</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="gp" class="form-control" value="{{ old('gp',$examresult->gp)}}" name="gp">
                                @if($errors->has('gp'))
                                    <span class="text-danger"> {{ $errors->first('gp') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for=""><strong>Grade Letter</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="gl" class="form-control" value="{{ old('gl',$examresult->gl)}}" name="gl">
                                @if($errors->has('gl'))
                                    <span class="text-danger"> {{ $errors->first('gl') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="status"><strong>Status</strong><i class="text-danger">*</i> </label>
                                <select id="status" class="form-control " name="status">
                                    <option value="1" @if(old('status',$examresult->status)==1) selected @endif>Pass</option>
                                    <option value="0" @if(old('status',$examresult->status)==0) selected @endif>Fail</option>
                                </select>
                                @if($errors->has('status'))
                                    <span class="text-danger"> {{ $errors->first('status') }}</span>
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
@push('scripts')
<script>
        function calculateTotal() {
            let subMarks = parseFloat(document.getElementById('sub_marks').value) || 0;
            let obMarks = parseFloat(document.getElementById('ob_marks').value) || 0;
            let pracMarks = parseFloat(document.getElementById('prac_marks').value) || 0;

            let total = subMarks + obMarks + pracMarks;
            document.getElementById('total').value = total;
            calculateGPA();
            calculateGI();
        }
        document.getElementById('sub_marks').addEventListener('input', calculateTotal);
        document.getElementById('ob_marks').addEventListener('input', calculateTotal);
        document.getElementById('prac_marks').addEventListener('input', calculateTotal);

        function calculateGPA() {
            let totalMarks = parseFloat(document.getElementById('total').value) || 0;
            let gpa = 0;
            if (totalMarks >= 80) {
                gpa = 5.00;
            } else if (totalMarks >= 70) {
                gpa = 4.00;
            } else if (totalMarks >= 60) {
                gpa = 3.50;
            } else if (totalMarks >= 50) {
                gpa = 3.00;
            } else if (totalMarks >= 40) {
                gpa = 2.00;
            } else {
                gpa = 1.00;
            }

            document.getElementById('gp').value = gpa;
        }

        document.getElementById('total').addEventListener('input', calculateGPA);

        function calculateGI(){
             let totalMarks = parseFloat(document.getElementById('total').value) || 0;
             let gI = 0;
             if (totalMarks >= 80) {
                gI = 'A+';
            } else if (totalMarks >= 70) {
                gI = 'A';
            } else if (totalMarks >= 60) {
                gI = 'A-';
            } else if (totalMarks >= 50) {
                gI ='B';
            } else if (totalMarks >= 40) {
                gI = 'C';
            } else {
                gI = 'F';
            }
            document.getElementById('gl').value = gI;
        }
        document.getElementById('total').addEventListener('input', calculateGI);
    </script>
@endpush