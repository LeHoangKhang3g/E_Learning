@extends('layouts.app')



      <img src="{{asset('assets/images/bg3.jpg')}}" alt="" class="add-bg position-relative">

<div class="container position-absolute top-50 start-50 translate-middle">
 <div class="row" style="margin-bottom: 20px">
   <div class="col-11 text-center">
    <p class="gradient">FORGOT PASSWORD</p>
   </div>
 </div>
  <form method="POST" action="{{route('post-code-forgot-password')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-4 text-end">
        <img src="{{asset('assets/images/bg2.jpg')}}" alt="" style="width: 100%;height:100%;opacity:0.7;border-radius:20px">
      </div>
      <div class="col-8 " style="padding-left: 60px">
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-student">Nhập code được gửi đến email của bạn:</p>            
          </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-student">Email:</p>
            
          </div>
          <div class="col-10">
            <input type="email" name="email" value="{{$email}}" required redonly class="input-add-student">
          </div>
      
        <div class="row">
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-student">Code:</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="code" required class="input-add-student">
          </div>
        <input type="hidden" name="message" value="">
        <div class="row">
          <div class="col-6 text-center">
            <button type="submit" class="btn btn-add-student" >Gửi code</button>
          </div>
        </div>
      </div>
  </form>
</div>

</div>
