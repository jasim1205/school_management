@extends('backend.layouts.app')
@section('title','Add Fee')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Forms</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Fee Add </li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
       
    </div>
</div>
<!--end breadcrumb-->
<!--start stepper two--> 
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <div class="bs-stepper-content">
               <form class="form" method="post"action="{{route('fee.store')}}">
                                @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label class="col-sm-3 col-form-label"><strong>Fee Name </strong><i class="text-danger">*</i></label>
                                
                                <input type="text" id="" class="form-control" value="{{ old('fee_name')}}" name="fee_name" placeholder="Input Fee name">

                                @if($errors->has('fee_name'))
                                    <span class="text-danger"> {{ $errors->first('fee_name') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-sm-3 col-form-label"><strong>Amount</strong></label>
                                
                                <input type="text" id="" class="form-control" value="{{ old('amount')}}" name="amount" placeholder="amount">
                                @if($errors->has('amount'))
                                    <span class="text-danger"> {{ $errors->first('amount') }}</span>
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