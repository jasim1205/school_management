@extends('backend.layouts.app')
@section('title','Edit Student')

@section('content')
<div class="col-lg-12">
    <div class="card shadow-lg">
        <div class="card-header">
            <h4 class="card-title">Edit Student</h4>
        </div>
        <div class="card-body">
            <div class="form-validation">
                <form class="form" method="post" enctype="multipart/form-data" action="{{route('student.update',encryptor('encrypt',$student->id))}}">
                            @csrf
                            @method('Patch')
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="stu_id">Student Id  <i class="text-danger">*</i></label>
                                        <input type="text" name="stu_id" id="stu_id" value="{{ old('stu_id',$student->student_id)}}"  class="form-control" >
                                        @if($errors->has('stu_id'))
                                            <span class="text-danger"> {{ $errors->first('stu_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="roll">Roll<i class="text-danger">*</i></label>
                                        <input type="text" name="roll" id="roll" value="{{ old('roll',$student->roll)}}"  class="form-control shadow-lg" >
                                        @if($errors->has('roll'))
                                            <span class="text-danger"> {{ $errors->first('roll') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="1" @if(old('status',$student->status)==1) selected @endif>Active</option>
                                            <option value="0" @if(old('status',$student->status)==0) selected @endif>Inactive</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <span class="text-danger"> {{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="fname_en">First Name (English)<i class="text-danger">*</i> </label>
                                        
                                        <input type="text" id="fname" class="form-control" value="{{ old('fname_en',$student->first_name_en)}}" name="fname_en">
                                        @if($errors->has('fname_en'))
                                            <span class="text-danger"> {{ $errors->first('fname_en') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="fname_bn">First Name (Bangla)<i class="text-danger">*</i> </label>
                                        
                                        <input type="text" id="fname_bn" class="form-control" value="{{ old('fname_bn',$student->first_name_bn)}}" name="fname_bn">
                                        @if($errors->has('fname_bn'))
                                            <span class="text-danger"> {{ $errors->first('fname_bn') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="lname_en">Last Name (English)<i class="text-danger">*</i> </label>
                                        
                                        <input type="text" id="lname_en" class="form-control" value="{{ old('lname_en',$student->last_name_en)}}" name="lname_en">
                                        @if($errors->has('lname_en'))
                                            <span class="text-danger"> {{ $errors->first('lname_en') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="lname_bn">Last Name (Bangla)<i class="text-danger">*</i> </label>
                                        
                                        <input type="text" id="lname_bn" class="form-control" value="{{ old('lname_bn',$student->last_name_bn)}}" name="lname_bn">
                                        @if($errors->has('lname_bn'))
                                            <span class="text-danger"> {{ $errors->first('lname_bn') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="father_name">Father Name</label>
                                        <input type="text" id="father_name" class="form-control" value="{{ old('father_name',$student->father_name)}}" name="father_name">
                                        @if($errors->has('father_name'))
                                            <span class="text-danger"> {{ $errors->first('father_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="father_contact">Father Contact</label>
                                        <input type="text" id="father_contact" class="form-control" value="{{ old('father_contact',$student->father_contact)}}" name="father_contact">
                                        @if($errors->has('father_contact'))
                                            <span class="text-danger"> {{ $errors->first('father_contact') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="mother_name">Mother Name</label>
                                        <input type="text" id="mother_name" class="form-control" value="{{ old('mother_name',$student->mother_name)}}" name="mother_name">
                                        @if($errors->has('mother_name'))
                                            <span class="text-danger"> {{ $errors->first('mother_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="mother_contact">Mother Contact</label>
                                        <input type="text" id="mother_contact" class="form-control" value="{{ old('mother_contact',$student->mother_contact)}}" name="mother_contact">
                                        @if($errors->has('mother_contact'))
                                            <span class="text-danger"> {{ $errors->first('mother_contact') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="gender">Gender</label>
                                        <select id="status" class="form-control" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="male" @if(old('gender',$student->gender)=='male') selected @endif>Male</option>
                                            <option value="female" @if(old('gender',$student->gender)=='female') selected @endif>Female</option>
                                            <option value="other" @if(old('gender',$student->gender)=='other') selected @endif>Other</option>
                                        </select>
                                        @if($errors->has('gender'))
                                            <span class="text-danger"> {{ $errors->first('gender') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="date_of_birth">Date of Birth <i class="text-danger">*</i></label>
                                        <input type="date" id="date_of_birth" class="form-control" value="{{ old('date_of_birth',$student->date_of_birth)}}" name="date_of_birth">
                                        @if($errors->has('date_of_birth'))
                                            <span class="text-danger"> {{ $errors->first('date_of_birth') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="place_of_birth">Place of Birth <i class="text-danger">*</i></label>
                                        <input type="text" id="place_of_birth" class="form-control" value="{{ old('place_of_birth',$student->date_of_birth)}}" name="place_of_birth">
                                        @if($errors->has('place_of_birth'))
                                            <span class="text-danger"> {{ $errors->first('place_of_birth') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Class Name</label>
                                    <select  id="class_id" name="class_id" required class="form-control">
                                        <option value="">Select Class</option>
                                        @forelse($classes as $class)
                                        <option {{old('class_id',$student->class_id)==$class->id?'selected':''}} value="{{$class->id}}" >{{$class->class_name_en}}</option>
                                        @empty
                                        <option value="">No Class found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Section Name</label>
                                    <select  id="section_id" name="section_id" required class="form-control">
                                        <option value="">Select Section</option>
                                        @forelse($section as $s)
                                        <option {{old('section_id',$student->section_id)==$s->id?'selected':''}} value="{{$s->id}}" >{{$s->section_name_en}}</option>
                                        @empty
                                        <option value="">No Section found</option>
                                        @endforelse
                                    </select>
                                </div>

                            </div>




                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                        <input type="text" id="EmailAddress" class="form-control" value="{{ old('EmailAddress',$student->email)}}" name="EmailAddress" placeholder="example@gmail.com">
                                        @if($errors->has('EmailAddress'))
                                            <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="contactNumber_en">Contact Number (English) <i class="text-danger">*</i></label>
                                        <input type="text" id="contactNumber_en" class="form-control" value="{{ old('contactNumber_en',$student->contact_no_en)}}" name="contactNumber_en">
                                        @if($errors->has('contactNumber_en'))
                                            <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="contactNumber_bn">Contact Number (Bangla)</label>
                                        <input type="text" id="contactNumber_bn" class="form-control" value="{{ old('contactNumber_bn',$student->contact_no_bn)}}" name="contactNumber_bn">
                                        @if($errors->has('contactNumber_bn'))
                                            <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="username">User Name</label>
                                        <input type="text" id="username" class="form-control" value="{{ old('username',$student->username)}}" name="username">
                                        @if($errors->has('username'))
                                            <span class="text-danger"> {{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="present_address">Present Address</label>
                                        <textarea name="present_address_en" id="present_address_en" cols="30" rows="10" value="{{ old('username',$student->present_address_en)}}" class="form-control"></textarea>
                                        @if($errors->has('present_address_en'))
                                            <span class="text-danger"> {{ $errors->first('present_address_en') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="parmanent_address">Parmanent Address</label>
                                        <textarea name="parmanent_address_en" id="parmanent_address_en" cols="30" rows="10"  value="{{ old('username',$student->parmanent_address_en)}}" class="form-control"></textarea>
                                        @if($errors->has('parmanent_address_en'))
                                            <span class="text-danger"> {{ $errors->first('parmanent_address_en') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password <i class="text-danger">*</i></label>
                                    <input type="password" id="password" class="form-control" name="password"placeholder="Choose a safe one.." >
                                            @if($errors->has('password'))
                                                <span class="text-danger"> {{ $errors->first('password') }}</span>
                                            @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-3">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control" placeholder="Image" name="image">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary me-1 mb-1 px-5">Save</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

@endsection