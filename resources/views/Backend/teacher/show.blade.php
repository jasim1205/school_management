@extends('backend.layouts.app')
@section('title','Teacher List')

@section('content')
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="{{asset('public/uploads/teachers/'.$teacher->image)}}" height="200px" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h1>{{$teacher->first_name_en}} {{$teacher->last_name_en}}</h1>

                                                <div class="comment-review star-rating">
													<div class="d-flex fw-bold">
														<p class="me-2">Department:</p><Strong>{{$teacher->department?->department_name}}</strong>
													</div>
													<div class="d-flex fw-bold">
														<p class="me-2">Designation:</p><Strong>{{$teacher->designation?->designation_name}}</strong>
													</div>
													<div class="d-flex fw-bold">
														<p class="me-2">Subject:</p><Strong>{{$teacher->subject}}</strong>
													</div>
													<div class="d-flex fw-bold">
														<p class="me-2">Salary:</p><Strong>{{$teacher->salary}}</strong>
													</div>
													
													<div class="d-flex fw-bold">
														<p class="me-2">Email:</p><Strong>{{$teacher->email}}</strong>
													</div>
													<div class="d-flex fw-bold">
														<p class="me-2">Mobile:</p><Strong>{{$teacher->contact_no_en}}</strong>
													</div>
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