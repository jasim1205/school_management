@extends('backend.layouts.app')
@section('title','Student fee List')

@section('content')
@push('styles')
    <style>
        @media print {
            .sidebar-wrapper,.header,.chatbox,.nav-header,.searchform,.bs-stepper,.heading {
                display: none;
            }
            .page-wrapper{
                padding: 0;
                margin:0;
            }
            /* #printable-area {
                position: absolute;
                left: -50;
                top: 0;
            } */
        }
    </style>
@endpush
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3"></div>
</div>
<!--end breadcrumb-->
<div class="card">
    <div class="card-header">
        <h3 class="text-center">ABC English School & College</h3>
        <h5 class="text-center">Muradpur, Chittagong, 4205 Bangladesh</h5>
        <p class="text-center"><strong>Contact:</strong> 88015-555555, 88018-188888</p>
        <hr>
        <div class="row">
            <div class="col-lg-5">
                <h5>Student Payment Slip</h5>
                <p><strong>Payment Month: {{date('F', strtotime('2020-'.$studentfee->first()->fee_month.'-01'))}} {{$stu_fe->fee_year}}</strong></p>
            </div>
            <div class="col-lg-5">
                <h5>{{$stu_fe->student?->first_name_en}} {{$stu_fe->student?->first_name_en}}</h5>
                <p><strong>{{$stu_fe->class?->class_name_en}}</strong></p>
            </div>
            <div class="col-lg-2">
                <label><strong>Date: </strong><?= date("Y-m-d") ?></label>
            </div>
        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">{{__('Fee Type')}}</th>
                        <th scope="col">{{__('Amount')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($studentfee as $value)
                    <tr>
                        <td>{{$value->fee?->fee_name}}</td>
                        <td>{{$value->fee_amount}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th>Total</th>
                        <th>{{$stu_fe->total_fees}}</th>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th style="color: @if($stu_fe->status==1) green @else red @endif;">@if($stu_fe->status==1){{__('PAID')}} @else{{__('UNPAID')}} @endif</th>
                    </tr>
                </tbody>
            </table>
            <div class="col-12">
                <a onclick="window.print()" href="#" rel="noopener" target="_blank" class="btn btn-default float-end"><i class="fas fa-print"></i> Print</a>
            </div>
        </div>
    </div>
</div>

@endsection
