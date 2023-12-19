@extends('backend.layouts.app')
@section('title','Teacher List')

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
             <a href="{{route('teacher.create')}}" class="btn btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
        </div>
    </div>
    <!--end breadcrumb-->
    
   
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">{{__('TeacherId')}}</th>
                            <th scope="col">{{__('Name')}}</th>
                            <th scope="col">{{__('Role') }}</th>
                            <th scope="col">{{__('Gender')}}</th> 
                            <th scope="col">{{__('Date of Birth')}}</th> 
                            <th scope="col">{{__('Contact')}}</th>
                            <th scope="col">{{__('Status')}}</th>
                            <th class="white-space-nowrap">{{__('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($teacher as $t)
                                <tr role="row" class="odd">
                                   
                                    <td>{{$t->teacher_id}}</td>
                                    
                                    <td>
                                        <img width="50px" class="rounded-circle" src="{{asset('public/uploads/teachers/'.$t->image)}}" alt="">
                                        {{$t->first_name_en}} {{$t->last_name_en}}</td>
                                    <td>{{$t->role?->name }}</td>
                                    <td>{{$t->gender}}</td>
                                    <td>{{$t->date_of_birth}}</td>
                                    <td>{{$t->contact_no_en}}</td>
                                    <td style="color: @if($t->status==1) green @else red @endif;">@if($t->status==1){{__('Active')}} @else{{__('Inactive')}} @endif</td>
                                    <td>
                                    <div class="d-flex">
                                        <a href="{{route('teacher.edit',encryptor('encrypt',$t->id))}}" class="me-2"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('teacher.show',encryptor('encrypt',$t->id))}}" class=""><i class="fa fa-eye"></i></a>

                                        <form action="{{ route('teacher.destroy', encrypt($t->id)) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border:none">
                                                <span class=""><i class="fa fa-trash text-danger"></i></span>
                                            </button>
                                        </form>
                                        
                                    </div>
                                                    
                                    </td>
                                        
                                                                            
                                                                                    
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="16" class="text-center">No Pruduct Found</th>
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
