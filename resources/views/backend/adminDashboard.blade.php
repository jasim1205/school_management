@extends('backend.layouts.app')
@section('content')
	<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Total Teacher</p>
							<h4 class="my-1">{{$totalTeachers}}</h4>
							<p class="mb-0 font-13 text-success"><i class="fas fa-chalkboard-teacher"></i></i>Total Teachers</p>
						</div>
						<div class="widgets-icons bg-light-warning text-warning ms-auto">
							<i class="fas fa-chalkboard-teacher"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Total Student</p>
							<h4 class="my-1">{{$totalStudents}}</h4>
							<p class="mb-0 font-13 text-success"><i class='bx bxs-group'></i>Total Students</p>
						</div>
						<div class="widgets-icons bg-light-warning text-warning ms-auto">
							<img src="{{asset('public/assets/images/dash-icon-01.svg')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Total Collection</p>
							<h4 class="my-1">{{$totalCollection}} $</h4>
							<p class="mb-0 font-13 text-danger"><i class="fa-solid fa-money-check-dollar"></i>Total Collection</p>
						</div>
						<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class="fa-solid fa-money-check-dollar"></i>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!--end row-->
	<div class="row row-cols-1 row-cols-xl-2">
		<div class="col d-flex">
			<div class="card radius-10 w-100">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-1">Overview</h5>
							<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i></p>
						</div>
						<div class="dropdown ms-auto">
							<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:;">Action</a>
								</li>
								<li><a class="dropdown-item" href="javascript:;">Another action</a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="javascript:;">Something else here</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="row row-cols-1 row-cols-sm-3 mt-4">
						<div class="col">
							<div>
								<p class="mb-0 text-secondary">Total Teacher</p>
								<h4 class="my-1">{{ $totalTeachers }}</h4>
								<p class="mb-0 font-13 text-success"></p>
							</div>
						</div>
						<div class="col">
							<div>
								<p class="mb-0 text-secondary">Total Student</p>
								<h4 class="my-1">{{$totalStudents}}</h4>
								<p class="mb-0 font-13 text-success"></p>
							</div>
						</div>
						<div class="col">
							<div>
								<p class="mb-0 text-secondary">Total Collection</p>
								<h4 class="my-1">{{$totalCollection}} $</h4>
								<p class="mb-0 font-13 text-danger"></p>
							</div>
						</div>
					</div>
					<div id="chart4"></div>
				</div>
			</div>
		</div>
		<div class="col d-flex">
			<div class="card radius-10 w-100">
				<div class="card-header border-bottom-0">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-1">Student Of Classes</h5>
							<p class="mb-0 font-13 text-secondary"></p>
						</div>
						<div class="dropdown ms-auto">
							<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:;">Action</a>
								</li>
								<li><a class="dropdown-item" href="javascript:;">Another action</a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="javascript:;">Something else here</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="product-list p-3 mb-3">
					 @foreach ($classCounts as $className => $count)
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img"><i class="fa-solid fa-user-group"></i>
									
								</div>
								<div class="ms-2">
									<h6 class="mb-1">{{ $className }}</h6>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mt-3">{{ $count }} students</h6>
						</div>
						<div class="col-sm">
							<div id="chart5"></div>
						</div>
					</div>
					  @endforeach
					<!-- <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<i class="fa-solid fa-user-group"></i>
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Class - 9</h6>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mt-3">5</h6>
						</div>
						<div class="col-sm">
							<div id="chart6"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<i class="fa-solid fa-user-group"></i>
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Class - 8</h6>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mt-3">5</h6>
						</div>
						<div class="col-sm">
							<div id="chart7"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<i class="fa-solid fa-user-group"></i>
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Class - 7</h6>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mt-3">5</h6>
						</div>
						<div class="col-sm">
							<div id="chart8"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<i class="fa-solid fa-user-group"></i>
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Class - 6</h6>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mt-3">5</h6>
						</div>
						<div class="col-sm">
							<div id="chart9"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<i class="fa-solid fa-user-group"></i>
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Class - 5</h6>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mt-3">5</h6>
						</div>
						<div class="col-sm">
							<div id="chart10"></div>
						</div>
					</div>
					<div class="row border mx-0 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<i class="fa-solid fa-user-group"></i>
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Class - 4</h6>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mt-3">5</h6>
						</div>
						<div class="col-sm">
							<div id="chart11"></div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!--end row-->
	<!--end row-->
<div class="row">
	<div class="col-xl-12 d-flex">
		<div class="card radius-10 w-100">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<h5 class="mb-1 text-center">Transaction History</h5>
						<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
					</div>
					<div class="dropdown ms-auto">
						<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="javascript:;">Action</a>
							</li>
							<li><a class="dropdown-item" href="javascript:;">Another action</a>
							</li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="javascript:;">Something else here</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="table-responsive mt-4">
					<table class="table align-middle mb-0 table-hover" id="Transaction-History">
						<thead class="table-light">
							<tr>
								<th>Student Name</th>
								<th>Class Name</th>
								<th>Fee Month</th>
								<th>Fee Year</th>
								<th>Amount</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($studentFees as $sfee)
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/uploads/students/'.$sfee->student?->image)}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">{{$sfee->student?->first_name_en}} {{$sfee->student?->last_name_en}}</h6>
											<p class="mb-0 font-13 text-secondary"></p>
										</div>
									</div>
								</td>
								<td>{{$sfee->class?->class_name_en}}</td>
								<td>{{date('F', strtotime('2020-'.$sfee->first()->fee_month.'-01'))}}</td>
								<td>{{$sfee->fee_year}}</td>
								<td>{{$sfee->total_fees}}</td>
								<td style="color: @if($sfee->status==1) green @else red @endif; font-weight:bold;"><i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
								@if($sfee->status==1){{__('PAID')}} @else{{__('UNPAID')}} @endif</td>
							</tr>
							@endforeach
							<!-- <tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-2.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #9653248</p>
										</div>
									</div>
								</td>
								<td>Jan 12, 2021</td>
								<td>+566.00</td>
								<td>
									<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-3.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #7689524</p>
										</div>
									</div>
								</td>
								<td>Jan 14, 2021</td>
								<td>+636.00</td>
								<td>
									<div class="badge rounded-pill bg-danger w-100">Declined</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-4.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from John Roman</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #8335884</p>
										</div>
									</div>
								</td>
								<td>Jan 15, 2021</td>
								<td>+246.00</td>
								<td>
									<div class="badge rounded-pill bg-success w-100">Completed</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-7.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from David Buckley</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #7865986</p>
										</div>
									</div>
								</td>
								<td>Jan 16, 2021</td>
								<td>+876.00</td>
								<td>
									<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-8.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
										</div>
									</div>
								</td>
								<td>Jan 18, 2021</td>
								<td>+536.00</td>
								<td>
									<div class="badge rounded-pill bg-success w-100">Completed</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-9.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from James Caviness</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #3775420</p>
										</div>
									</div>
								</td>
								<td>Jan 18, 2021</td>
								<td>+536.00</td>
								<td>
									<div class="badge rounded-pill bg-success w-100">Completed</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-10.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #3768920</p>
										</div>
									</div>
								</td>
								<td>Jan 19, 2021</td>
								<td>+536.00</td>
								<td>
									<div class="badge rounded-pill bg-success w-100">Completed</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-11.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #9673520</p>
										</div>
									</div>
								</td>
								<td>Jan 20, 2021</td>
								<td>+86.00</td>
								<td>
									<div class="badge rounded-pill bg-danger w-100">Declined</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-12.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
										</div>
									</div>
								</td>
								<td>Jan 18, 2021</td>
								<td>+536.00</td>
								<td>
									<div class="badge rounded-pill bg-success w-100">Completed</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-13.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from David Buckley</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
										</div>
									</div>
								</td>
								<td>Jan 22, 2021</td>
								<td>+854.00</td>
								<td>
									<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="">
											<img src="{{asset('public/assets/images/avatars/avatar-14.png')}}" class="rounded-circle" width="46" height="46" alt="" />
										</div>
										<div class="ms-2">
											<h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
											<p class="mb-0 font-13 text-secondary">Refrence Id #4278620</p>
										</div>
									</div>
								</td>
								<td>Jan 18, 2021</td>
								<td>+536.00</td>
								<td>
									<div class="badge rounded-pill bg-success w-100">Completed</div>
								</td>
							</tr> -->
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
</div>
<!--end row-->
	
@endsection