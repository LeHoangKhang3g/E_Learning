<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts/app')->name('app');
// });

// Route::get('/',[AppController::class,'app'])->name('app');

Route::middleware('sign_out')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('index');

    Route::get('/sign-up',[SignUpController::class,'formSignUp'])->name('sign-up');
    Route::post('/sign-up',[SignUpController::class,'postSignUp'])->name('post-sign-up');
    
    Route::get('/sign-in',[SignInController::class,'formSignIn'])->name('sign-in');
    Route::post('/post-sign-in',[SignInController::class,'postSignIn'])->name('post-sign-in');
});


Route::middleware('auth','admin')->group(function(){
    
    Route::prefix('/admin')->group(function(){
        Route::get('/',[AdminController::class,'index'])->name('admin');
        Route::get('/sign-out',[AdminController::class,'signOut'])->name('admin-sign-out');

        Route::get('/teachers',[AdminController::class,'teachers'])->name('admin-teachers');
        Route::get('/teachers/add',[AdminController::class,'formAddTeacher'])->name('admin-add-teacher');
        Route::post('/teachers/add',[AdminController::class,'postAddTeacher'])->name('admin-post-add-teacher');
        Route::get('/teachers/{id}/update',[AdminController::class,'formUpdateTeacher'])->name('admin-update-teacher');
        Route::post('/teachers/{id}/update',[AdminController::class,'postUpdateTeacher'])->name('admin-post-update-teacher');
        Route::get('/teachers/{id}/delete',[AdminController::class,'deleteTeacher'])->name('admin-delete-teacher');
        Route::get('/teachers/{id}/reset-password',[AdminController::class,'resetPasswordTeacher'])->name('admin-reset-password-teacher');
        Route::get('/teachers/{id}/send-email',[AdminController::class,'formSendEmailTeacher'])->name('admin-send-email-teacher');
        Route::post('/teachers/{id}/send-email',[AdminController::class,'postSendEmailTeacher'])->name('admin-post-send-email-teacher');

        Route::get('/students',[AdminController::class,'students'])->name('admin-students');
        Route::get('/students/add',[AdminController::class,'formAddStudent'])->name('admin-add-student');
        Route::post('/students/add',[AdminController::class,'postAddStudent'])->name('admin-post-add-student');
        Route::get('/students/{id}/update',[AdminController::class,'formUpdateStudent'])->name('admin-update-student');
        Route::post('/students/{id}/update',[AdminController::class,'postUpdateStudent'])->name('admin-post-update-student');
        Route::get('/students/{id}/delete',[AdminController::class,'deleteStudent'])->name('admin-delete-student');
        Route::get('/students/{id}/reset-password',[AdminController::class,'resetPasswordStudent'])->name('admin-reset-password-student');
        Route::get('/students/{id}/send-email',[AdminController::class,'formSendEmailStudent'])->name('admin-send-email-student');
        Route::post('/students/{id}/send-email',[AdminController::class,'postSendEmailStudent'])->name('admin-post-send-email-student');

        Route::get('/classrooms',[AdminController::class,'classrooms'])->name('admin-classrooms');
        Route::get('/classrooms/{id}/detail',[AdminController::class,'detailClassroom'])->name('admin-detail-classrooms');
        Route::get('/classrooms/{id}/send-email',[AdminController::class,'formSendEmailClassroom'])->name('admin-send-email-classroom');
        Route::post('/classrooms/{id}/send-email',[AdminController::class,'postSendEmailClassroom'])->name('admin-post-send-email-classroom');
    });

});

Route::middleware('auth','teacher')->group(function(){

    Route::prefix('/teacher')->group(function(){
        Route::get('/',[TeacherController::class,'index'])->name('teacher');
        Route::get('/sign-out',[TeacherController::class,'signOut'])->name('teacher-sign-out');

        Route::get('/update-profile',[TeacherController::class,'formUpdateProfile'])->name('teacher-update-profile');
        Route::post('/update-profile',[TeacherController::class,'postUpdateProfile'])->name('teacher-post-update-profile');
        Route::get('/change-password',[TeacherController::class,'formChangePassword'])->name('teacher-change-password');
        Route::post('/change-password',[TeacherController::class,'postChangePassword'])->name('teacher-post-change-password');

        Route::get('/classrooms',[TeacherController::class,'classrooms'])->name('teacher-classrooms');
        Route::get('/classrooms/open/{id}',[TeacherController::class,'classroomsOptions'])->name('teacher-classrooms-options');
        Route::get('/classrooms/add',[TeacherController::class,'formAddClassroom'])->name('teacher-add-classroom');
        Route::post('/classrooms/add',[TeacherController::class,'postAddClassroom'])->name('teacher-post-add-classroom');
        Route::get('/classrooms/{id}/update',[TeacherController::class,'formUpdateClassroom'])->name('teacher-update-classroom');
        Route::post('/classrooms/{id}/update',[TeacherController::class,'postUpdateClassroom'])->name('teacher-post-update-classroom');
        Route::get('/classrooms/{id}/delete',[TeacherController::class,'deleteClassroom'])->name('teacher-delete-classroom');
        Route::get('/classrooms/{id}/students-wait',[TeacherController::class,'studentsWait'])->name('teacher-students-wait');
        Route::get('/classrooms/{id}/students-list',[TeacherController::class,'studentsList'])->name('teacher-students-list');
        Route::post('/classrooms/{id}/add-student',[TeacherController::class,'addStudents'])->name('teacher-add-students');
        Route::get('/classrooms/{id}/remove/{student_id}',[TeacherController::class,'removeStudent'])->name('teacher-remove-student');
        Route::get('/classrooms/{id}/add-student/{student_id}',[TeacherController::class,'addStudentsWait'])->name('teacher-add-students-wait');
        Route::get('/classrooms/{id}/remove-student/{student_id}',[TeacherController::class,'removeStudentsWait'])->name('teacher-remove-students-wait');

        Route::post('/classrooms/{id}/post-type',[TeacherController::class,'addPostType'])->name('post-add-post-type');
        Route::post('/classrooms/{id}/post-news',[TeacherController::class,'addPostNews'])->name('post-add-news');
        // Route::post('/classrooms/{id}/postsClassroom',[TeacherController::class,'postsClassroom'])->name('posts-Classroom');
        Route::get('/classrooms/detailNewExercise/{id}',[TeacherController::class,'detailNewExercise'])->name('detailNewExercise');

    });
    
});

Route::middleware('auth','student')->group(function(){

    Route::prefix('/student')->group(function(){
        Route::get('/',[StudentController::class,'index'])->name('student');
        Route::get('/sign-out',[StudentController::class,'signOut'])->name('student-sign-out');

        Route::get('/classrooms',[TeacherController::class,'classrooms'])->name('student-classrooms');

        Route::get('/update-profile',[StudentController::class,'formUpdateProfile'])->name('student-update-profile');
        Route::post('/update-profile',[StudentController::class,'postUpdateProfile'])->name('student-post-update-profile');
        Route::get('/change-password',[StudentController::class,'formChangePassword'])->name('student-change-password');
        Route::post('/change-password',[StudentController::class,'postChangePassword'])->name('student-post-change-password');

        // Route::get('/join-classroom',[StudentController::class,'formJoinClassroom'])->name('student-join-classroom');
        Route::post('/join-classroom',[StudentController::class,'postJoinClassroom'])->name('student-post-join-classroom');
        
        Route::get('/classrooms/{id}/news',[StudentController::class,'classroomNews'])->name('classroomNews');

        Route::get('/classrooms/news/detail/{post_id}',[StudentController::class,'detailNews'])->name('detailNews');
    });

    
});


