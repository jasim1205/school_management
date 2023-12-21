@extends('backend.layouts.app')
@section('title','Admit Card')
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
                            
                            <div class="col-12 col-lg-5">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Exam</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="exam_id" name="exam_id" id="roleId">
                                    <option value="">Select Exam</option>
                                @forelse($exam as $e)
                                    <option value="{{$e->id}}" {{ old('exam_id')==$e->id?"selected":""}}> {{ $e->exam_name}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-5">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Session</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control" id="session_id" name="session_id" id="">
                                    <option value="">Select Session</option>
                                @forelse($session as $s)
                                    <option value="{{$s->id}}" {{ old('session_id')==$s->id?"selected":""}}> {{ $s->session_year_en}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-2 mt-5">
                                <a onclick="window.print()" href="#" rel="noopener" target="_blank" class="btn btn-default float-end no-print"><i class="fas fa-print"></i> Print</a>
                            </div>
                        </div><!---end row-->
                    </div>
                </form> 
            </div>
        </div>
    </div>
    @foreach($student as $value)
    <div class="card d-none">
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
                    
                    <strong><p class="m-0" id="selectedSessionYear"></p></strong>
                </div>
            </div>
               
            <hr>
            <div class="bg-secondary  mb-2">
                <h3 class="text-white" id="selectedExamName">
                   
                </h3>
            </div>
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                   
                    <tr>
                        <th>Name</th>
                        <td>
                            {{$value->first_name_en}} {{$s->last_name_en}}
                        </td>
                        <th>Class</th>
                        <td>
                            {{$value->class->class_name_en}}
                        </td>
                    </tr>
                    <tr>
                        <th>Student Id</th>
                        <td>{{$value->student_id}}</td>
                        <th>Roll No</th>
                        <td>
                            {{$value->roll}}
                        </td>
                    </tr>
                </table>
                <div class="col-3">
                    <p class="border"></p>
                    <h4>Teacher's Signature</h4>
                </div>
            </div> 
        </div>
    </div>
    @endforeach
</div>
<!--end stepper two-->
@endsection
@push('scripts')
  <script>
    $('#exam_id, #session_id').change(function () {
        var selectedExam = $('#exam_id option:selected').text();
        var selectedSession = $('#session_id option:selected').text();

        if (selectedExam !== '' && selectedSession !== '') {
            $('.card').each(function () {
                var $card = $(this);
                $card.find('#selectedExamName').text(selectedExam);
                $card.find('#selectedSessionYear').text('Session:' + selectedSession);
            });
            $('.card').removeClass('d-none');
        } else {
            $('.card').addClass('d-none');
        }
    });
</script>





@endpush



