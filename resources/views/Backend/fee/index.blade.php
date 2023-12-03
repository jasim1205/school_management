@extends('backend.layouts.app')
@section('title','Exam List')

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
<h6 class="mb-0 text-uppercase mb-2">DataTable Import</h6>
 <a href="{{route('fee.create')}}" class="btn btn py-1 btn-primary" ><i class="fa fa-plus">ADD NEW</i></a>
<hr/>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">{{__('#SL')}}</th>
                        <th scope="col">{{__('Fees Type')}}</th>
                        <th scope="col">{{__('Amount')}}</th>
                        
                        <th class="white-space-nowrap">{{__('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($fee as $f) 
                    <tr role="row" class="odd">
                        <td>{{++$loop->index}}</td>
                        <td>{{$f->fee_name}}</td>
                        <td>{{$f->amount}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('fee.edit',encryptor('encrypt',$f->id))}}" class=""><i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('fee.destroy', encryptor('encrypt',$f->id))}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none">
                                    <span class=""><i class="fa fa-trash text-danger"></i></span>
                                </button>
                            </form>
                                
                            </div>												
                        </td>												
                    </tr>
                @empty
                    <tr>
                        <th colspan="5" class="text-center">Exam Not Found</th>
                    </tr>
                @endforelse
                </tbody>
                
            </table>
        </div>
    </div>
</div>



@endsection
