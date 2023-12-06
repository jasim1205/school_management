@extends('backend.layouts.app')
@section('title','Student List')

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
    <a href="{{route('student.create')}}" class="btn btn-lg py-3 btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">{{__('Student ID')}}</th>
                            <th scope="col">{{__('Roll')}}</th>
                            <th scope="col">{{__('Name')}}</th>
                            <th scope="col">{{__('Gender')}}</th> 
                            <th scope="col">{{__('Date of Birth')}}</th> 
                            <th scope="col">{{__('Class')}}</th>
                            <th scope="col">{{__('Contact')}}</th>
                            <th scope="col">{{__('Status')}}</th>
                            <th class="white-space-nowrap">{{__('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($student as $t)
                        <tr role="row" class="odd">
                            <td>{{$t->student_id}}</td>
                            <td>{{$t->roll}}</td>
                            <td>
                            <img width="50px" height="50px" class="rounded-circle" src="{{asset('public/uploads/students/'.$t->image)}}" alt="">    
                            {{$t->first_name_en}} {{$t->last_name_en}}</td>
                            <td>{{$t->gender}}</td>
                            <td>{{$t->date_of_birth}}</td>
                            <td>{{$t->class?->class_name_en}}</td>
                            <td>{{$t->contact_no_en}}</td>
                            <td>@if($t->status==1){{__('Active')}} @else{{__('Inactive')}} @endif</td>
                            <td>
                            <div class="d-flex">
                                <a href="{{route('student.edit',encryptor('encrypt',$t->id))}}" class=""><i class="fas fa-edit"></i></a>
                                <a href="{{route('student.show',encryptor('encrypt',$t->id))}}" class=""><i class="fa fa-eye"></i></a>

                                    <form id=""
                                    action="{{ route('student.destroy', encryptor('encrypt', $t->id)) }}"
                                    method="post">                           @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border:none;background:none;">
                                        <span class=""><i class="fa fa-trash text-danger"></i></span>
                                    </button>
                                </form>
                                
                            </div>
                                            
                            </td>                                               
                        </tr>
                        @empty
                        <tr>
                            <th colspan="19" class="text-center">No Pruduct Found</th>
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



    