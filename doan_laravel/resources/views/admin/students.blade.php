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
        <li class="d-inline "><a href="{{route('admin-teachers')}}" class="text-dark">GIÁO VIÊN</a></li>
        <li class="d-inline active-border"><a href="{{route('admin-students')}}" class="text-dark">HỌC SINH</a></li>

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
    <a href="" class="text-dark"><h4>QUẢN LÝ SINH VIÊN</h4></a>
 <a href="{{route('admin-add-student')}}" class="btn btn-primary"><i class="fas fa-user-plus" style="font-size: 22px; color:white"></i></a>
  </div>

<div class="container-fluild">
  <div class="row">
    @forelse($students as $student)
         
            @if($student->account_type_id==3)
            <div class="col-3">

            <div class="student-box text-center position-relative wow bounceIn">
              <img src="{{URL::to('/')}}/images/students/avatar\{{$student->avatar}}" alt=""  class="avatar-circle">

                <p><b style="font-size: 20px">{{$student->name}}</b></p>
                <span class="icon-hidden ">
            
                </span>
                <div class="info-hidden wow bounceIn">
                    <div class="delay">
                      <p>Code: {{$student->code}}</p>
                      <p>Username:{{$student->username}}</p>
                     
                      <p>{{$student->email}}</p>
         
                        <a href="{{route('admin-update-student',['id' => $student->id])}}" >   <i class="fas fa-cog  btn btn-success" ></i></a>
                 
                        <a href="{{route('admin-delete-student',['id' => $student->id])}}" > <i class="fas fa-trash btn btn-danger"></i></a>
                    </div>
        
               
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