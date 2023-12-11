@extends('backend.layouts.app')
@section('title','Add Result List')

@section('content')
<!--start stepper two--> 
<hr>
<div id="stepper2" class="bs-stepper">
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
                        <td>
                            
                        </td>
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
                            $subjectCount = count($finalresult)
                        @endphp
                        @foreach($finalresult as $f)
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
                                <th>{{ number_format($averageGPA, 2) }}</th>
                                <th>

                                </th>
                            </tr>
                        @endif
                    </tbody>
                </table>
                 <a onclick="window.print()" href="#" rel="noopener" target="_blank" class="btn btn-default float-end no-print"><i class="fas fa-print"></i> Print</a>
            </div>
        </div>
    </div>
</div>
<!--end stepper two-->
@endsection
@push('scripts')

@endpush