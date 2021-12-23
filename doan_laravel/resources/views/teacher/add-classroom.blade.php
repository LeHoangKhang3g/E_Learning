@extends('layouts.app')



      <img src="{{asset('assets/images/bg.jpg')}}" alt="" class="add-bg position-relative">

<div class="container position-absolute top-50 start-50 translate-middle">
 <div class="row" style="margin-bottom: 20px">
   <div class="col-11 text-center">
    <p class="gradient">ADMIN - ADD CLASSROOM</p>
   </div>
 </div>
  <form method="POST" action="{{route('teacher-post-add-classroom')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-4 text-end">
        <img src="{{asset('assets/images/bg2.jpg')}}" alt="" style="width: 100%;height:100%;opacity:0.7;border-radius:20px">
      </div>
      <div class="col-8 " style="padding-left: 60px">
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Mã số:</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="code" value="{{$code}}" required class="input-add-teacher" readonly>
          </div>
        </div>
        <div class="row  mb-4">
          <div class="col-2 ">
            <p class="field-add-teacher">Tên lớp học:</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="class_name" required class="input-add-teacher">
          </div>

        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Nội dung:</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="content" required class="input-add-teacher">
          </div>

        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Bảng điểm</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="point_table" required class="input-add-teacher">
          </div>
       

        </div>
      
        
        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Hình nền:</p>
            
          </div>
          <div class="col-10">
           
          <input type="file" name="background" required style="margin-top: 15px">
          </div>

        </div>
        <div class="row">
          <div class="col-6 text-center">
            <button type="submit" class="btn btn-add-teacher" >ADD</button>
          </div>
        </div>
      </div>
  </form>
</div>

</div>
