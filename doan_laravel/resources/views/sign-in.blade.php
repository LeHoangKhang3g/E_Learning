@extends('index')

@section('sign-in')

<div id="overlay">
  <div class="form-signin position-absolute top-50 start-50 translate-middle">
    <form action="{{route('post-sign-in')}}" method="POST">    
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

      @error('username')
      <span class="err-message-sigin">{{$message}}</span>
      @enderror 
      <div class="mb-3 text-start">
        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
        <input type="password" name="password" class="form-control mb-2" placeholder="Nhập mật khẩu"  value="" >
        
        @error('password')
        <span class="err-message-sigin-pass">{{$message}}</span>
    @enderror   
      </div>
   
      <button type="submit" class="btn btn-success mt-3">Đăng nhập</button>
      <h2>  @if (session('error'))
                                    <div class="alert alert-danger" style="color: red">
                                        {{ session('error') }}
                                    </div>
                                    @endif  </h2>
    </form>
  </div>
</div>
    

@endsection