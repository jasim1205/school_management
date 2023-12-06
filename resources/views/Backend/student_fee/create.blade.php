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
                <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('studentfee.store')}}">
                    @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Class Name</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select  id="class_id" name="class_id" required class="form-control">
                                    <option value="">Select Class</option>
                                    @forelse($classes as $class)
                                    <option {{old('class_id')==$class->id}} value="{{$class->id}}" >{{$class->class_name_en}}</option>
                                    @empty
                                    <option value="">No Class found</option>
                                    @endforelse
                                </select>
                                @if($errors->has('class_id'))
                                    <span class="text-danger"> {{ $errors->first('class_id') }}</span>
                                @endif
                            </div>
                            
                            <div class="col-12 col-lg-4">
                                <label class="col-lg-4 col-form-label" for=""><strong>Year</strong>
                                <span class="text-danger">*</span>
                                </label>
                               <select name="fee_year" class="form-control">
                                   <option value="">Select Year</option>
                                   @for($i=2023; $i<=date('Y')+1; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                @if($errors->has('fee_year'))
                                    <span class="text-danger"> {{ $errors->first('fee_year') }}</span>
                                @endif
                            </div>
                             <div class="col-12 col-lg-4">
                                 <label class="col-lg-4 col-form-label" for=""><strong>Month</strong>
                                <span class="text-danger">*</span>
                                </label>
                               <select name="fee_month" class="form-control">
                                    <option value="">Select Month</option>                                        
                                    @for($i=1; $i<=12; $i++)
                                        <option value="{{date('m', strtotime('2020-'.$i.'-01'))}}">{{date('F', strtotime('2020-'.$i.'-01'))}}</option>
                                    @endfor

                                </select>
                                @if($errors->has('fee_month'))
                                    <span class="text-danger"> {{ $errors->first('fee_month') }}</span>
                                @endif
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-striped table-bordered">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th>Fee</th>
                                                    <th>Amount</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($fees as $value)
                                                <tr>
                                                    <td>
                                                       {{$value->fee_name}} 
                                                    </td>
                                                    <td>
                                                        {{$value->amount}}
                                                        <input type="hidden" name="fee_amount[{{$value->id}}]" value="{{$value->amount}}">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="fee_id[{{$value->id}}]" value="{{$value->id}}">
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