@extends('backend.layouts.app')
@section('title','Add School Name')

@section('content')
    <div class="col-lg-12">
        <div class="card shadow-lg">
            <div class="card-header">
                <h4 class="card-title">Add New School</h4>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form class="form needs-validation" method="post" enctype="multipart/form-data" action="{{route('school.store')}}">
                        @csrf
                                   
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group mb-3">
                                    <label class="col-lg-4 col-form-label" for="">School Id
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id=" " class="form-control shadow-lg" value="{{ old('school_id_en ')}}" name="school_id_en" Required>
                                    
                                    @if($errors->has('school_id_en'))
                                        <span class="text-danger"> {{ $errors->first('school_id_en') }}</span>
                                    @endif
                                </div>

                                

                                <div class="form-group mb-3">
                                    <label for="">School Title (English) <i class="text-danger">*</i></label>
                                    <input type="text" id="" class="form-control shadow-lg" value="{{ old('school_title_en')}}" name="school_title_en">
                                            @if($errors->has('school_title_en'))
                                                <span class="text-danger"> {{ $errors->first('school_title_en') }}</span>
                                            @endif
                                </div>

                                        
                                
                                <div class="form-group mb-3">
                                    <label for="">School Address(English) <i class="text-danger">*</i></label>
                                    <input type="text" id="" class="form-control shadow-lg" value="{{ old('school_address_en')}}" name="school_address_en" placeholder="" Required>
                                            @if($errors->has('school_address_en'))
                                                <span class="text-danger"> {{ $errors->first('school_address_en') }}</span>
                                            @endif
                                </div>
                                
                               
                                <div class="form-group mb-3">
                                    <label for="status">EIIN No (English) </label>
                                     <input type="text" id="" class="form-control shadow-lg" value="{{ old('eiin_no_en')}}" name="eiin_no_en" placeholder="" Required>
                                            @if($errors->has('eiin_no_en'))
                                                <span class="text-danger"> {{ $errors->first('eiin_no_en') }}</span>
                                            @endif
                                </div>              
                            </div>


                            <div class="col-xl-6 mt-1">
                                <div class="form-group mb-3">
                                    <label for="">School Name (English) <i class="text-danger">*</i> </label>
                                    <input type="text" id="" class="form-control shadow-lg" value="{{ old('school_name_en')}}" name="school_name_en" Required>
                                            @if($errors->has('school_name_en'))
                                                <span class="text-danger"> {{ $errors->first('school_name_en') }}</span>
                                            @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Email Address</label>
                                     <input type="text" id="" class="form-control shadow-lg" value="{{ old('email')}}" name="email" placeholder="" Required>
                                            @if($errors->has('email'))
                                                <span class="text-danger"> {{ $errors->first('email') }}</span>
                                            @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Web Address</label>
                                    <input type="text" id="" class="form-control shadow-lg" value="{{ old('web_address')}}" name="web_address">
                                            @if($errors->has('web_address'))
                                                <span class="text-danger"> {{ $errors->first('web_address') }}</span>
                                            @endif
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="Logo">School Logo</label>
                                    <input type="file" id="Logo" class="form-control shadow-sm" name="logo">
                                </div>  
                            </div>
                            <div class="col-xl-12 mt-3">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label"><a href="javascript:void()">Terms &amp; Conditions</a> <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-8">
                                        <div class="form-check">
										    <input class="form-check-input" type="checkbox" value="" id="validationCustom12" required="">
											<label class="form-check-label" for="validationCustom12">
												Agree to terms and conditions
											</label>
										</div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-lg-8 ms-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

@endsection