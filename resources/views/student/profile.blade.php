@extends('student.layout.student')
@section('title','Student Dashboard')
@section('content')
<div class="" style="padding-top:100px">
    <div class="content container-fluid">

        <!-- <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto profile-image">
                            <a href="#">
                                <img class="rounded" alt="User Image"
                                    src="{{asset('public/uploads/students/' . $student_info->image)}}">
                            </a>
                        </div>
                        <div class="col ms-md-n2 profile-user-info">
                            <h4 class="user-name mb-0">
                                <h5>{{$student_info->first_name_en}}
                                    {{$student_info->last_name_en}}
                                </h5>
                            </h4>
                            <h6 class="text-muted">{{$student_info->class->class_nam_en}}UI/UX Design Team</h6>
                            <div class="user-Location"><i class="fas fa-map-marker-alt"></i>
                                {{$student_info->present_address_en}}
                            </div>
                            <div class="about-text">Lorem ipsum dolor sit amet.</div>
                        </div>
                        <div class="col-auto profile-btn">
                            <a href="{{route('studentdashboard')}}" class="btn btn-primary">
                                Dashboard
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#setting_tab">Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('studentresult')}}">Result</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('studentroutine')}}">Routine</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#attendance_tab">Attendance</a>
                        </li>
                    </ul>
                </div>
                
                <div class="tab-content profile-tab-cont">
                    <div class="tab-pane fade show active" id="per_details_tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card border">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Academic Details</span>
                                        </h5>
                                        <div class="row d-flex">
                                            <p class="col-sm-3">Name</p>
                                            <p class="col-sm-9"> {{$student_info->first_name_en}}
                                                {{$student_info->last_name_en}}
                                            </p>
                                        </div>
                                        <div class="row d-flex">
                                            <p class="col-sm-3">Class</p>
                                            <p class="col-sm-9">{{$student_info->class?->class_name_en}}</p>
                                        </div>
                                        <div class="row d-flex">
                                            <p class="col-sm-3">Section</p>
                                            <p class="col-sm-9">{{$student_info->section?->section_name_en}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3">Date of
                                                Birth</p>
                                            <p class="col-sm-9">{{date('d-M-Y',strtotime($student_info->date_of_birth))}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Personal Details</span>
                                        </h5>
                                        <div class="row d-flex">
                                            <p class="col-sm-3">Name</p>
                                            <p class="col-sm-9">{{$student_info->first_name_en}}
                                                {{$student_info->last_name_en}}
                                            </p>
                                        </div>
                                        <div class="row d-flex">
                                            <p class="col-sm-3">Father Name</p>
                                            <p class="col-sm-9">{{$student_info->father_name}}
                                            </p>
                                        </div>
                                        <div class="row d-flex">
                                            <p class="col-sm-3">Father Name</p>
                                            <p class="col-sm-9">{{$student_info->mother_name}}
                                            </p>
                                        </div>
                                        <div class="row d-flex">
                                            <p class="col-sm-3">Name</p>
                                            <p class="col-sm-9">{{$student_info->first_name_en}}
                                                {{$student_info->last_name_en}}
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3">Email
                                            </p>
                                            <p class="col-sm-9">{{$student_info->email}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 ">Mobile
                                            </p>
                                            <p class="col-sm-9">{{$student_info->contact_no_en}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 ">Present Address</p>
                                            <p class="col-sm-9 mb-0">{{$student_info->present_address_en}}
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 ">Parmanent Address</p>
                                            <p class="col-sm-9 mb-0">{{$student_info->parmanent_address_en}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="password_tab" class="tab-pane fade">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Change Password</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form action="{{route('change_password')}}" method="post">
                                        @csrf
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" name="current_password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="password"class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save
                                                Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="setting_tab" class="tab-pane fade">
                        <h5 class="card-title">Setting Your Personal Information</h5>
                        <form class="form mb-3" method="post" enctype="multipart/form-data" action="{{route('student_save_profile')}}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-lg-6">
                                    <label for="fname_en"><strong>First Name (English)</strong><i class="text-danger">*</i> </label>
                                    
                                    <input type="text" id="fname" class="form-control" value="{{$student_info->first_name_en}}" name="fname_en">
                                    
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="lname_en"><strong>Last Name (English)</strong><i class="text-danger">*</i> </label>
                                    
                                    <input type="text" id="lname_en" class="form-control" value="{{$student_info->last_name_en}}" name="lname_en">
                                    
                                </div>
                            
                                <div class="col-12 col-lg-6">
                                    <label for="father_name"><strong>Father Name</strong></label>
                                    <input type="text" id="father_name" class="form-control" value="{{$student_info->father_name}}" name="father_name">
                                    
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="father_contact"><strong>Father Contact</strong></label>
                                    <input type="text" id="father_contact" class="form-control" value="{{$student_info->father_contact}}" name="father_contact">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="mother_name"><strong>Mother Name</strong></label>
                                    <input type="text" id="mother_name" class="form-control" value="{{$student_info->mother_name}}" name="mother_name">
                                    
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="mother_contact"><strong>Mother Contact</strong></label>
                                    <input type="text" id="mother_contact" class="form-control" value="{{$student_info->mother_contact}}" name="mother_contact">
                                </div>
                                <div class="col-12 col-lg-6">
                                <label for="username"><strong>User Name</strong></label>
                                    <input type="text" id="username" class="form-control" value="{{$student_info->username}}" name="username">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="date_of_birth"><strong>Date of Birth </strong><i class="text-danger">*</i></label>
                                    <input type="date" id="date_of_birth" class="form-control" value="{{$student_info->date_of_birth}}" name="date_of_birth">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="EmailAddress"><strong>Email</strong> <i class="text-danger">*</i></label>
                                    <input type="text" id="EmailAddress" class="form-control" value="{{$student_info->email}}" name="EmailAddress" placeholder="example@gmail.com">
                                    
                                </div>
                                <div class="col-12 col-lg-6">
                                <label for="contactNumber_en"><strong>Contact Number (English)</strong> <i class="text-danger">*</i></label>
                                    <input type="text" id="contactNumber_en" class="form-control" value="{{$student_info->contact_no_en}}" name="contactNumber_en">
                                </div>
                
                                <div class="col-12 col-lg-6">
                                <label for="present_address"><strong>Present Address</strong></label>
                                    <textarea name="present_address_en" id="present_address_en" cols="30" rows="5" class="form-control">
                                        {{$student_info->present_address_en}}
                                    </textarea>
                                        
                                </div>
                                <div class="col-12 col-lg-6">
                                <label for="parmanent_address"><strong>Parmanent Address</strong></label>
                                    <textarea name="parmanent_address_en" id="parmanent_address_en" cols="30" rows="5" class="form-control">
                                            {{$student_info->parmanent_address_en}}
                                    </textarea>
                                </div>
                                
                                <div class="col-12 col-lg-6">
                                    <label for="image"><strong>Image</strong></label>
                                    <input type="file" id="image" class="form-control" placeholder="Image" name="image">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <button class="btn btn-success px-4 mt-4" type="submit">Submit</button>
                                </div>
                            </div><!---end row-->
                        </form>
                    </div>
                    <div id="attendance_tab" class="tab-pane fade">
                        <div class="card col-sm-8 content-center">
                            <div class="card">
                                <div class="card border p-3">
                                    <h5 class="card-title text-center">Daily Attendance</h5>
                                    <table class="table table-bordered"         style="border:5px solid black">
                                        <tr>
                                            <th>Date</th>
                                            <th>status</th>
                                        </tr>
                                        @foreach($attendance as $a)
                                        <tr>
                                            <td>{{date('d-M-Y', strtotime($a->att_date))}}
                                            </td>
                                            <td  style="color: @if($a->status==1) green @else red @endif;">{{($a->status==1)?'Present':'Absent'}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div> 
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection