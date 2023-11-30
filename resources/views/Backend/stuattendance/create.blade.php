@extends('backend.layouts.app')
@section('title','Add School Name')

@section('content')

<div class="col-12 shadow-lg">
    <div class="row">
        <form action="" class="searchform" method="get">
            <div class="row ms-3">
                <div class="col-6">
                    <div class="form-group d-flex">
                        <label class=""><strong>Search Routine</strong></label>
                        <select  id="" name="class_id" required class="form-control shadow-lg">
                            <option value="">Select Class</option>
                            @forelse($classes as $class)
                            <option value="{{$class->id}}" {{ $class->id == old('class_id') ? 'selected' : '' }}>{{$class->class_name_en}}</option>
                            @empty
                            <option value="">No Class found</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="col-3 mt-1">
                    <button type="submit" class="btn btn-info">Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <form action="{{route('studentattendance.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Attendance Date</label>
                        <input type="date"  value="<?= date('Y-m-d') ?>"  name="att_date" id="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <table id="example2" class="display" style="width:100%">
                        <thead>
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
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{asset('public/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/js/plugins-init/datatables.init.js')}}"></script>
@endpush