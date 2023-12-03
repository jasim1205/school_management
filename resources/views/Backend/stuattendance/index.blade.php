@extends('backend.layouts.app')
@section('title','Attendance List')

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
   
</div>
<!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">DataTable Import</h6>
    <a href="{{route('studentattendance.create')}}" class="btn btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">{{__('#SL')}}</th>
                            <th scope="col">{{__('Attendance Date')}}</th>
                            <th scope="col">{{__('Class Name')}}</th>
                            <th scope="col">{{__('Present')}}</th>
                            <th scope="col">{{__('Absent')}}</th>
                            <th class="white-space-nowrap">{{__('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                     @forelse($stuattendance as $s) 
                                <tr role="row" class="odd">
                                    <td>{{++$loop->index}}</td>
                                    <td>{{$s->att_date}}</td>
                                    <td>{{$s->class?->class_name_en}}</td>
                                    <td>@if($s->status==1){{__('Present')}} @else{{__('Absent')}} @endif</td>
                                    <td>@if($s->status==0){{__('Absent')}} @else{{__('Present')}} @endif</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('studentattendance.show',encryptor('encrypt',$s->id))}}" class=""><i class="fas fa-eye"></i>
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

@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>
@endpush