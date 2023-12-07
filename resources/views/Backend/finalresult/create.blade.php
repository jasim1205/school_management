@extends('backend.layouts.app')
@section('title','Add Result List')

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
<!--start stepper two--> 
<h6 class="text-uppercase">Linear Stepper</h6>
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-header">
            <form method="get" action="">    
                <div class="row g-3">
                    <div class="col-12 col-lg-4">
                        <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Class Name</strong>
                        <span class="text-danger">*</span>
                        </label>
                        <select  id="class_id" name="class_id" required class="form-control">
                            <option value="">Select Class</option>
                            @forelse($classes as $class)
                            <option {{old('class_id')}} value="{{$class->id}}" >{{$class->class_name_en}}</option>
                            @empty
                            <option value="">No Class found</option>
                            @endforelse
                        </select>
                        @if($errors->has('class_id'))
                            <span class="text-danger"> {{ $errors->first('class_id') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-12 col-lg-6">
                        <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Attendance Date</strong>
                        <span class="text-danger">*</span>
                        </label>
                        <input type="date"  value="<?= date('Y-m-d') ?>"  name="att_date" id="" class="form-control">
                    </div>
                    <div class="col-12 col-lg-2 mt-5">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('finalresult.store')}}">
                    @csrf


 <div class="col-12">
    <div class="card">
        <div class="card-header">
            <div class="col-lg-6">
                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Exam</strong>
                <span class="text-danger">*</span>
                </label>
                <select class="default-select wide form-control" id="validationCustom05" name="exam_id" id="">
                        <option value="">Select Exam</option>
                    @forelse($exam as $e)
                        <option value="{{$e->id}}" {{ old('exam_id')==$e->id?"selected":""}}> {{ $e->exam_name}}</option>
                    @empty
                        <option value="">No Role found</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Class</th>
                            <th>Roll</th>
                            <th>Student</th>
                            <th>Total Marks</th>
                            <th>GPA</th>
                            <th>Grade Letter</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($student as $s)
                        <tr>
                            <td>{{ $s->class?->class_name_en }}
                                <input type="hidden" name="class_id" value="{{ $s->class_id }}">
                                <input type="hidden" name="finalresult[{{ $s->id }}][att_date]" value="{{ $_GET['att_date'] }}">
                            </td>
                            <td>{{ $s->roll }}</td>
                            <td>{{ $s->first_name_en }} {{ $s->last_name_en }}
                                <input type="hidden" name="finalresult[{{ $s->id }}][student_id]" value="{{ $s->id }}">
                                <input type="hidden" name="student_id" value="{{ $s->id }}">
                            </td>
                            <td>
                                <input type="text" name="total_marks" id="">
                            </td>
                            <td>
                                <input type="text" name="total_gpa" id="">
                            </td>
                            <td>
                                <input type="text" name="total_gl" id="">
                            </td>
                            <td>
                                <select name="status" class="form-control">
                                    <option value="1">Pass</option>
                                    <option value="0">Fail</option>
                                </select>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <button class="btn btn-success px-4" type="submit">Submit</button>
    </div>
</div>
     
                </form>
            </div>
        </div>
    </div>
</div>
<!--end stepper two--> 

@endsection