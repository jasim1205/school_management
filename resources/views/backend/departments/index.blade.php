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
                <li class="breadcrumb-item active" aria-current="page">Department List</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <a href="{{route('department.create')}}" class="btn  btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
    </div>
</div>
<!--end breadcrumb-->


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
                                    <a href="{{route('department.edit',encryptor('encrypt',$value->id))}}" class=""><i class="fas fa-edit"></i>
                                    </a>
                                    <form id=""
                                            action="{{ route('department.destroy',encryptor('encrypt',$value->id))}}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="border:none; background:none;">
                                                <span class=""><i class="fa fa-trash text-danger"></i></span>
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
