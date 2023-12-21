<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\TeacherController as teacher;
use App\Http\Controllers\Backend\ClassesController as classes;
use App\Http\Controllers\Backend\SectionController as section;
use App\Http\Controllers\Backend\SubjectController as subject;
use App\Http\Controllers\Backend\DepartmentController as department;
use App\Http\Controllers\Backend\DesignationController as designation;
use App\Http\Controllers\Backend\SchoolController as school;
use App\Http\Controllers\Backend\SessionController as session;
use App\Http\Controllers\Backend\GroupController as group;
use App\Http\Controllers\Backend\ClassSubjectController as assignsubject;
use App\Http\Controllers\Backend\ClassSectionController as assignsection;
use App\Http\Controllers\Backend\ClassGroupController as assigngroup;
use App\Http\Controllers\Backend\PeriodController as period;
use App\Http\Controllers\Backend\WeekDayController as weekday;
use App\Http\Controllers\Backend\RoutineController as routine;
use App\Http\Controllers\Backend\StudentController as student;
use App\Http\Controllers\Backend\ExamController as exam;
use App\Http\Controllers\Backend\StudentAttendanceController as studentattend;
use App\Http\Controllers\Backend\TeacherAttendanceController as teacherattend;
use App\Http\Controllers\Backend\FeesController as fee;
use App\Http\Controllers\Backend\ExamResultController as examresult;
use App\Http\Controllers\Backend\FinalResultController as finalresult;
use App\Http\Controllers\Backend\StudentFeeController as studentfee;
use App\Http\Controllers\Backend\StudentFeePaymentController as feepayment;
use App\Http\Controllers\Backend\AdmitCardController as admit;

//student
use App\Http\Controllers\Student\AuthController;
use App\Http\Controllers\Student\DashboardController as studashboard;
use App\Http\Controllers\Student\ProfileController as stu_profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'signOut'])->name('logOut');



Route::middleware(['checkauth'])->prefix('admin')->group(function(){
    Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
    Route::get('userProfile', [auth::class, 'show'])->name('userProfile');
});



Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
   
    Route::resource('teacher', teacher::class);
    Route::resource('student', student::class);
    Route::resource('classes', classes::class);
    Route::resource('section', section::class);
    Route::resource('subject', subject::class);
    Route::resource('department', department::class);
    Route::resource('designation', designation::class);
    Route::resource('school', school::class);
    Route::resource('session', session::class);
    Route::resource('group', group::class);
    Route::resource('assignsubject', assignsubject::class);
    Route::resource('assignsection', assignsection::class);
    Route::resource('assigngroup', assigngroup::class);
    Route::resource('period', period::class);
    Route::resource('weekday', weekday::class);
    Route::resource('routine', routine::class);
    Route::resource('exam', exam::class);
    Route::resource('admit', admit::class);

    Route::get('routine/show/{class}', [RoutineController::class, 'showClassRoutine'])->name('routine.show');


//fee menagement
    Route::resource('fee', fee::class);
    Route::resource('studentfee', studentfee::class);
    Route::get('studentfee/feepayment/{id}', [studentfee::class, 'feepayment'])->name('studentfee.feepayment');
    Route::post('studentfee/feepayment/{id}', [studentfee::class, 'feeupdate'])->name('feeupdate');
    Route::get('studentfee/paymentslip/{id}', [studentfee::class, 'paymentslip'])->name('paymentslip.paymentslip');



//student Result
    Route::resource('examresult', examresult::class);
    Route::get('finalresult',[examresult::class, 'finalresult'])->name('finalresult.finalresult');
    Route::get('individual',[examresult::class,'individual'])->name('individual');


    // Route::resource('finalresult', finalresult::class);
    // Route::get('finalresult/individual/{id}',[finalresult::class,'individual'])->name('individual');

//student attendance

    Route::get('studentattend', [studentattend::class,'index'])->name('studentattend.index');
    Route::get('studentattend/create', [studentattend::class,'create'])->name('studentattend.create');
    Route::post('studentattend', [studentattend::class,'store'])->name('studentattend.store');
    Route::get('studentattend/show/{class_id}/{att_date}', [studentattend::class,'show'])->name('studentattend.show');
    Route::get('studentattend/singleedit/{id}', [studentattend::class, 'singleedit'])->name('studentattend.singleedit');
    Route::post('studentattend/singleedit/{id}', [studentattend::class, 'update'])->name('studentupdate');

//teacher attendance

    Route::get('teacherattend', [teacherattend::class,'index'])->name('teacherattend.index');
    Route::get('teacherattend/create', [teacherattend::class,'create'])->name('teacherattend.create');
    Route::post('teacherattend', [teacherattend::class,'store'])->name('teacherattend.store');
    Route::get('teacherattend/show/{att_date}', [teacherattend::class,'show'])->name('teacherattend.show');
    Route::get('teacherattend/singleedit/{id}', [teacherattend::class, 'singleedit'])->name('teacherattend.singleedit');
    Route::post('teacherattend/singleedit/{id}', [teacherattend::class, 'update'])->name('update');

    
   
});

//students controller
    Route::get('student/register', [AuthController::class, 'signUpForm'])->name('frontstu.register');
    Route::post('student/register', [AuthController::class, 'signUpStore'])->name('frontstu.store');
    Route::get('student/login', [AuthController::class,'signInForm'])->name('frontstu.login');
    Route::post('student/login', [AuthController::class,'signInCheck'])->name('frontstu.login.check');
    Route::get('student/logout', [AuthController::class,'signOut'])->name('studentlogOut');
    


    Route::middleware(['checkstudent'])->prefix('student')->group(function(){
        Route::get('/dashboard', [studashboard::class, 'index'])->name('studentdashboard');
         Route::get('/profile', [stu_profile::class, 'index'])->name('student_profile');
        Route::post('/profile/save', [stu_profile::class, 'save_profile'])->name('student_save_profile');
        Route::post('/profile/savePass', [stu_profile::class, 'change_password'])->name('change_password');
        Route::get('result', [stu_profile::class, 'student_result'])->name('studentresult');
        Route::get('routine', [stu_profile::class, 'student_routine'])->name('studentroutine');
        Route::get('attendance', [stu_profile::class, 'student_attendance'])->name('studentattendance');
    });

// Route::get('/login', function () {
//     return view('backend.authentication.login');
// });
Route::get('/', function () {
    return view('frontend/home/index');
});
Route::get('/about', function () {
    return view('frontend/component/about');
})->name('about');
// Route::get('/', function () {
//     return view('backend.dashboard');
// })->name('dashboard');
