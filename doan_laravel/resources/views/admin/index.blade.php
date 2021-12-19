@extends('layouts.app')

@section('navbar')
<nav class="d-flex justify-content-between container-fluid sticky-top align-items-center " id="navbar" >
    <div class="nav-left">
      <img src="{{asset('assets/images/cap.png')}}" alt="cap-education" class="logo-cap">
      <a href="#" class="gradient">E-Learning CKC</a>
    </div>
 <div class="row nav-option" style="margin-left: -300px">
      <ul class="list-unstyled">
        <li class="d-inline active-border"><a href="#" class="text-dark">THỐNG KÊ</a></li>
        <li class="d-inline "><a href="{{route('admin-classrooms')}}"  class="text-dark">KHÓA HỌC</a></li>
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




<div class="row">
<h1>trang thong ke</h1>
  
</div>


 
 

</div>


    
  </main>
@endsection
