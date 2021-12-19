@extends('layouts.app')

@section('navbar')
<nav class="d-flex justify-content-between container-fluid sticky-top align-items-center " id="navbar" >
    <div class="nav-left">
      <img src="{{asset('assets/images/cap.png')}}" alt="cap-education" class="logo-cap">
      <a href="#" class="gradient">E-Learning CKC</a>
    </div>
 <div class="row nav-option" style="margin-left: -300px">
      <ul class="list-unstyled">
        <li class="d-inline "><a href="{{route('admin')}}" class="text-dark">THỐNG KÊ</a></li>
        <li class="d-inline active-border"><a href="#" class="text-dark">KHÓA HỌC</a></li>
        <li class="d-inline "><a href="{{route('admin-teachers')}}" class="text-dark">GIÁO VIÊN</a></li>
        <li class="d-inline"><a href="{{route('admin-students')}}" class="text-dark">HỌC SINH</a></li>

    </ul>
    </div> 
    <div class="row">
      @include('partial.account-option',['accountInfo' => $accountInfo])
    </div>
  </nav>
@endsection
@section('main')
<main class=" container wow animate__rubberBand animate__animated animate__backInRight" >

  <div class="d-flex justify-content-between align-items-center mt-3">
    <a href="" class="text-dark"><h4>QUẢN LÝ LỚP HỌC</h4></a>
 <a href="">Thêm lớp học</a>
  </div>


<div class="row">
  <div class=" col-lg-4 col-md-6 mb-4">
    <div class="card position-relative">
        <img src="{{asset('assets/images/slide-1.jpg')}}" alt="">
  
        <div class="card-title-admin">
            <h4>Mountain River</h4>
            <p>Paraguay</p>
        </div>
       <div class="overlay-dark">
         <div class="options-admin">
           <a href=""><i class="fas fa-wrench text-warning px-2 " style="font-size: 21px"></i></a>
           <a href=""><i class="far fa-trash-alt text-warning px-2 " style="font-size: 21px"></i></a>
         </div>
        </div> 
    </div>
  </div>
  <div class=" col-lg-4 col-md-6 mb-4">
    <div class="card position-relative">
        <img src="{{asset('assets/images/slide-1.jpg')}}" alt="">
  
        <div class="card-title-admin">
            <h4>Mountain River</h4>
            <p>Paraguay</p>
        </div>
       <div class="overlay-dark">
         <div class="options-admin">
           <a href=""><i class="fas fa-wrench text-warning px-2 " style="font-size: 21px"></i></a>
           <a href=""><i class="far fa-trash-alt text-warning px-2 " style="font-size: 21px"></i></a>
         </div>
        </div> 
    </div>
  </div>
  <div class=" col-lg-4 col-md-6 mb-4">
    <div class="card position-relative">
        <img src="{{asset('assets/images/slide-1.jpg')}}" alt="">
  
        <div class="card-title-admin">
            <h4>Mountain River</h4>
            <p>Paraguay</p>
        </div>
       <div class="overlay-dark">
         <div class="options-admin">
           <a href=""><i class="fas fa-wrench text-warning px-2 " style="font-size: 21px"></i></a>
           <a href=""><i class="far fa-trash-alt text-warning px-2 " style="font-size: 21px"></i></a>
         </div>
        </div> 
    </div>
  </div>
  <div class=" col-lg-4 col-md-6 mb-4">
    <div class="card position-relative">
        <img src="{{asset('assets/images/slide-1.jpg')}}" alt="">
  
        <div class="card-title-admin">
            <h4>Mountain River</h4>
            <p>Paraguay</p>
        </div>
       <div class="overlay-dark">
         <div class="options-admin">
           <a href=""><i class="fas fa-wrench text-warning px-2 " style="font-size: 21px"></i></a>
           <a href=""><i class="far fa-trash-alt text-warning px-2 " style="font-size: 21px"></i></a>
         </div>
        </div> 
    </div>
  </div>
  
</div>


 
 

</div>


    
  </main>
@endsection