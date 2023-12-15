@extends('backend.layouts.app')
@section('content')
	<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Total Teacher</p>
							<h4 class="my-1"> <p>{{ $totalTeachers }}</p></h4>
							<p class="mb-0 font-13 text-success"><i class="fas fa-chalkboard-teacher"></i>Total Teachers</p>
						</div>
						<div class="widgets-icons bg-light-success text-success ms-auto"><i class="fas fa-chalkboard-teacher"></i>
						</div>
					</div>
					<div id="chart1"></div>
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
					<div id="chart2"></div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Total Collection</p>
							<h4 class="my-1">{{$totalCollection}} K</h4>
							<p class="mb-0 font-13 text-danger"><i class="fa-solid fa-money-check-dollar"></i>Total Collection</p>
						</div>
						<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class="fa-solid fa-money-check-dollar"></i>
						</div>
					</div>
					<div id="chart3"></div>
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
								<h4 class="my-1">$4805</h4>
								<p class="mb-0 font-13 text-success"></p>
							</div>
						</div>
						<div class="col">
							<div>
								<p class="mb-0 text-secondary">Total Student</p>
								<h4 class="my-1">8.4K</h4>
								<p class="mb-0 font-13 text-success"></p>
							</div>
						</div>
						<div class="col">
							<div>
								<p class="mb-0 text-secondary">Total Collection</p>
								<h4 class="my-1">59K</h4>
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
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img"><i class="fa-solid fa-user-group"></i>
									
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Class - 10</h6>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mt-3">5</h6>
						</div>
						<div class="col-sm">
							<div id="chart5"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
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
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end row-->
	
@endsection