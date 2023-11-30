@extends('backend.layouts.app')
@section('title','Student List')

@section('content')

 <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Profile Datatable</h4>
                <a href="{{route('student.create')}}" class="btn btn-lg py-3 btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Student ID')}}</th>
                                <th scope="col">{{__('Roll')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{__('Father Name')}}</th>
                                <th scope="col">{{__('Mother Name')}}</th> 
                                <th scope="col">{{__('Gender')}}</th> 
                                <th scope="col">{{__('Date of Birth')}}</th> 
                                <th scope="col">{{__('Place of Birth')}}</th>
                                <th scope="col">{{__('Class')}}</th>
                                <th scope="col">{{__('Section')}}</th>
                                <th scope="col">{{__('User Name')}}</th>
                                <th scope="col">{{__('Email')}}</th>
                                <th scope="col">{{__('Contact')}}</th>
                                <th scope="col">{{__('Present Address')}}</th>
                                <th scope="col">{{__('Parmanent Address')}}</th>
                                <th scope="col">{{__('Status')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($student as $t)
                                <tr role="row" class="odd">
                                    <td>{{++$loop->index}}</td>
                                    <td>{{$t->student_id}}</td>
                                    <td>{{$t->roll}}</td>
                                    <td>
                                        <img width="50px" class="rounded-circle" src="{{asset('public/uploads/students/'.$t->image)}}" alt="">
                                    </td>
                                    <td>{{$t->first_name_en}} {{$t->last_name_en}}</td>
                                    <td>{{$t->father_name}}</td>
                                    <td>{{$t->mother_name}}</td>
                                    <td>{{$t->gender}}</td>
                                    <td>{{$t->date_of_birth}}</td>
                                    <td>{{$t->place_of_birth}}</td>
                                    <td>{{$t->class?->class_name_en}}</td>
                                    <td>{{$t->section?->section_name_en}}
                                    </td>
                                    <td>{{$t->username}}</td>
                                    <td>{{$t->email}}</td>
                                    <td>{{$t->contact_no_en}}</td>
                                    <td>{{$t->present_address_en}}</td>
                                    <td>{{$t->parmanent_address_en}}</td>
                                    <td>@if($t->status==1){{__('Active')}} @else{{__('Inactive')}} @endif</td>
                                    <td>
                                    <div class="d-flex">
                                        <a href="{{route('student.edit',encryptor('encrypt',$t->id))}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>

                                         <form id=""
                                            action="{{ route('student.destroy', encryptor('encrypt', $t->id)) }}"
                                            method="post">                           @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border:none">
                                                <span class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash text-white"></i></span>
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
                     <div class="float-end">{{$student->links()}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="{{asset('public/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/js/plugins-init/datatables.init.js')}}"></script>
@endpush



    