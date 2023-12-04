@extends('backend.layouts.app')
@section('title','assignsubject')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Forms</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Wizard</li>
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
<!--start stepper two--> 
<h6 class="text-uppercase">Linear Stepper</h6>
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form" method="post"action="{{route('assignsubject.store')}}">
            @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label><strong>Class Name</strong></label>
                                <select  id="class_id" name="class_id" required class="form-control" onchange="change_location(this.value)">
                                    <option value="">Select Class</option>
                                    @forelse($classes as $class)
                                    <option {{ $class->id == old('class_id', $class_id) ? 'selected' : '' }} value="{{$class->id}}" >{{$class->class_name_en}}</option>
                                    @empty
                                    <option value="">No Class found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <button class="btn btn-success px-4 mt-4" type="submit">Submit</button>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label>Subject Name</label>
                                @foreach($subject as $s)
                                <div>
                                    <label for="">
                                        <input @if(in_array($s->id,$classSubject)) checked @endif type="checkbox" value="{{$s->id}}" name="subject_id[]" id="" class="mx-2">{{$s->subject_name_en}}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            
                        </div><!---end row-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end stepper two--> 
@endsection

@push('scripts')
<script>
   function change_location(class_id){
        location.href="{{route('assignsubject.index')}}?class_id="+class_id
    }
</script> 
@endpush