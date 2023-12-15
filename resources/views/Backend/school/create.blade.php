@extends('backend.layouts.app')
@section('title','Add School Name')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Forms</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">School Data Add</li>
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
               <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('school.store')}}">
                        @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label class="" for=""><strong>School Id</strong>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id=" " class="form-control shadow-lg" value="{{ old('school_id_en ')}}" name="school_id_en" Required>
                                
                                @if($errors->has('school_id_en'))
                                    <span class="text-danger"> {{ $errors->first('school_id_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                               <label for=""><strong>School Title (English) </strong><i class="text-danger">*</i></label>
                                <input type="text" id="" class="form-control shadow-lg" value="{{ old('school_title_en')}}" name="school_title_en">
                                @if($errors->has('school_title_en'))
                                    <span class="text-danger"> {{ $errors->first('school_title_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for=""><strong>School Address(English) </strong><i class="text-danger">*</i></label>
                                <input type="text" id="" class="form-control shadow-lg" value="{{ old('school_address_en')}}" name="school_address_en" placeholder="" Required>
                                @if($errors->has('school_address_en'))
                                    <span class="text-danger"> {{ $errors->first('school_address_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="status"><strong>EIIN No (English) </strong></label>
                                <input type="text" id="" class="form-control shadow-lg" value="{{ old('eiin_no_en')}}" name="eiin_no_en" placeholder="" Required>
                                    @if($errors->has('eiin_no_en'))
                                        <span class="text-danger"> {{ $errors->first('eiin_no_en') }}</span>
                                    @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for=""><strong>School Name (English) </strong><i class="text-danger">*</i> </label>
                                <input type="text" id="" class="form-control shadow-lg" value="{{ old('school_name_en')}}" name="school_name_en" Required>
                                @if($errors->has('school_name_en'))
                                    <span class="text-danger"> {{ $errors->first('school_name_en') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for=""><strong>Email Address</strong></label>
                                <input type="text" id="" class="form-control shadow-lg" value="{{ old('email')}}" name="email" placeholder="" Required>
                                @if($errors->has('email'))
                                    <span class="text-danger"> {{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for=""><strong>Web Address</strong></label>
                                <input type="text" id="" class="form-control shadow-lg" value="{{ old('web_address')}}" name="web_address">
                                @if($errors->has('web_address'))
                                    <span class="text-danger"> {{ $errors->first('web_address') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-6">
                                  <label for="Logo"><strong>School Logo</strong></label>
                                    <input type="file" id="Logo" class="form-control shadow-sm" name="logo">
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