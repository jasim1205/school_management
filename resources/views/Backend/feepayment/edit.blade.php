@extends('backend.layouts.app')
@section('title','Add payment')

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
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('feepayment.update',encryptor('encrypt',$payment->id))}}">
                    @csrf
                    @method('Patch')
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">

                            <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Class Name</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select  id="class_id" name="class_id" class="form-control">
                                    <option value="">Select Class</option>
                                    @forelse($classes as $class)
                                    <option {{old('class_id',$payment->class_id)==$class->id?'selected':''}} value="{{$class->id}}" >{{$class->class_name_en}}</option>
                                    @empty
                                    <option value="">No Class found</option>
                                    @endforelse
                                </select>
                                @if($errors->has('class_id'))
                                    <span class="text-danger"> {{ $errors->first('class_id') }}</span>
                                @endif
                            </div>
                             <div class="col-12 col-lg-4">
                                 <label class="col-lg-4 col-form-label" for=""><strong>Month</strong>
                                <span class="text-danger">*</span>
                                </label>
                               <select name="fee_month" class="form-control">
                                       
                                    @foreach($months as $month => $monthName)
                                    <option @if($month == request()->get('month',$payment->fee_month)) selected @endif value="{{ $month }}">{{ $monthName }}</option>
                                    @endforeach

                                </select>
                                @if($errors->has('fee_month'))
                                    <span class="text-danger"> {{ $errors->first('fee_month') }}</span>
                                @endif
                            </div>
                            
                            <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for=""><strong>Year</strong>
                                <span class="text-danger">*</span>
                                </label>
                               <select name="fee_year" class="form-control">
                                    
                                                                            
                                    @foreach($years as $year => $yearName)
                                    <option @if($year == request()->get('year',$payment->fee_year)) selected @endif value="{{ $year }}">{{ $yearName }}</option>
                                    @endforeach

                                </select>
                                @if($errors->has('fee_year'))
                                    <span class="text-danger"> {{ $errors->first('fee_year') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Fees Type</strong><i class="text-danger">*</i> 
                                </label>
                                 <select class="default-select wide form-control" id="validationCustom05" name="fee_id" id="">
                                    <option value="">Select Student</option>
                                @forelse($fees as $s)
                                    <option value="{{$s->id}}" {{ old('fee_id',$payment->fee_id)==$s->id?"selected":""}}> {{ $s->fee_name}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                                @if($errors->has('fee_id'))
                                    <span class="text-danger"> {{ $errors->first('fee_id') }}</span>
                                @endif
                                
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-striped table-bordered">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th>Roll</th>
                                                    <th>Student</th>
                                                    <th>Amount</th>
                                                    <th>Payment Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($student as $s)
                                                <tr>
                                                    <td>{{ $s->roll }}
                                                        <input type="hidden" name="student_roll" value="{{ $s->id }}">
                                                    </td>
                                                    <td>{{ $s->first_name_en }} {{ $s->last_name_en }}
                                                        <input type="hidden" name="student_name" value="{{ $s->id }}">
                                                    </td>
                                                
                                                    <td>
                                                        <input type="text" id="amount" class="form-control" value="{{ old('amount',$payment->amount)}}" name="amount">
                                                    </td>
                                                    <td>
                                                        <input type="date" id="payment_date" class="form-control" value="{{ old('payment_date',$payment->payment_date)}}" name="payment_date">
                                                    </td>
                                                    <td>
                                                        <select id="status" class="form-control" name="status">
                                                            <option value="1" @if(old('status',$payment->status)==1) selected @endif>paid</option>
                                                            <option value="0" @if(old('status',$payment->status)==0) selected @endif>unpaid</option>
                                                        </select>
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