@extends('backend.layouts.app')
@section('title','Add Student')

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
                <form class="form" method="post" enctype="multipart/form-data" action="{{route('student.store')}}">
                            @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                    <h5 class="mb-1">Your Personal Information</h5>
                    <p class="mb-4">Enter your personal information to get closer to copanies</p>

                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label for="stu_id">Student Id  <i class="text-danger">*</i></label>
                                <input type="text" name="stu_id" id="stu_id" value="{{ old('stu_id')}}"  class="form-control shadow-lg" >
                                @if($errors->has('stu_id'))
                                    <span class="text-danger"> {{ $errors->first('stu_id') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="roll">Roll<i class="text-danger">*</i></label>
                                <input type="text" name="roll" id="roll" value="{{ old('roll')}}"  class="form-control shadow-lg" >
                                @if($errors->has('roll'))
                                    <span class="text-danger"> {{ $errors->first('roll') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="status">Status</label>
                                <select id="status" class="form-control shadow-lg" name="status">
                                    <option value="1" @if(old('status')==1) selected @endif>Active</option>
                                    <option value="0" @if(old('status')==0) selected @endif>Inactive</option>
                                </select>
                                @if($errors->has('status'))
                                    <span class="text-danger"> {{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="fname_en">First Name (English)<i class="text-danger">*</i> </label>
                                
                                <input type="text" id="fname" class="form-control shadow-lg" value="{{ old('fname_en')}}" name="fname_en">
                                @if($errors->has('fname_en'))
                                    <span class="text-danger"> {{ $errors->first('fname_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="fname_bn">First Name (Bangla)<i class="text-danger">*</i> </label>
                                
                                <input type="text" id="fname_bn" class="form-control shadow-lg" value="{{ old('fname_bn')}}" name="fname_bn">
                                @if($errors->has('fname_bn'))
                                    <span class="text-danger"> {{ $errors->first('fname_bn') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="lname_en">Last Name (English)<i class="text-danger">*</i> </label>
                                
                                <input type="text" id="lname_en" class="form-control shadow-lg" value="{{ old('lname_en')}}" name="lname_en">
                                @if($errors->has('lname_en'))
                                    <span class="text-danger"> {{ $errors->first('lname_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                 <label for="lname_bn">Last Name (Bangla)<i class="text-danger">*</i> </label>
                                
                                <input type="text" id="lname_bn" class="form-control shadow-lg" value="{{ old('lname_bn')}}" name="lname_bn">
                                @if($errors->has('lname_bn'))
                                    <span class="text-danger"> {{ $errors->first('lname_bn') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                 <label for="father_name">Father Name</label>
                                <input type="text" id="father_name" class="form-control shadow-lg" value="{{ old('father_name')}}" name="father_name">
                                @if($errors->has('father_name'))
                                    <span class="text-danger"> {{ $errors->first('father_name') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="father_contact">Father Contact</label>
                                <input type="text" id="father_contact" class="form-control shadow-lg" value="{{ old('father_contact')}}" name="father_contact">
                                @if($errors->has('father_contact'))
                                    <span class="text-danger"> {{ $errors->first('father_contact') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                
                                <label for="mother_name">Mother Name</label>
                                <input type="text" id="mother_name" class="form-control shadow-lg" value="{{ old('mother_name')}}" name="mother_name">
                                @if($errors->has('mother_name'))
                                    <span class="text-danger"> {{ $errors->first('mother_name') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="mother_contact">Mother Contact</label>
                                <input type="text" id="mother_contact" class="form-control shadow-lg" value="{{ old('mother_contact')}}" name="mother_contact">
                                @if($errors->has('mother_contact'))
                                    <span class="text-danger"> {{ $errors->first('mother_contact') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="gender">Gender</label>
                                <select id="status" class="form-control shadow-lg" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male" @if(old('gender')=='male') selected @endif>Male</option>
                                    <option value="female" @if(old('gender')=='female') selected @endif>Female</option>
                                    <option value="other" @if(old('gender')=='other') selected @endif>Other</option>
                                </select>
                                @if($errors->has('gender'))
                                    <span class="text-danger"> {{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="date_of_birth">Date of Birth <i class="text-danger">*</i></label>
                                <input type="date" id="date_of_birth" class="form-control shadow-lg" value="{{ old('date_of_birth')}}" name="date_of_birth">
                                @if($errors->has('date_of_birth'))
                                    <span class="text-danger"> {{ $errors->first('date_of_birth') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="place_of_birth">Place of Birth <i class="text-danger">*</i></label>
                                <input type="text" id="place_of_birth" class="form-control shadow-lg" value="{{ old('place_of_birth')}}" name="place_of_birth">
                                @if($errors->has('place_of_birth'))
                                    <span class="text-danger"> {{ $errors->first('place_of_birth') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label>Class Name</label>
                                <select  id="class_id" name="class_id" required class="form-control shadow-lg">
                                    <option value="">Select Class</option>
                                    @forelse($classes as $class)
                                    <option {{old('class_id')==$class->id}} value="{{$class->id}}" >{{$class->class_name_en}}</option>
                                    @empty
                                    <option value="">No Class found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Section Name</label>
                                <select  id="section_id" name="section_id" required class="form-control shadow-lg">
                                    <option value="">Select Section</option>
                                    @forelse($section as $s)
                                    <option {{old('section_id')==$s->id}} value="{{$s->id}}" >{{$s->section_name_en}}</option>
                                    @empty
                                    <option value="">No Section found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                <input type="text" id="EmailAddress" class="form-control shadow-lg" value="{{ old('EmailAddress')}}" name="EmailAddress" placeholder="example@gmail.com">
                                @if($errors->has('EmailAddress'))
                                    <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="contactNumber_en">Contact Number (English) <i class="text-danger">*</i></label>
                                <input type="text" id="contactNumber_en" class="form-control shadow-lg" value="{{ old('contactNumber_en')}}" name="contactNumber_en">
                                @if($errors->has('contactNumber_en'))
                                    <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="contactNumber_bn">Contact Number (Bangla)</label>
                                <input type="text" id="contactNumber_bn" class="form-control shadow-lg" value="{{ old('contactNumber_bn')}}" name="contactNumber_bn">
                                @if($errors->has('contactNumber_bn'))
                                    <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="username">User Name</label>
                                <input type="text" id="username" class="form-control shadow-lg" value="{{ old('username')}}" name="username">
                                @if($errors->has('username'))
                                    <span class="text-danger"> {{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="present_address">Present Address</label>
                                <textarea name="present_address_en" id="present_address_en" cols="30" rows="10" class="form-control shadow-lg"></textarea>
                                @if($errors->has('present_address_en'))
                                    <span class="text-danger"> {{ $errors->first('present_address_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="parmanent_address">Parmanent Address</label>
                                <textarea name="parmanent_address_en" id="parmanent_address_en" cols="30" rows="10" class="form-control shadow-lg"></textarea>
                                @if($errors->has('parmanent_address_en'))
                                    <span class="text-danger"> {{ $errors->first('parmanent_address_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for="password">Password <i class="text-danger">*</i></label>
                                <input type="password" id="password" class="form-control shadow-lg" name="password"placeholder="Choose a safe one.." >
                                @if($errors->has('password'))
                                    <span class="text-danger"> {{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="image"><strong>Image</strong></label>
                                <input type="file" id="image" class="form-control shadow-lg" placeholder="Image" name="image">
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