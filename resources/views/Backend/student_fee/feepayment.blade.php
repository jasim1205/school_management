@extends('backend.layouts.app')
@section('title','Student fee List')

@section('content')
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-header">
            <h3>Student Fee Payment</h3>
        </div>
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form needs-validation" method="post"action="{{route('feeupdate',encryptor('encrypt',$stufe->id))}}">
                    @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-striped table-bordered">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th scope="col">{{__('Student')}}</th>
                                                    <th scope="col">{{__('Class')}}</th>
                                                    <th scope="col">{{__('Total Fee')}}</th>
                                                    <th scope="col">{{__('Month')}}</th> 
                                                    <th scope="col">{{__('Year')}}</th>
                                                    <th scope="col">{{__('status')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{$stufe->student?->first_name_en }} {{ $stufe->student?->last_name_en }}</td>
                                                    <td>{{ $stufe->class?->class_name_en }}</td>
                                                    <td>{{$stufe->total_fees}}</td>
                                                    <td>{{$stufe->fee_month}}</td>
                                                    <td>{{$stufe->fee_year}}</td>
                                                    <td>
                                                        <select id="status" class="form-control" name="status">
                                                                <option value="1" @if(old('status')==1) selected @endif>Paid</option>
                                                                <option value="0" @if(old('status')==0) selected @endif>Unpaid</option>
                                                        </select>
                                                    </td>
                                                </tr>
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

@endsection
