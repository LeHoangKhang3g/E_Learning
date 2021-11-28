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
   
  <img src="{{asset('assets/images/avt-user-test.png')}}" alt="user" class="avt-user">
    </div>
  </nav>
@endsection
@section('main')
<main >
  

    <div class="courses container row-courses">
 
      <div class="content-courses">
        <div class="box-shadow">
       <div class="position-relative">
        <img  class="img-courses" src="{{asset('assets/images/course-1.jpg')}}" alt="" >
        <div class="position-avt">
  <img src="{{asset('assets/images/avt-user-test.png')}}" alt=""  class="avt-user"> 
        </div>

       </div>
          <h3 class="mt-5 text-start">Tư duy kỹ năng lập trình</h3>
          <p class=" text-start">Giáo viên: Trần Thanh Tuấn</p>
          <p class="text-start">There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
              by injected humo ur,There are many but the mri have suffered alteration in some</p>
              <hr>
              <div class="d-flex justify-content-between align-items-center">
                <div class="deadline-student">
                    <p class=" text-start">Đến hạn Thứ Hai</p>
                    <p class="text-truncate">Thời gian nộp bài bla bla bla</p>
                </div>
                <div class=" bd-highlight">
                  <i class="far fa-id-badge"></i>
                  <i class="far fa-folder"></i>

                </div>
              </div>
            
          </div>
    </div>
    



    </div>
    
  </main>
@endsection