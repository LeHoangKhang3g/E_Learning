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

  <div class="d-flex justify-content-between align-items-center mt-3 ">
    <a href="" class="text-dark"><h4>QUẢN LÝ LỚP HỌC</h4></a>
   

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
                <div class="info-hidden wow bounceIn">
                    <div class="delay">
                      <p>Code: {{$classroom->code}}</p>
                      <p class="content-classroom">{{$classroom->content}}</p>
                    
                        <a href="{{route('admin-detail-classrooms',['id' => $classroom->id])}}" > <i class="fa fa-list-ul  btn btn-success" ></i></a>
                        
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