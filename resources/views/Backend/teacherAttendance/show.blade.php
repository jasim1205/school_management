@extends('backend.layouts.app')
@section('title','Add School Name')

@section('content')
<div class="col-12">
    <div class="row">
        <div class="card mt-2">
            <div class="card-header">
                <div class="col-lg-12">
                    <div class="form-group col-12 col-lg-6">
                            <h4>Attendance Date: {{$att_date}}</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>Teacher</th>
                                <th>Status</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($teacherAttend as $t)
                                <tr>
                                    <td>{{ $t->teacher?->first_name_en }} {{ $t->teacher?->last_name_en }}
                                    </td>
                                    <td>
                                        {{($t->status==1?'Present':'Absent')}}
                                    </td>
                                    <td>
                                        <a href="{{route('teacherattend.singleedit',encryptor('encrypt',$t->id))}}" class=""><i class="fas fa-edit"></i>
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
    </div>
</div>
@endsection
