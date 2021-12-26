@extends('layouts.app')

@section('navbar')
<nav class="d-flex justify-content-between container-fluid sticky-top align-items-center " id="navbar" >
    <div class="nav-left">
      <img src="{{asset('assets/images/cap.png')}}" alt="cap-education" class="logo-cap">
      <a href="#" class="gradient">E-Learning CKC</a>
    </div>
     <div class="row nav-option">
      <ul class="list-unstyled">
        <li class="d-inline"><a href="#">HOME</a></li>
   
        <li class="d-inline "><a href="#">COURSES</a></li>
        <li class="d-inline"><a href="#">ABOUT</a></li>
        <li class="d-inline"><a href="#">CONTACT</a></li>
        
    </ul>
    </div> 
    <div class="row">
   
      @include('partial.account-option',['accountInfo' => $accountInfo])
    </div>
  </nav>
@endsection
@section('main')
<main class=" container wow animate__rubberBand animate__animated animate__backInRight" >

  <div class="d-flex justify-content-between align-items-center mt-3 ">
    <a href="" class="text-dark"><h4>LỚP HỌC</h4></a>
    <a href="{{route('teacher-add-classroom')}}" class="btn btn-success"><i class="fas fa-user-plus" style="font-size: 22px; color:white"></i></a>

  </div>
  <div class="container-fluild">
  <div class="row">
    @forelse($dsClassroom as $classroom)
         
            
            <div class="col-3">

            <div class="classroom-box text-center position-relative wow bounceIn">
              <img src="{{URL::to('/')}}/images/classrooms/background/{{$classroom->background}}" alt=""  class="avatar-circle">

                <p><b style="font-size: 20px">{{$classroom->class_name}}</b></p>
                <span class="icon-hidden ">
            
                </span>
                <a href="{{route('teacher-students-wait',['id'=>$classroom->id])}}" style="color: rgb(0, 0, 0);font-size:20px">Phê duyệt sinh viên</a>

                <div class="info-hidden wow bounceIn">
                    <div class="delay">
                      <p>Code: {{$classroom->code}}</p>
                      <p class="content-classroom">{{$classroom->content}}</p>
                      <div class="pos-icon-bot d-flex">
                        <a href="{{route('teacher-update-classroom',['id' => $classroom->id])}}" >   <i class="fas fa-cog  btn btn-success" ></i></a>
                        <a href="{{route('teacher-delete-classroom',['id' => $classroom->id])}}" > <i class="fas fa-trash btn btn-danger"></i></a>
                      </div>
                    </div>
                </div> 

            </div>
            
          </div>
        
          @empty
    @endforelse

  </div>

</div>

</div> 
  </main>
@endsection