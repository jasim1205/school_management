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
						<p class="mb-0 font-13 text-success"><i class="fas fa-chalkboard-teacher"></i>Present {{$teacherPresentToday}}</p>
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
						<p class="mb-0 text-secondary">Total Present Today</p>
						<h4 class="my-1">{{$studentPresentToday}}</h4>
						<p class="mb-0 font-13 text-danger"><i class='fa fa-users'></i>Absent: <strong>{{$studentAbsentToday}}</strong></p>
					</div>
					<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='fa fa-users'></i>
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
						<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
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
							<h4 class="my-1">{{$totalTeachers}}</h4>
							
						</div>
					</div>
					<div class="col">
						<div>
							<p class="mb-0 text-secondary">Total Student</p>
							<h4 class="my-1">{{$totalStudents}}</h4>
							
						</div>
					</div>
					<div class="col">
						<div>
							<p class="mb-0 text-secondary">Today Present</p>
							<h4 class="my-1">{{$studentPresentToday}}</h4>
							
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
								<img src="{{asset('public/assets/images/icons/user-interface.png')}}" alt="" />
							</div>
							<div class="ms-2">
								<h6 class="mb-1">Honor Mobile 7x</h6>
								<p class="mb-0">$159.00</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<h6 class="mb-1">$3570.00</h6>
						<p class="mb-0">148 Sales</p>
					</div>
					<div class="col-sm">
						<div id="chart6"></div>
					</div>
				</div>
				<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
					<div class="col-sm-6">
						<div class="d-flex align-items-center">
							<div class="product-img">
								<img src="{{asset('public/assets/images/icons/watch.png')}}" alt="" />
							</div>
							<div class="ms-2">
								<h6 class="mb-1">Hand Watch</h6>
								<p class="mb-0">$250.00</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<h6 class="mb-1">$3650.00</h6>
						<p class="mb-0">122 Sales</p>
					</div>
					<div class="col-sm">
						<div id="chart7"></div>
					</div>
				</div>
				<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
					<div class="col-sm-6">
						<div class="d-flex align-items-center">
							<div class="product-img">
								<img src="{{asset('public/assets/images/icons/idea.png')}}" alt="" />
							</div>
							<div class="ms-2">
								<h6 class="mb-1">Mini Laptop</h6>
								<p class="mb-0">$260.00</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<h6 class="mb-1">$6320.00</h6>
						<p class="mb-0">452 Sales</p>
					</div>
					<div class="col-sm">
						<div id="chart8"></div>
					</div>
				</div>
				<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
					<div class="col-sm-6">
						<div class="d-flex align-items-center">
							<div class="product-img">
								<img src="{{asset('public/assets/images/icons/tshirt.png')}}" alt="" />
							</div>
							<div class="ms-2">
								<h6 class="mb-1">Slim-T-Shirt</h6>
								<p class="mb-0">$112.00</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<h6 class="mb-1">$2360.00</h6>
						<p class="mb-0">572 Sales</p>
					</div>
					<div class="col-sm">
						<div id="chart9"></div>
					</div>
				</div>
				<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
					<div class="col-sm-6">
						<div class="d-flex align-items-center">
							<div class="product-img">
								<img src="{{asset('public/assets/images/icons/headphones.png')}}" alt="" />
							</div>
							<div class="ms-2">
								<h6 class="mb-1">Smart Headphones</h6>
								<p class="mb-0">$360.00</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<h6 class="mb-1">$9840.00</h6>
						<p class="mb-0">275 Sales</p>
					</div>
					<div class="col-sm">
						<div id="chart10"></div>
					</div>
				</div>
				<div class="row border mx-0 py-2 radius-10 cursor-pointer">
					<div class="col-sm-6">
						<div class="d-flex align-items-center">
							<div class="product-img">
								<img src="{{asset('public/assets/images/icons/shoes.png')}}" alt="" />
							</div>
							<div class="ms-2">
								<h6 class="mb-1">Green Sports Shoes</h6>
								<p class="mb-0">$410.00</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<h6 class="mb-1">$3840.00</h6>
						<p class="mb-0">265 Sales</p>
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

@endsection