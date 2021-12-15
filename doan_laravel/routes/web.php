<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\DangKyController;
use App\Http\Controllers\HocSinhController;
use App\Http\Controllers\IndexController;
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
Route::get('/',[IndexController::class,'index'])->name('index');
Route::middleware('auth','admin')->group( function(){
    Route::get('/admin',[AdminController::class,'loadAdmin'])->name('admin');
});

Route::get('/dang-nhap',[DangNhapController::class,'formDangNhap'])->name('login');
Route::post('xuLyDangNhap',[DangNhapController::class,'xuLyDangNhap'])->name('postLogin');
Route::get('/dang-ky',[DangKyController::class,'formDangKy'])->name('sign-in');
Route::get('/hoc-sinh',[HocSinhController::class,'hocSinh'])->name('student');
