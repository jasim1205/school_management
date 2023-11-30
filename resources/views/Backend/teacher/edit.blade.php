@extends('backend.layouts.app')
@section('title','Edit Teacher')

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
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form" method="post" enctype="multipart/form-data" action="{{route('teacher.update',encryptor('encrypt',$teacher->id))}}">
                                @csrf
                                @method('Patch')
                    <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$teacher->id)}}">
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                    <h5 class="mb-1">Your Personal Information</h5>
                    <p class="mb-4">Enter your personal information to get closer to copanies</p>

                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label for="teachId">Teacher Id  <i class="text-danger">*</i></label>
                                <input type="text" name="teachId" id="teachId" value="{{ old('teachId',$teacher->teacher_id)}}"  class="form-control" >
                                @if($errors->has('userName_en'))
                                    <span class="text-danger"> {{ $errors->first('teachId') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="" for="">Role
                                <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" id="" name="roleId" id="roleId">
                                        <option value="">Select Role</option>
                                    @forelse($role as $r)
                                        <option value="{{$r->id}}" {{ old('roleId',$teacher->role_id)==$r->id ? "selected":""}}> {{ $r->name}}</option>
                                    @empty
                                        <option value="">No Role found</option>
                                    @endforelse
                                </select>
                                    @if($errors->has('roleId'))
                                        <span class="text-danger"> {{$errors->first('roleId') }}
                                        </span>
                                    @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="1" @if(old('status',$teacher->status)==1) selected @endif>Active</option>
                                    <option value="0" @if(old('status',$teacher->status)==0) selected @endif>Inactive</option>
                                </select>
                                @if($errors->has('status'))
                                    <span class="text-danger"> {{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="fName_en">First Name (English)<i class="text-danger">*</i> </label>
                                            
                                <input type="text" id="fName_en" class="form-control" value="{{ old('fName_en',$teacher->first_name_en)}}" name="fName_en">
                                @if($errors->has('fname_en'))
                                    <span class="text-danger"> {{ $errors->first('fName_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="fName_bn">First Name (Bangla)<i class="text-danger">*</i> </label>
                                            
                                <input type="text" id="fName_bn" class="form-control" value="{{ old('fName_bn',$teacher->first_name_bn)}}" name="fName_bn">
                                @if($errors->has('fName_bn'))
                                    <span class="text-danger"> {{ $errors->first('fName_bn') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="lName_en">Last Name (English)<i class="text-danger">*</i> </label>
                                            
                                <input type="text" id="lName_en" class="form-control" value="{{ old('lName_en',$teacher->last_name_en)}}" name="lName_en">
                                @if($errors->has('lName_en'))
                                    <span class="text-danger"> {{ $errors->first('lName_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="lName_bn">Last Name (Bangla)<i class="text-danger">*</i> </label>
                                            
                                <input type="text" id="lName_bn" class="form-control" value="{{ old('lName_bn',$teacher->last_name_bn)}}" name="lName_bn">
                                @if($errors->has('lName_bn'))
                                    <span class="text-danger"> {{ $errors->first('lName_bn') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="father_name">Father Name</label>
                                <input type="text" id="father_name" class="form-control" value="{{ old('father_name',$teacher->father_name)}}" name="father_name">
                                @if($errors->has('father_name'))
                                    <span class="text-danger"> {{ $errors->first('father_name') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="mother_name">Mother Name</label>
                                <input type="text" id="mother_name" class="form-control" value="{{ old('mother_name',$teacher->mother_name)}}" name="mother_name">
                                @if($errors->has('mother_name'))
                                    <span class="text-danger"> {{ $errors->first('mother_name') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                
                                <label for="gender">Gender</label>
                                <select id="status" class="form-control" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male" @if(old('gender',$teacher->gender)=='male') selected @endif>Male</option>
                                    <option value="female" @if(old('gender',$teacher->gender)=='female') selected @endif>Female</option>
                                    <option value="other" @if(old('gender',$teacher->gender)=='other') selected @endif>Other</option>
                                </select>
                                @if($errors->has('gender'))
                                    <span class="text-danger"> {{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <<label for="date_of_birth">Date of Birth <i class="text-danger">*</i></label>
                                <input type="date" id="date_of_birth" class="form-control" value="{{ old('date_of_birth',$teacher->date_of_birth)}}" name="date_of_birth">
                                @if($errors->has('date_of_birth'))
                                    <span class="text-danger"> {{ $errors->first('date_of_birth') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="place_of_birth">Place of Birth <i class="text-danger">*</i></label>
                                <input type="text" id="place_of_birth" class="form-control" value="{{ old('place_of_birth',$teacher->place_of_birth)}}" name="place_of_birth">
                                @if($errors->has('place_of_birth'))
                                    <span class="text-danger"> {{ $errors->first('place_of_birth') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="subject">Subject<i class="text-danger">*</i></label>
                                    <input type="text" id="subject" class="form-control" value="{{ old('subject',$teacher->subject)}}" name="subject">
                                    @if($errors->has('subject'))
                                        <span class="text-danger"> {{ $errors->first('subject') }}</span>
                                    @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="department">Department</label>
                                <select id="department" class="form-control" name="department_id">
                                    <option value="">Select department</option>
                                    @forelse($department as $d)
                                    <option value="{{$d->id}}" {{old('department_id',$teacher->department_id)==$d->id?"selected":""}} >{{$d->department_name}}</option>
                                @empty
                                <option value="">No Role found</option>
                                @endforelse
                                </select>
                                @if($errors->has('department'))
                                    <span class="text-danger"> {{ $errors->first('department') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="designation">Designation</label>
                                <select id="designation" class="form-control" name="designation_id">
                                    <option value="">Select designation</option>
                                    @forelse($designation as $value)
                                    <option value="{{$value->id}}" {{old('designation_id',$teacher->designation_id)==$value->id?"selected":""}} >{{$value->designation_name}}</option>
                                @empty
                                <option value="">No Role found</option>
                                @endforelse
                                </select>
                                @if($errors->has('designation'))
                                    <span class="text-danger"> {{ $errors->first('designation') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                <input type="text" id="EmailAddress" class="form-control" value="{{ old('EmailAddress',$teacher->email)}}" name="EmailAddress">
                                @if($errors->has('EmailAddress'))
                                    <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="salary">Basic Salary <i class="text-danger">*</i></label>
                                <input type="text" id="salary" class="form-control" value="{{ old('salary',$teacher->salary)}}" name="salary">
                                @if($errors->has('salary'))
                                    <span class="text-danger"> {{ $errors->first('salary') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="contactNumber_en">Contact Number (English) <i class="text-danger">*</i></label>
                                <input type="text" id="contactNumber_en" class="form-control" value="{{ old('contactNumber_en',$teacher->contact_no_en)}}" name="contactNumber_en">
                                @if($errors->has('contactNumber_en'))
                                    <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="contactNumber_bn">Contact Number (Bangla)</label>
                                <input type="text" id="contactNumber_bn" class="form-control" value="{{ old('contactNumber_bn',$teacher->contact_no_bn)}}" name="contactNumber_bn">
                                @if($errors->has('contactNumber_bn'))
                                    <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="present_address">Present Address</label>
                                <textarea name="present_address" id="present_address" cols="30" rows="10" class="form-control" value="{{ old('present_address',$teacher->present_address)}}"></textarea>
                                @if($errors->has('present_address'))
                                    <span class="text-danger"> {{ $errors->first('present_address') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="parmanent_address">Parmanent Address</label>
                                <textarea name="parmanent_address" id="parmanent_address" cols="30" rows="10" class="form-control"  value="{{ old('parmanent_address',$teacher->parmanent_address)}}"></textarea>
                                @if($errors->has('parmanent_address'))
                                    <span class="text-danger"> {{ $errors->first('parmanent_address') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="password">Password <i class="text-danger">*</i></label>
                                <input type="password" id="password" class="form-control" name="password"placeholder="Choose a safe one.." >
                                    @if($errors->has('password'))
                                        <span class="text-danger"> {{ $errors->first('password') }}</span>
                                    @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" class="form-control" placeholder="Image" name="image">
                            </div>
                            <div class="col-12 col-lg-6">
                                <button class="btn btn-success px-4" type="submit">Submit</button>
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
