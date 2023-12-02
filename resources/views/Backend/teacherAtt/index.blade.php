@extends('backend.layouts.app')
@section('title','Teacher Attendance List')

@section('content')

<div class="col-12">
    <div class="card shadow-lg">
        <div class="card-header">
            <h4 class="card-title">Period Datatable</h4>
            <a href="{{route('teacheratt.create')}}" class="btn btn-lg py-3 btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th scope="col">{{__('#SL')}}</th>
                            <th scope="col">{{__('Attendance Date')}}</th>
                            <th scope="col">{{__('Present')}}</th>
                            <th scope="col">{{__('Absent')}}</th>
                            <th class="white-space-nowrap">{{__('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                            @forelse($teacherAtt as $t) 
                                <tr role="row" class="odd">
                                    <td>{{++$loop->index}}</td>
                                    <td>{{$t->att_date}}</td>
                                    <td>@if($t->status==1){{__('Present')}} @else{{__('Absent')}} @endif</td>
                                    <td>@if($t->status==0){{__('Absent')}} @else{{__('Present')}} @endif</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('teacheratt.show',encryptor('encrypt',$t->id))}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-eye"></i>
                                        </a>
                                        </div>												
                                    </td>												
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="3" class="text-center">Data not found</th>
                                </tr>
                            @endforelse                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
    <script src="{{asset('public/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/js/plugins-init/datatables.init.js')}}"></script>
@endpush