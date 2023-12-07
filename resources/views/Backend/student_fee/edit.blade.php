@extends('backend.layouts.app')
@section('title','Fee details List')
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
</div>
<!--end breadcrumb-->
<!--start stepper two--> 
<h6 class="text-uppercase">Linear Stepper</h6>
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form needs-validation" method="post" action="{{route('studentfee.update',encryptor('encrypt',$stu_fe->id))}}">
                    @csrf
                    @method("PATCH")
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-4">
                                <label ><strong>Student: {{ $student->first_name_en }} {{$student->last_name_en}}</strong></label>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label><strong>Year : {{$studentfee->first()->fee_year}}</strong></label>
                            </div>
                             <div class="col-12 col-lg-4">
                                <label><strong>Month: {{date('F', strtotime('2020-'.$studentfee->first()->fee_month.'-01'))}}</strong></label>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-striped table-bordered">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th>Fee</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($studentfee as $value)
                                                <tr>
                                                    <td>
                                                       {{$value->fee?->fee_name}} 
                                                    </td>
                                                    <td>
                                                        <input type="text" name="fee_amount[{{$value->id}}]" value="{{$value->fee_amount}}">
                                                    </td>
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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