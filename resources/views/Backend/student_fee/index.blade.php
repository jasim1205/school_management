@extends('backend.layouts.app')
@section('title','Student fee List')

@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Tables</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">DataTable Import</h6>
    <a href="{{route('studentfee.create')}}" class="btn btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">{{__('#SL')}}</th>
                            <th scope="col">{{__('Student')}}</th>
                            <th scope="col">{{__('Class')}}</th>
                            <th scope="col">{{__('Total Fee')}}</th>
                            <th scope="col">{{__('Month')}}</th> 
                            <th scope="col">{{__('Year')}}</th>
                            <th scope="col">{{__('status')}}</th>
                            <th class="white-space-nowrap">{{__('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($studentfee as $value)
                        <tr role="row" class="odd">
                            <td>{{++$loop->index}}</td>
                            <td>{{$value->student->first_name_en}} {{$value->student->last_name_en}}</td>
                            <td>{{$value->class?->class_name_en}}</td>
                            <td>{{$value->total_fees}}</td>
                            <td>{{date('F', strtotime('2020-'.$studentfee->first()->fee_month.'-01'))}}</td>
                            <td>{{$value->fee_year}}</td>
                            <td style="color: @if($value->status==1) green @else red @endif;">@if($value->status==1){{__('PAID')}} @else{{__('UNPAID')}} @endif</td>

                            <td>
                                <div class="d-flex">
                                    @if($value->status != '1')
                                        <a href="{{ route('studentfee.edit', encryptor('encrypt', $value->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        
                                        <form id="" action="{{ route('studentfee.destroy', encryptor('encrypt', $value->id)) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button style="background: none; border: none;" type="submit">
                                                <i class="fa fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('studentfee.feepayment', encryptor('encrypt', $value->id)) }}">
                                            <i class="fa fa-list text-secondary"></i>
                                            Payment
                                        </a>
                                    @endif
                                    @if($value->status == 1)
                                        <a href="{{ route('paymentslip', encryptor('encrypt', $value->id)) }}">
                                            Pay Slip
                                        </a>
                                    @endif


                                </div>
                            </td>                                        
                        </tr>
                        @empty
                        <tr>
                            <th colspan="9" class="text-center">No Pruduct Found</th>
                        </tr>
                        @endforelse
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
@endsection
