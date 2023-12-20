@extends('backend.layouts.app')
@section('title','User List')

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">User List</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a href="{{route('user.create')}}" class="btn btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
        </div>
    </div>
    <!--end breadcrumb-->
    
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>{{__('#SL')}}</th>
                            <th>{{__('Image')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Contact')}}</th>
                            <th>{{__('Role')}}</th>
                            <th>{{__('Status')}}</th>
                            <th>{{__('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse($data as $d)
                        <tr role="row" class="odd">
                            <td>{{++$loop->index}}</td>
                            <td class="sorting_1">
                                
                                    <img class="rounded-circle" width="50px" src="{{asset('public/uploads/teachers/'.$d->teacher?->image)}}" alt="">
                                    
                                
                            </td>
                            <td>{{$d->name_en}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->contact_no_en}}</td>
                            <td>{{$d->role?->name}}</td>
                            <td style="color: @if($d->status==1) green @else red @endif; font-weight:bold;"><i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                            @if($d->status==1){{__('Active')}} @else{{__('Inactive')}} @endif</td>


                            
                            
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('user.edit',encryptor('encrypt',$d->id))}}" class=""><i class="fas fa-edit"></i>
                                    </a>
                                    


                                    <form id=""
                                        action="{{ route('user.destroy', encryptor('encrypt', $d->id)) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="border:none">
                                            <span class=""><i class="fa fa-trash text-danger"></i></span>
                                            
                                        </button>
                                    </form>
                                </div>                                            
                            </td>												
                        </tr>
                        @empty
                            <tr>
                                <th colspan="8" class="text-center">No Pruduct Found</th>
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