@extends('backend.layouts.app')
@section('title','Add School Name')

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
                <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('feepayment.store')}}">
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
                            <div class="col-12 col-lg-2 mt-5">
                                <button type="submit" class="btn btn-info">Search</button>
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <label class="col-lg-4 col-form-label" for="validationCustom01"><strong>Attendance Date</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <input type="date"  value="<?= date('Y-m-d') ?>"  name="att_date" id="" class="form-control">
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-striped table-bordered">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th>Class</th>
                                                    <th>Roll</th>
                                                    <th>Student</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($student as $s)
                                                <tr>
                                                    <td>{{ $s->class?->class_name_en }}
                                                        <input type="hidden" name="attendance[{{ $s->id }}][class_id]" value="{{ $s->id }}">
                                                    </td>
                                                    <td>{{ $s->roll }}</td>
                                                    <td>{{ $s->first_name_en }} {{ $s->last_name_en }}
                                                        <input type="hidden" name="attendance[{{ $s->id }}][student_id]" value="{{ $s->id }}">
                                                    </td>
                                                    <td>
                                                        <select name="attendance[{{ $s->id }}][status]" class="form-control">
                                                            <option value="1">Present</option>
                                                            <option value="0">Absent</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="3">No data Found</td>
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
                        </div><!---end row-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end stepper two--> 

@endsection
