@extends('backend.layouts.app')
@section('title','Routine List')

@section('content')
@push('styles')
    <style>
        @media print {
            .sidebar-wrapper,.header,.chatbox,.nav-header,.searchform,.bs-stepper,.heading {
                display: none;
            }
            .page-wrapper{
                padding: 0;
                margin:0;
            }
            /* #printable-area {
                position: absolute;
                left: -50;
                top: 0;
            } */
        }
    </style>
@endpush

<!--start stepper two-->
<div class="heading">
    <h3 class="text-uppercase text-center">Class Routine</h3>
    <a href="{{route('routine.create')}}" class=""><i class="fa fa-plus">ADD NEW</i></a>
</div>

<hr>
<div id="stepper2" class="bs-stepper">
    <div class="card">
        <div class="card-body">
            <div class="bs-stepper-content">
                <form action="" class="searchform" method="get">
                    <div class="row ms-3">
                        <div class="col-6">
                            <div class="form-group d-flex">
                                <label class=""><strong>Search Routine</strong></label>
                                <select  id="" name="class_id" required class="form-control shadow-lg">
                                    <option value="">Select Class</option>
                                    @forelse($classes as $class)
                                    <option value="{{$class->id}}" {{ $class->id == old('class_id', $class_id) ? 'selected' : '' }}>{{$class->class_name_en}}</option>
                                    @empty
                                    <option value="">No Class found</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-3 mt-1">
                            <button type="submit" class="btn btn-info">Search</button>
                        </div>
                        <div class="col-3">
                            <button class="float-end me-5" onclick="printPage()"><i class="fa fa-print p-3"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header text-center">
        <h3 >ABC School & College</h3>
        <h5>Class routine: Session(2023-2024)</h5>
        <p>Class:</p>
    </div>
    <div class="card-body" id="printable-area">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">{{__('Week Day/Period')}}</th>
                        @foreach ($period as $r)
                            <th scope="col">{{__($r->period_name)}}<br/>{{__($r->duration)}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($weekday as $r)
                        <tr role="row" class="odd">
                            <th>{{$r->weekday_name}}</th>
                            @for($i=1;$i<7;$i++)
                                @if($rdata=\App\Models\Routine::where('weekday_id',$r->id)->where('period_id',$i)->where('class_id',$class_id)->first())
                                    <td>
                                        {{$rdata->subject?->subject_name_en}}<br/>
                                        {{$rdata->teacher?->first_name_en}} {{$rdata->teacher?->last_name_en}}
                                    </td>
                                @endif
                            @endfor
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>
<!--end stepper two--> 

@endsection
@push('scripts')
    <script>
        function printPage() {
            window.print();
        }
    </script>
@endpush
