@extends('layouts.app');
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
</form>