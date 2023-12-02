@extends('backend.layouts.app')
@section('title','department List')

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
<a href="{{route('department.create')}}" class="btn btn-lg py-3 btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
<hr/>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        
                        <th scope="col">{{__('#SL')}}</th>
                        <th scope="col">{{__('Department Name')}}</th>
                        <th class="white-space-nowrap">{{__('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($department as $value)
                        <tr>
                            <td>{{++$loop->index}}</td>
                            <td>{{$value->department_name}}</td>
                            
                            <td>
                                    <div class="d-flex">
                                    <a href="{{route('department.edit',encryptor('encrypt',$value->id))}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form id=""
                                            action="{{ route('department.destroy',encryptor('encrypt',$value->id))}}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="border:none">
                                                <span class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash text-white"></i></span>
                                            </button>
                                    </form>
                                </div>
                                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="3" class="text-center">Department not found</th>
                        </tr>
                    @endforelse
                </tbody>
                
            </table>
        </div>
    </div>
</div>

@endsection