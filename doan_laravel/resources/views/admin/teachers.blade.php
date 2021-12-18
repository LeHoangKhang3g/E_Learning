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
        <li class="d-inline "><a href="{{route('admin-classrooms')}}" class="text-dark">KHÓA HỌC</a></li>
        <li class="d-inline active-border"><a href="#" class="text-dark">GIÁO VIÊN</a></li>
        <li class="d-inline"><a href="{{route('admin-students')}}" class="text-dark">HỌC SINH</a></li>

    </ul>
    </div> 
    <div class="row">
   
  <img src="{{asset('assets/images/avt-user-test.png')}}" alt="user" class="avt-user">
    </div>
  </nav>
@endsection
@section('main')
<main class=" container wow animate__rubberBand animate__animated animate__backInRight" >

  <div class="d-flex justify-content-between align-items-center mt-3">
    <a href="" class="text-dark"><h4>QUẢN LÝ GIẢNG VIÊN</h4></a>
 <a href="{{route('admin-add-teacher')}}"><i class="fas fa-user-plus" style="font-size: 22px; color:blue"></i></a>
  </div>

<div class="container-fluild">
  <div class="row">
    @forelse($dsTeacher as $tc)
         
            @if($tc->account_type_id==2)
            <div class="col-3">

            <div class="teacher-box text-center position-relative wow bounceIn">
              <img src="{{URL::to('/')}}/images/avatar\{{$tc->avatar}}" alt=""  class="avt-teacher">
                {{-- <p>{{$tc->id}}</p> --}}
                <span class="icon-hidden ">
              <a href="{{route('admin-update-teacher',['id' => $tc->id])}}">   <i class="fas fa-cog position-absolute pos-cog "></i></a>
             
                  <a href="{{route('admin-delete-teacher',['id' => $tc->id])}}"><i class="fas fa-trash position-absolute   pos-trash"></i></a>
                </span>
                <div class="info-hidden wow bounceIn">
                  <p>Code: {{$tc->code}}</p>
                  <p>Username:{{$tc->username}}</p>
                  <p>{{$tc->name}}</p>
                  <p>{{$tc->email}}</p>
                </div> 

            </div>
          </div>
          @endif
          @empty
    @endforelse

  </div>

</div>

 
 
 

</div>


    
  </main>
@endsection