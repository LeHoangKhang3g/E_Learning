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
        <li class="d-inline"><a href="#">TEACHERS</a></li>
        <li class="d-inline"><a href="#">COURSES</a></li>
        <li class="d-inline"><a href="#">ABOUT</a></li>
        <li class="d-inline"><a href="#">CONTACT</a></li>
        
    </ul>
    </div>
    <div class="row">
      <ul class="list-unstyled d-flex">
       <li>
         <a href="{{route('login')}}">sign in</a>
        </li> 
        {{-- <li>
          <a href="{{route('dang-ky')}}">sign up</a>
        </li> --}}
      </ul>
      {{-- khi dang nhap vao thi hien avt --}}
      {{-- <img src="{{asset('assets/images/avt-user-test.png')}}" alt="user" class="avt-user"> --}}
    </div>
  </nav>
@endsection

@section('main')
<main >
    <div class="owl-carousel owl-theme">
      <div class="item position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
        <div class="owl-content1">
          <h1 class="wow bounceInUp" >
            Education Needs
            Complete Solution
          </h1>

          <hr class="text-light ">
          <p class="wow bounceOutRight text-light">
            There are many variations of passages of Lorem Ipsum available, but the majority have
          suffered alteration in some form, by injected humour, or randomised words which
          don't look even slightly believable.
          </p>
          <button class="btn btn-success">VIEW COURESES</button>

        </div>
        </div>
        <img src="{{asset('assets/images/slide-1.jpg')}}" alt="" class="slider">
      </div>
      <div class="item">
        <div class="position-absolute top-50 start-0 translate-middle-y">
          <div class="owl-content2">
            <h1 class="text-primary">
              Education Needs
              Complete Solution
            </h1>
            <hr>
            <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority have
          suffered alteration in some form, by injected humour, or randomised words which
          don't look even slightly believable.
            </p>
            <button class="btn btn-success">VIEW COURESES</button>

          </div>
          </div>
        <img src="{{asset('assets/images/slide-2.jfif')}}" alt="" class="slider">
        
      </div>
      <div class="item">
        <div class="position-absolute top-50 end-0 translate-middle-y">
          <div class="owl-content3">
            <h1 class="text-light ">
              Education Needs
              Complete Solution
            </h1>
            <hr class="text-light ">
            <p   class="text-light ">
                    There are many variations of passages of Lorem Ipsum available, but the majority have
        suffered alteration in some form, by injected humour, or randomised words which
        don't look even slightly believable.
            </p>
            <button class="btn btn-success">VIEW COURESES</button>
          </div>
          </div>
        <img src="{{asset('assets/images/slide-3.jfif')}}" alt="" class="slider">
      </div>
    </div>
    <div class="col-12-md mb-5 d-flex justify-content-center">
      <div class="section-title-wrapper">
        <div class="section-title">
            <h3>POPULAR COURSES</h3>
            <p>There are many variations of passages of Lorem Ipsum</p>
            <hr class="hr-cap">
        </div>
    </div>
    </div>
    <div class="courses container row-courses">
 
      <div class="content-courses">
        <div class="box-shadow">
          <img  class="img-courses" src="{{asset('assets/images/course-1.jpg')}}" alt="">
          <h3 class="mt-4">Tư duy kỹ năng lập trình</h3>
          <p>Giáo viên: Trần Thanh Tuấn</p>
          <p class="text-start">There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
              by injected humo ur,There are many but the mri have suffered alteration in some</p>
              <hr>
              <div class="d-flex justify-content-between">
                <div class="p-2  bd-highlight">
                  <i class="fas fa-users"></i>
                  <span>87</span>
                </div>
                <div class="p-2 bd-highlight">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star-half-alt text-warning"></i>
                </div>
              </div>
          </div>
    </div>
    
    <div class="content-courses wow tada">
      <div class="box-shadow">
        <img  class="img-courses" src="{{asset('assets/images/slide-1.jpg')}}" alt="">
        <h3 class="mt-4">Tư duy kỹ năng lập trình</h3>
        <p>Giáo viên: Trần Thanh Tuấn</p>
        <p class="text-start">There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
            by injected humo ur,There are many but the mri have suffered alteration in some</p>
            <hr>
            <div class="d-flex justify-content-between">
              <div class="p-2  bd-highlight">
                <i class="fas fa-users"></i>
                <span>87</span>
              </div>
              <div class="p-2 bd-highlight">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i>
              </div>
            </div>
        </div>
  </div>
  <div class="content-courses  ">
    <div class="box-shadow">
      <img  class="img-courses" src="{{asset('assets/images/course-1.jpg')}}" alt="">
      <h3 class="mt-4">Tư duy kỹ năng lập trình</h3>
      <p>Giáo viên: Trần Thanh Tuấn</p>
      <p class="text-start">There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, 
          by injected humo ur,There are many but the mri have suffered alteration in some</p>
          <hr>
          <div class="d-flex justify-content-between">
            <div class="p-2  bd-highlight">
              <i class="fas fa-users"></i>
              <span>87</span>
            </div>
            <div class="p-2 bd-highlight">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
          </div>
      </div>
</div>
    </div>
    
  </main>
@endsection