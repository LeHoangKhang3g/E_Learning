@extends('layouts.app')

@section('sign-in')

<div id="overlay">
    <div class="form-signin position-absolute top-50 start-50 translate-middle">

        <form>
      <div class="text-end">
        <a href="{{route('app')}}">
            <i class="fas fa-times"></i>
        </a>
      </div>
     <div style="margin-top:-20px">
        <span class="gradient">E-Learning CKC</span>
     </div>
      

            <p><i class="title-signin">Đăng nhập</i></p>
            <div class="mb-3 text-start">
              <label for="exampleInputEmail1" class="form-label ">Tài khoản</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tài khoản" required>
           
            </div>
            <div class="mb-3 text-start">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu" required>
            </div>
     
            <button type="submit" class="btn btn-success mt-3">Đăng nhập</button>
          </form>
    </div>
</div>
    

@endsection