@extends('backend.layouts.app')
@section('title','Routine Class')

@section('content')
<!--start stepper two--> 
<h6 class="text-uppercase">Linear Stepper</h6>
<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add New Routine</h4>
        </div>
        <div class="card-body">
            <div class="bs-stepper-content">
                <form class="form" method="post"action="{{route('routine.store')}}">
                        @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label>Class Name</label>
                                <select  id="" name="class_id" required class="form-control">
                                    <option value="">Select Class</option>
                                    @forelse($classes as $class)
                                    <option value="{{$class->id}}">{{$class->class_name_en}}</option>
                                    @empty
                                    <option value="">No Class found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                               <label>Week Day</label>
                                <select  id="" name="weekday_id" required class="form-control">
                                    <option value="">Select Week Day</option>
                                    @forelse($weekday as $w)
                                    <option value="{{$w->id}}">{{$w->weekday_name}}</option>
                                    @empty
                                    <option value="">No Week day found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                               <label>Period</label>
                                <select  id="" name="period_id" required class="form-control">
                                    <option value="">Select Period</option>
                                    @forelse($period as $p)
                                    <option value="{{$p->id}}">{{$p->period_name}}</option>
                                    @empty
                                    <option value="">No Period found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                               <label>Subject</label>
                                <select  id="" name="subject_id" class="form-control">
                                    <option value="">Select Subject</option>
                                    @forelse($subject as $s)
                                    <option value="{{$s->id}}">{{$s->subject_name_en}}</option>
                                    @empty
                                    <option value="">No Subject found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                               <label>Teacher</label>
                                <select  id="" name="teacher_id" class="form-control">
                                    <option value="">Select Teacher</option>
                                    @forelse($teacher as $t)
                                    <option value="{{$t->id}}">{{$t->first_name_en}} {{$t->last_name_en}}</option>
                                    @empty
                                    <option value="">No Subject found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <button class="btn btn-success px-4 mt-4" type="submit">Submit</button>
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