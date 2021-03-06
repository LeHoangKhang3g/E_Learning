@extends('layouts.app')

@section('navbar')
<nav class="d-flex justify-content-between container-fluid sticky-top align-items-center " id="navbar" >
    <div class="nav-left">
      <img src="{{asset('assets/images/cap.png')}}" alt="cap-education" class="logo-cap">
      <a href="#" class="gradient">E-Learning CKC</a>
    </div>
    {{-- <div class="row nav-option">
      <ul class="list-unstyled">
        <li class="d-inline"><a href="#">HOME</a></li>
        <li class="d-inline"><a href="#">TEACHERS</a></li>
        <li class="d-inline"><a href="#">COURSES</a></li>
        <li class="d-inline"><a href="#">ABOUT</a></li>
        <li class="d-inline"><a href="#">CONTACT</a></li>
        
    </ul>
    </div> --}}
    <div class="row">
   
      @include('partial.account-option',['accountInfo' => $accountInfo])
    </div>
  </nav>
@endsection
@section('main')


<main class="p-5 container-fluid mt-3" >
 
<div class="row ">
@foreach($classrooms as $p)

  
  <div class=" col-custom-3 mb-5 bg-course-student mx-2" >
    <div class="card h-90 border-0 " >
    <div class="position-relative">
      <img  src="{{asset('images/classrooms/background/'.$p->background)}}" class="card-img-top" alt="...">
   
      <div class="position-avt">
        <img src="{{asset('images/teachers/avatar/'.$teachers[$p->id]->avatar)}}" alt=""  class="avt-user"> 
         </div>
    </div>
      <div class="card-body bg-none">
        <p ><h5 class="  text-truncate">Môn học:{{$p->class_name}}</h5></p>
        {{-- <h5 class="card-title  text-truncate " style="width: 300px"><b><i>Tư duy kỹ năng lập trìnhssssssssss</i></b></h5> --}}
        <p class="text-center"><strong>Giáo viên: {{$teachers[$p->id]->name}}</strong></p>
        <p class="card-text  intro-course "><small>Nội dung:{{$p->content}} </small></p>
       <hr>
       <div class="d-flex justify-content-between align-items-center "> 
        <div class="deadline-student">
            <p class=" text-start mb-0">Đến hạn Thứ Hai</p>
            <p class="text-truncate mb-1">Thời gian nộp bài bla bla bla</p>
        </div>
        <div class=" bd-highlight">
          <i class="far fa-id-badge"></i>
          <i class="far fa-folder"></i>

        </div>
      </div>
      {{-- <a href="{{route('detailNewExercise',['id' => $p->id])}}"> --}}
          <a href="{{route('classroomNews',['id'=>$p->id])}}" class="btn btn-primary w-100" >Vào học</a>
      </div>
    </div>
  </div>

  @endforeach
</div>
    
  </main>
@endsection
<script>
  
  var msg = '{{Session::get('jsAlert')}}';
  var exist = '{{Session::has('jsAlert')}}';
  if(exist){
    alert(msg);
  }
</script>