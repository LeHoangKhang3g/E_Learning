@extends('layouts.app')


{{-- <img src="{{URL::to('/')}}/images/avatar\{{$student->avatar}}" alt=""  class="avatar-circle"> --}}
      <img src="{{asset('assets/images/bg3.jpg')}}" alt="" class="add-bg position-relative">

<div class="container position-absolute top-50 start-50 translate-middle">
  <a href="{{route('admin-students')}}" ><h1>BACK</h1></a>
 <div class="row" style="margin-bottom: 20px">
   <div class="col-11 text-center">
    <p class="gradient">ADMIN - UPDATE STUDENT</p>
   </div>
 </div>
 <form method="POST" action="{{route('admin-post-update-student', ['id' => $student->id,'password'=>'*********' ])}}" enctype="multipart/form-data">
  @csrf
    <div class="row">
      <div class="col-4 text-end">
        <img src="{{URL::to('/')}}/images/students/avatar\{{$student->avatar}}" alt="" style="width: 100%;height:100%;opacity:0.7;border-radius:20px">
      </div>
      <div class="col-8 " style="padding-left: 60px">
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-student">Mã số</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="code" value="{{$student->code}}" required readonly class="input-add-student">
          </div>
        </div>
        <div class="row  mb-4">
          <div class="col-2 ">
            <p class="field-add-student">Tên đăng nhập</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="username" required class="input-add-student" value="{{$student->username}}">
          </div>
          @error('username')
          <span class="err-message">{{$message}}</span>
      @enderror
        </div>
        {{-- <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-student">Mật khẩu</p>
            
          </div>
          <div class="col-10">
            <input type="password" name="password" required class="input-add-student" value="{{$student->password}}">
          </div>
        </div> --}}
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-student">Họ và tên</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="name" required class="input-add-student" value="{{$student->name}}">
          </div>
          @error('name')
          <span class="err-message">{{$message}}</span>
      @enderror
        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-student">Email</p>
            
          </div>
          <div class="col-10">
            <input type="email" name="email" required class="input-add-student" value="{{$student->email}}">
          </div>
          @error('email')
          <span class="err-message">{{$message}}</span>
      @enderror
        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-student">Ảnh đại diện</p>
          
          </div>
          <div class="col-10">
      
          <input type="file" name="avatar"  style="margin-top: 15px">
          </div>
          @error('avatar')
          <span>{{ $message}} </span>
        @enderror
        </div>
        <div class="row">
          <div class="col-6 text-center">
            <button type="submit" class="btn btn-update-student" >Update</button>
          </div>
        </div>
      </div>
  </form>
</div>




