@extends('backend.layouts.app')
@section('title','User List')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Forms</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User Add</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<!--start stepper two--> 
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('user.store')}}">
                    @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label for="validationCustom01"><strong>Role</strong>
                                <span class="text-danger">*</span>
                                </label>
                                <select class="default-select wide form-control shadow-lg" id="validationCustom05" name="roleId" id="roleId">
                                    <option value="">Select Role</option>
                                @forelse($role as $r)
                                    <option value="{{$r->id}}" {{ old('roleId')==$r->id?"selected":""}}> {{ $r->name}}</option>
                                @empty
                                    <option value="">No Role found</option>
                                @endforelse
                                </select>
                                @if($errors->has('roleId'))
                                    <span class="text-danger"> {{ $errors->first('roleId') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="userName_en"><strong>Name (English)</strong><i class="text-danger">*</i> </label>
                                <input type="text" id="userName_en" class="form-control shadow-lg" value="{{ old('userName_en')}}" name="userName_en">
                                @if($errors->has('userName_en'))
                                    <span class="text-danger"> {{ $errors->first('userName_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="contactNumber_en"><strong>Contact Number (English)</strong> <i class="text-danger">*</i></label>
                                <input type="text" id="contactNumber_en" class="form-control shadow-lg" value="{{ old('contactNumber_en')}}" name="contactNumber_en">
                                @if($errors->has('contactNumber_en'))
                                    <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="EmailAddress"><strong>Email</strong> <i class="text-danger">*</i></label>
                                <input type="text" id="EmailAddress" class="form-control  shadow-lg" value="{{ old('EmailAddress')}}" name="EmailAddress" placeholder="example@gmail.com">
                                @if($errors->has('EmailAddress'))
                                    <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="status"><strong>Status</strong></label>
                                <select id="status" class="form-control shadow-lg" name="status">
                                    <option value="1" @if(old('status',1)==1) selected @endif>Active</option>
                                    <option value="0" @if(old('status',1)==0) selected @endif>Inactive</option>
                                </select>
                                    @if($errors->has('status'))
                                        <span class="text-danger"> {{ $errors->first('status') }}</span>
                                    @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="fullAccess"><strong>Full Access</strong></label>
                                <select id="fullAccess" class="form-control shadow-lg" name="fullAccess">
                                    <option value="0" @if(old('fullAccess')==0) selected @endif>No</option>
                                    <option value="1" @if(old('fullAccess')==1) selected @endif>Yes</option>
                                </select>
                                    @if($errors->has('fullAccess'))
                                        <span class="text-danger"> {{ $errors->first('fullAccess') }}</span>
                                    @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="userName_bn"><strong>Name (Bangla)</strong></label>
                                <input type="text" id="userName_bn" class="form-control shadow-lg" value="{{ old('userName_bn')}}" name="userName_bn">
                                @if($errors->has('userName_bn'))
                                    <span class="text-danger"> {{ $errors->first('userName_bn') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="contactNumber_bn"><strong>Contact Number (Bangla)</strong></label>
                                <input type="text" id="contactNumber_bn" class="form-control shadow-lg" value="{{ old('contactNumber_bn')}}" name="contactNumber_bn">
                                @if($errors->has('contactNumber_bn'))
                                    <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="password"><strong>Password</strong> <i class="text-danger">*</i></label>
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