<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/syndron/demo/vertical/auth-cover-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:58:38 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('public/assets/images/logo.png')}}" type="image/png"/>
	<!--plugins-->
	<link href="{{asset('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('public/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('public/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('public/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('public/assets/css/icons.css')}}" rel="stylesheet">
	<title>PreSchool</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				@yield('content')
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{asset('public/assets/js/app.js')}}"></script>
</body>


<!-- Mirrored from codervent.com/syndron/demo/vertical/auth-cover-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:58:38 GMT -->
</html>