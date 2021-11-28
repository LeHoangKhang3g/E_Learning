@extends('index')

@section('sign-in')

<div id="overlay">
    <div class="form-signin position-absolute top-50 start-50 translate-middle">

        <form action="{{route('postLogin')}}" method="POST">
         
      <div class="text-end">
        <a href="{{route('index')}}">
            <i class="fas fa-times" style="font-size: 25px"></i>
        </a>
      </div>
     <div style="margin-top:-20px">
        <span class="gradient">E-Learning CKC</span>
     </div>
      
     @csrf
            <p><i class="title-signin">Đăng nhập</i></p>
            <div class="mb-3 text-start">
              <label for="exampleInputEmail1" class="form-label ">Tài khoản</label>
              <input type="text" name="username"class="form-control" placeholder="Nhập tài khoản" value="" required>
           
            </div>
            <div class="mb-3 text-start">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
              <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu"  value="" required>
            </div>
     
            <button type="submit" class="btn btn-success mt-3">Đăng nhập</button>
          </form>
    </div>
</div>
    

@endsection