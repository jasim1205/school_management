@extends('student.layout.student')
@section('title','Student Dashboard')
@section('content')
<div class="" style="padding-top:100px">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto profile-image">
                            <a href="#">
                                <img class="rounded" alt="User Image"
                                    src=" {{asset('public/uploads/students/' . $student_info->image)}}">
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
                            <a href="" class="btn btn-primary">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link"  href="{{route('student_profile')}}">Profile</a>
                        </li>
                    </ul>
                </div>
                <div class="container-fluid mt-2">
                    <h1 class="text-center">Notice Board</h1>
                    <div class="card border p-2">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, animi aliquam beatae neque nesciunt facere. Accusamus quas dignissimos, enim eos facere, esse praesentium officiis ad expedita, dolor repudiandae voluptatem optio.</p>
                    </div>
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
                                            <p class="col-sm-9">{{$student_info->date_of_birth}}</p>
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


                    <!-- <div id="password_tab" class="tab-pane fade">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Change Password</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form>
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save
                                                Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection