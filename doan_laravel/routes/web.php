<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\DangNhapController;
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
Route::get('/',[AppController::class,'app'])->name('app');
Route::get('/dang-nhap',[DangNhapController::class,'formDangNhap'])->name('dang-nhap');