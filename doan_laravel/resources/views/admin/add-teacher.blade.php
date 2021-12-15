@extends('layouts.app');
<h1>add teacher</h1>
<form method="POST" action="{{route('admin-post-add-teacher')}}">
@csrf


  <div class="mb-3">
    <label class="form-label">Mã số</label>
    <input type="text" name="code" value="{{$code}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Tên đăng nhập</label>
    <input type="text" name="username" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Mật khẩu</label>
    <input type="password" name="password" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Họ và tên</label>
    <input type="text" name="name" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Ảnh đại diện</label>
    <input type="file" name="avatar" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>