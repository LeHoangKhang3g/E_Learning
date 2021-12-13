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
<main class="p-5 container-fluid mt-3" >
<div class="row ">
  
  <div class=" col-custom-3 mb-5 bg-course-student mx-2" >
    <div class="card h-90 border-0 " >
    <div class="position-relative">
      <img  src="{{asset('assets/images/course-1.jpg')}}" class="card-img-top" alt="...">
      <div class="position-avt">
        <img src="{{asset('assets/images/avt-user-test.png')}}" alt=""  class="avt-user"> 
         </div>
    </div>
      <div class="card-body bg-none">
        <p ><h5 class="  text-truncate">Tư duy kỹ năng lập trìnhssssssssss</h5></p>
        {{-- <h5 class="card-title  text-truncate " style="width: 300px"><b><i>Tư duy kỹ năng lập trìnhssssssssss</i></b></h5> --}}
        <p class="text-center"><strong>Giáo viên: Trần Thanh Tuấn</strong></p>
        <p class="card-text  intro-course "><small>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
          by injected humo ur,There are many but the mri have suffered alteration in some</small></p>
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
          <a href="#" class="btn btn-primary w-100">Vào học</a>
      </div>
    </div>
  </div>
  <div class=" col-custom-3 mb-5 bg-course-student mx-2" >
    <div class="card h-90 border-0 " >
    <div class="position-relative">
      <img  src="{{asset('assets/images/course-1.jpg')}}" class="card-img-top" alt="...">
      <div class="position-avt">
        <img src="{{asset('assets/images/avt-user-test.png')}}" alt=""  class="avt-user"> 
         </div>
    </div>
      <div class="card-body bg-none">
        <p ><h5 class="  text-truncate">Tư duy kỹ năng lập trìnhssssssssss</h5></p>
        {{-- <h5 class="card-title  text-truncate " style="width: 300px"><b><i>Tư duy kỹ năng lập trìnhssssssssss</i></b></h5> --}}
        <p class="text-center"><strong>Giáo viên: Trần Thanh Tuấn</strong></p>
        <p class="card-text  intro-course "><small>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
          by injected humo ur,There are many but the mri have suffered alteration in some</small></p>
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
          <a href="#" class="btn btn-primary w-100">Vào học</a>
      </div>
    </div>
  </div>
  <div class=" col-custom-3 mb-5 bg-course-student mx-2" >
    <div class="card h-90 border-0 " >
    <div class="position-relative">
      <img  src="{{asset('assets/images/course-1.jpg')}}" class="card-img-top" alt="...">
      <div class="position-avt">
        <img src="{{asset('assets/images/avt-user-test.png')}}" alt=""  class="avt-user"> 
         </div>
    </div>
      <div class="card-body bg-none">
        <p ><h5 class="  text-truncate">Tư duy kỹ năng lập trìnhssssssssss</h5></p>
        {{-- <h5 class="card-title  text-truncate " style="width: 300px"><b><i>Tư duy kỹ năng lập trìnhssssssssss</i></b></h5> --}}
        <p class="text-center"><strong>Giáo viên: Trần Thanh Tuấn</strong></p>
        <p class="card-text  intro-course "><small>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
          by injected humo ur,There are many but the mri have suffered alteration in some</small></p>
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
          <a href="#" class="btn btn-primary w-100">Vào học</a>
      </div>
    </div>
  </div>
  <div class=" col-custom-3 mb-5 bg-course-student mx-2" >
    <div class="card h-90 border-0 " >
    <div class="position-relative">
      <img  src="{{asset('assets/images/course-1.jpg')}}" class="card-img-top" alt="...">
      <div class="position-avt">
        <img src="{{asset('assets/images/avt-user-test.png')}}" alt=""  class="avt-user"> 
         </div>
    </div>
      <div class="card-body bg-none">
        <p ><h5 class="  text-truncate">Tư duy kỹ năng lập trìnhssssssssss</h5></p>
        {{-- <h5 class="card-title  text-truncate " style="width: 300px"><b><i>Tư duy kỹ năng lập trìnhssssssssss</i></b></h5> --}}
        <p class="text-center"><strong>Giáo viên: Trần Thanh Tuấn</strong></p>
        <p class="card-text  intro-course "><small>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
          by injected humo ur,There are many but the mri have suffered alteration in some</small></p>
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
          <a href="#" class="btn btn-primary w-100">Vào học</a>
      </div>
    </div>
  </div>
  <div class=" col-custom-3 mb-5 bg-course-student mx-2" >
    <div class="card h-90 border-0 " >
    <div class="position-relative">
      <img  src="{{asset('assets/images/course-1.jpg')}}" class="card-img-top" alt="...">
      <div class="position-avt">
        <img src="{{asset('assets/images/avt-user-test.png')}}" alt=""  class="avt-user"> 
         </div>
    </div>
      <div class="card-body bg-none">
        <p ><h5 class="  text-truncate">Tư duy kỹ năng lập trìnhssssssssss</h5></p>
        {{-- <h5 class="card-title  text-truncate " style="width: 300px"><b><i>Tư duy kỹ năng lập trìnhssssssssss</i></b></h5> --}}
        <p class="text-center"><strong>Giáo viên: Trần Thanh Tuấn</strong></p>
        <p class="card-text  intro-course "><small>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
          by injected humo ur,There are many but the mri have suffered alteration in some</small></p>
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
          <a href="#" class="btn btn-primary w-100">Vào học</a>
      </div>
    </div>
  </div>
  <div class=" col-custom-3 mb-5 bg-course-student mx-2" >
    <div class="card h-90 border-0 " >
    <div class="position-relative">
      <img  src="{{asset('assets/images/course-2.jpg')}}" class="card-img-top" alt="...">
      <div class="position-avt">
        <img src="{{asset('assets/images/avt-user-test.png')}}" alt=""  class="avt-user"> 
         </div>
    </div>
      <div class="card-body bg-none">
        <p ><h5 class="  text-truncate">Tư duy kỹ năng lập trìnhssssssssss</h5></p>
        {{-- <h5 class="card-title  text-truncate " style="width: 300px"><b><i>Tư duy kỹ năng lập trìnhssssssssss</i></b></h5> --}}
        <p class="text-center"><strong>Giáo viên: Trần Thanh Tuấn</strong></p>
        <p class="card-text  intro-course "><small>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
          by injected humo ur,There are many but the mri have suffered alteration in some</small></p>
       <hr style="margin: 0px">
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
          <a href="#" class="btn btn-primary w-100">Vào học</a>
      </div>
    </div>
  </div>
 
 

</div>





  
 {{--    <div class="courses container row-courses ">
 
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

    </div> --}}
    
  </main>
@endsection