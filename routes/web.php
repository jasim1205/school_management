<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\TeacherController as teacher;
use App\Http\Controllers\Backend\classesController as classes;
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
use App\Http\Controllers\Backend\StudentAttendanceController as studentattendance;
use App\Http\Controllers\Backend\TeacherAttendanceController as teacheratt;
use App\Http\Controllers\Backend\FeesController as fee;
use App\Http\Controllers\Backend\ExamResultController as examresult;
use App\Http\Controllers\Backend\FinalResultController as finalresult;
use App\Http\Controllers\Backend\StudentFeeController as studentfee;
use App\Http\Controllers\Backend\StudentFeePaymentController as feepayment;
use App\Http\Controllers\Backend\StudentFeeDetailsController as feedetail;

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
    Route::resource('fee', fee::class);
    Route::resource('feepayment', feepayment::class);
    Route::resource('feedetail', feedetail::class);
    Route::resource('studentfee', studentfee::class);
    Route::resource('examresult', examresult::class);
    Route::resource('finalresult', finalresult::class);
    Route::resource('studentattendance', studentattendance::class);
    Route::resource('teacheratt', teacheratt::class);
    Route::get('routine/show/{class}', [RoutineController::class, 'showClassRoutine'])->name('routine.show');
    Route::get('userProfile', [auth::class, 'show'])->name('userProfile');
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
