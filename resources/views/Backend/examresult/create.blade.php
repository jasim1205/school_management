@extends('backend.layouts.app')
@section('title','Add List')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Forms</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Student Result Form</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<!--start stepper two--> 
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('examresult.store')}}">
                    @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Class Name</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="class_id" id="" onchange="$('.sclass').hide();$('.sclass'+this.value).show()" onchange="showStudents(this)">
                                    <option value="">Select Class</option>
                                @forelse($classes as $c)
                                    <option value="{{$c->id}}" {{ old('class_id')==$c->id?"selected":""}}> {{ $c->class_name_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                                
                            </div>
                            <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Exam</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="exam_id">
                                    <option value="">Select Exam</option>
                                @forelse($exam as $e)
                                    <option value="{{$e->id}}" {{ old('exam_id')==$e->id?"selected":""}}> {{ $e->exam_name}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Student</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="student_id" id="">
                                    <option value="">Select Student</option>
                                @forelse($student as $s)
                                    <option class="sclass sclass{{$s->class_id}}" value="{{$s->id}}" {{ old('student_id')==$s->id?"selected":""}}> {{ $s->first_name_en}}  {{ $s->last_name_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Section</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="section_id" id="">
                                    <option value="">Select Section</option>
                                @forelse($section as $s)
                                    <option value="{{$s->id}}" {{ old('section_id')==$s->id?"selected":""}}> {{ $s->section_name_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Session</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="validationCustom05" name="session_id" id="">
                                    <option value="">Select Session</option>
                                @forelse($session as $s)
                                    <option value="{{$s->id}}" {{ old('session_id')==$s->id?"selected":""}}> {{ $s->session_year_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                            </div>
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped table-bordered">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th scope="col">{{__('Subject')}}</th>
                                            <th scope="col">{{__('Subjective Marks')}}</th> 
                                            <th scope="col">{{__('Objective Marks')}}</th> 
                                            <th scope="col">{{__('Practical')}}</th>
                                            <th scope="col">{{__('Total')}}</th>
                                            <th scope="col">{{__('GPA')}}</th>
                                            <th scope="col">{{__('Grade Letter')}}</th>
                                            <th scope="col">{{__('Status')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subject->take(10) as $value)
                                        <tr role="row" class="odd">
                                            <td>{{$value->subject_name_en}}
                                            <input type="hidden" name="result[{{ $value->id }}][subject_id]" value="{{ $value->id }}">
                                            </td>
                                            <td>
                                                <input type="text" id="sub_marks_{{ $value->id }}" class="form-control" value="{{ old('sub_marks')}}" name="result[{{ $value->id }}][sub_marks]">
                                            </td>
                                            <td>
                                                <input type="text" id="ob_marks_{{ $value->id }}" class="form-control" value="{{ old('ob_marks')}}" name="result[{{ $value->id }}][ob_marks]">
                                            </td>
                                            <td>
                                                <input type="text" id="prac_marks_{{ $value->id }}" class="form-control" value="{{ old('prac_marks')}}" name="result[{{ $value->id }}][prac_marks]">
                                            </td>
                                            <td>
                                                <input type="text" id="total_{{ $value->id }}" class="form-control" value="{{ old('total')}}" name="result[{{ $value->id }}][total]">
                                            </td>
                                            <td>
                                                <input type="text" id="gp_{{ $value->id }}" class="form-control" value="{{ old('gp')}}" name="result[{{ $value->id }}][gp]">
                                            </td>
                                            <td> 
                                                <input type="text" id="gl_{{ $value->id }}" class="form-control" value="{{ old('gl')}}" name="result[{{ $value->id }}][gl]">
                                            </td>
                                            <td>
                                                <select id="status{{ $value->id }}" class="form-control shadow-lg" name="result[{{ $value->id }}][status]">
                                                    <option value="1" @if(old('status', 1) == 1) selected @endif>Pass</option>
                                                    <option value="0" @if(old('status', 1) == 0) selected @endif>Fail</option>
                                                </select>
                                            </td>                                  
                                        </tr>
                                       
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-lg-6">
                                <button class="btn btn-success px-4 mt-4" type="submit">Submit</button>
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
        $(document).ready(function () {
            function calculateTotal(subjectId) {
                var subMarks = parseFloat($('#sub_marks_' + subjectId).val()) || 0;
                var obMarks = parseFloat($('#ob_marks_' + subjectId).val()) || 0;
                var pracMarks = parseFloat($('#prac_marks_' + subjectId).val()) || 0;
                var total = subMarks + obMarks + pracMarks;
                $('#total_' + subjectId).val(total);
                calculateGPA(subjectId);
                calculateGI(subjectId);
            }

            function calculateGPA(subjectId) {
                var totalMarks = parseFloat($('#total_' + subjectId).val()) || 0;
                var gpa = 0;
                if (totalMarks >= 80) {
                    gpa = 5.00;
                } else if (totalMarks >= 70) {
                    gpa = 4.00;
                } else if (totalMarks >= 60) {
                    gpa = 3.5;
                } else if (totalMarks >= 50) {
                    gpa = 3.00;
                } else if (totalMarks >= 40) {
                    gpa = 2.0;
                } else {
                    gpa = 'F';
                }
                $('#gp_' + subjectId).val(gpa);
            }

            function calculateGI(subjectId) {
                var totalMarks = parseFloat($('#total_' + subjectId).val()) || 0;
                var gI = '';
                if (totalMarks >= 80) {
                    gI = 'A+';
                } else if (totalMarks >= 70) {
                    gI = 'A';
                } else if (totalMarks >= 60) {
                    gI = 'A-';
                } else if (totalMarks >= 50) {
                    gI = 'B';
                } else if (totalMarks >= 40) {
                    gI = 'C';
                } else {
                    gI = 'F';
                }
                $('#gl_' + subjectId).val(gI);
            }

            $('[id^=sub_marks_]').on('input', function () {
                var subjectId = this.id.split('_')[2];
                calculateTotal(subjectId);
            });

            $('[id^=ob_marks_]').on('input', function () {
                var subjectId = this.id.split('_')[2];
                calculateTotal(subjectId);
            });

            $('[id^=prac_marks_]').on('input', function () {
                var subjectId = this.id.split('_')[2];
                calculateTotal(subjectId);
            });

            $('[id^=total_]').on('input', function () {
                var subjectId = this.id.split('_')[2];
                calculateGPA(subjectId);
                calculateGI(subjectId);
            });
        });
    </script>
@endpush