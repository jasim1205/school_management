@extends('backend.layouts.app')
@section('title','Student fee List')

@section('content')
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
                    <p><strong>Fee Month:</strong></p>
                    <p><strong>Fee Year:</strong></p>
                </div>
                <div class="col-lg-5">
                    <h5>Student Name</h5>
                    <p><strong>Class Name</strong></p>
                </div>
                <div class="col-lg-2">
                    <label for="">Date: <?= date("Y-m-d") ?></label>
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
                            <th scope="col">{{__('Total Fee')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

@endsection