
@extends('backend.layouts.app')
@section('title','Final Result List')

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
    <hr/>
    <div class="card">
        <div class="card-header text-center">
            <h1>ABC English School & College</h1>
            <h3>Report Card</h3>
            <h5>Exam Name</h5>
            <p>Session</p>
        <div class="row">
            <div class="col-lg-4">
                 <label><strong>Student Name:</strong></label>
            </div>
            <div class="col-lg-4">
                 <label><strong>Class Name:</strong></label>
            </div>
            <div class="col-lg-4">
                 <label><strong>Roll:</strong></label>
            </div>
        </div>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">{{__('Subject Name')}}</th>
                            <th scope="col">{{__('Sub Mark')}}</th>
                            <th scope="col">{{__('Obj Mark')}}</th>
                            <th scope="col">{{__('Practical')}}</th> 
                            <th scope="col">{{__('Total')}}</th>
                            <th scope="col">{{__('GPA')}}</th>
                            <th scope="col">{{__('Grade Letter')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @forealse($)
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

