@extends('layouts.app')


{{-- <img src="{{URL::to('/')}}/images/avatar\{{$teacher->avatar}}" alt=""  class="avt-teacher"> --}}
      <img src="{{asset('assets/images/bg.jpg')}}" alt="" class="add-bg position-relative">

<div class="container position-absolute top-50 start-50 translate-middle">
  <a href="{{route('admin-teachers')}}"><h1>back</h1></a>
 <div class="row" style="margin-bottom: 20px">
   <div class="col-11 text-center">
    <p class="gradient">ADMIN - UPDATE TEACHER</p>
   </div>
 </div>
 <form method="POST" action="{{route('admin-post-update-teacher', ['id' => $teacher->id,'password'=>'*********' ])}}" enctype="multipart/form-data">
  @csrf
    <div class="row">
      <div class="col-4 text-end">
        <img src="{{URL::to('/')}}/images/avatar\{{$teacher->avatar}}" alt="" style="width: 100%;height:100%;opacity:0.7;border-radius:20px">
      </div>
      <div class="col-8 " style="padding-left: 60px">
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Mã số</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="code" value="{{$teacher->code}}" required class="input-add-teacher">
          </div>
        </div>
        <div class="row  mb-4">
          <div class="col-2 ">
            <p class="field-add-teacher">Tên đăng nhập</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="username" required class="input-add-teacher" value="{{$teacher->username}}">
          </div>
          @error('username')
          <span class="err-message">{{$message}}</span>
      @enderror
        </div>
        {{-- <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Mật khẩu</p>
            
          </div>
          <div class="col-10">
            <input type="password" name="password" required class="input-add-teacher" value="{{$teacher->password}}">
          </div>
        </div> --}}
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Họ và tên</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="name" required class="input-add-teacher" value="{{$teacher->name}}">
          </div>
          @error('name')
          <span class="err-message">{{$message}}</span>
      @enderror
        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Email</p>
            
          </div>
          <div class="col-10">
            <input type="email" name="email" required class="input-add-teacher" value="{{$teacher->email}}">
          </div>
          @error('email')
          <span class="err-message">{{$message}}</span>
      @enderror
        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Ảnh đại diện</p>
          
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
            <button type="submit" class="btn btn-update-teacher" >Update</button>
          </div>
        </div>
      </div>
  </form>
</div>






{{-- @extends('layouts.app');
<h1>upadte</h1>
<form method="POST" action="{{route('admin-post-update-teacher', ['id' => $teacher->id ])}}" enctype="multipart/form-data">
@csrf


  <div class="mb-3">
    <label class="form-label">Mã số</label>
    <input type="text" name="code" value="{{$teacher->code}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Tên đăng nhập</label>
    <input type="text" name="username" required value="{{$teacher->username}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Mật khẩu</label>
    <input type="password" name="password" required value="{{$teacher->password}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Họ và tên</label>
    <input type="text" name="name" required value="{{$teacher->name}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" required value="{{$teacher->email }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Ảnh đại diện</label>
    <img src="{{URL::to('/')}}/images/avatar\{{$teacher->avatar}}" alt=""  class="avt-teacher">
    @error('avatar')
      <span>{{ $message}} </span>
    @enderror
    <input type="file" name="avatar" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}