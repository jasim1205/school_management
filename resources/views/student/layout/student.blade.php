<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Profile</title>

        <link rel="shortcut icon" href="{{asset('public/student/assets/img/favicon.png')}}">

        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="{{asset('public/student/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{asset('public/student/assets/plugins/feather/feather.css')}}">

        <link rel="stylesheet" href="{{asset('public/student/assets/plugins/icons/flags/flags.css')}}">

        <link rel="stylesheet" href="{{asset('public/student/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/student/assets/plugins/fontawesome/css/all.min.css')}}">

        <link rel="stylesheet" href="{{asset('public/student/assets/css/style.css')}}">
    </head>

    <body>

        <div class="main-wrapper">

            <div class="header">

                <div class="header-left">
                    <a href="index.html" class="logo">
                        <img src="{{asset('public/assets/images/logo.png')}}" class="" alt="logo icon">
                    </a>
                   
                </div>
                <a class="mobile_btn" id="mobile_btn">
                    <i class="fas fa-bars"></i>
                </a>


                <ul class="nav user-menu">
                    <li class="nav-item dropdown has-arrow new-user-menus">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img class="rounded-circle" src="{{asset('public/uploads/students/' . $student_info->image)}}" width="31"
                                    alt="Soeng Souy">
                                <div class="user-text">
                                    <h6>{{$student_info->first_name_en}}
                                                {{$student_info->last_name_en}}</h6>
                                    <p class="text-muted mb-0">User</p>
                                </div>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('public/uploads/students/' . $student_info->image)}}" alt="User Image"
                                        class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    <h6>Soeng Souy</h6>
                                    <p class="text-muted mb-0">Student</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{route('student_profile')}}">My Profile</a>
                            <a class="dropdown-item" href="{{route('studentlogOut')}}">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            @yield('content')

        </div>


        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{asset('public/student/assets/js/jquery-3.6.0.min.js')}}"></script>

        <script src="{{asset('public/student/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{asset('public/student/assets/js/feather.min.js')}}"></script>

        <script src="{{asset('public/student/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <script src="{{asset('public/student/assets/js/script.js')}}"></script>
    </body>

</html>