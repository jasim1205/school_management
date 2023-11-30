@extends('backend.layouts.app')
@section('title','School Name')

@section('content')

<div class="col-12">
    <div class="card  shadow-lg">
        <div class="card-header">
            <h4 class="card-title">School</h4>
            <a href="{{route('school.create')}}" class="btn btn-lg py-3 btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('School_id')}}</th>
                                <th scope="col">{{__('Logo')}}</th>
                                <th scope="col">{{__('School Name')}}</th>
                                <th scope="col">{{__('School Title')}}</th>
                                <th scope="col">{{__('School Address')}}</th>
                                <th scope="col">{{__('EIIN Number')}}</th>
                                <th scope="col">{{__('Email')}}</th>
                                <th scope="col">{{__('Web Address')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                            @forelse($school as $s)
                            <tr role="row" class="odd">
                                <td>{{++$loop->index}}</td>
                                <td>{{$s->school_id_en}}</td>
                                <td class="sorting_1">
                                    
                                        <img class="rounded-circle" width="50px" src="{{asset('public/uploads/school/'.$s->logo)}}" alt="">
                                        
                                    
                                </td>
                                <td>{{$s->school_name_en}}</td>
                                <td>{{$s->school_title_en}}</td>
                                <td>{{$s->school_address_en}}</td>
                                <td>{{$s->eiin_no_en}}</td>
                                <td>{{$s->email}}</td>
                                <td>{{$s->web_address}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('school.edit',encryptor('encrypt',$s->id))}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i>
                                        </a>
                                        


                                        <form id=""
                                            action="{{ route('school.destroy', encryptor('encrypt', $s->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="border:none">
                                                <span class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash text-white"></i></span>
                                                
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
</div>
@endsection
@push('scripts')
    <script src="{{asset('public/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/js/plugins-init/datatables.init.js')}}"></script>
@endpush