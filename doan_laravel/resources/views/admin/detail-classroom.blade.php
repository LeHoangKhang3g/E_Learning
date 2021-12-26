{{-- {{$classroom->code}}
{{$infoTeacher->name}} --}}
@extends('layouts.app')
<body style="background-color: rgba(0, 0, 0, 0.7);position: relative;">
    <div class="container mt-5 position-absolute top-50 start-50 translate-middle" style="background-color: white;border-radius:20px;padding:20px">
        <div class="row d-flex text-center">
            <h1>{{$classroom->class_name}}</h1>
        </div>
        <div class="row text-center">
            <div class="col-6">
                {{-- <div class="bg-01">
                    <span><img src="{{asset('images/teachers/avatar/'.$infoTeacher->avatar)}}" alt=""style="width:80px;height:70px;border-radius: 100%"></span>
                    <span>{{$infoTeacher->name}}
                      
                    </span>
               
                </div> --}}
                <div class="row " style="margin:auto">
                    <div class="col 6 text-end "><img src="{{asset('images/teachers/avatar/'.$infoTeacher->avatar)}}" alt=""style="width:80px;height:70px;border-radius: 100%"></div>
                    <div class="col 6 text-start bg-01">
                        <p style="margin-bottom:0px;margin-top:10px"><b>{{$infoTeacher->name}}</b></p>
                        <p>Teacher</p>
                    </div>
                </div>
             <div class="row text-start" style="padding-left: 100px">
                <div class="row mt-3">
                    <div class="col-12">
                        <p>CODE: {{$classroom->code}}</p>
                    </div>
                  
                </div>
                <div class="row ">
                    <div class="col-12 ">
                        <p >Ngày tạo: {{$classroom->created_at}}</p>
                    </div>
                  
                </div>
                <div class="row " >
                    <div class="col-12">
                        <p><strong>{{$classroom->content}}</strong></p>
                    </div>
                </div>
                <p><h3>Thống kê</h3></p>
                <div class="row" style="flex-wrap: nowrap">
                    <div class="col-4  p-1 text-center">
                        <div class="bg-01 p-3" style="border-radius: 20px">
                            <i class="fas fa-users" style="font-size: 20px;color:green"></i>
                            <p class="mt-2"><b>99 <p><small>Students</small></p></b></p>
                        </div>
                    </div>
                    <div class="col-4  p-1 text-center">
                        <div class="bg-01 p-3" style="border-radius: 20px">
                            <i class="fas fa-comment-alt" style="font-size: 20px;color:rgb(126, 126, 10)"></i>
                            <p class="mt-2"><b>99 <p><small>Comments</small></p></b></p>
                        </div>
                    </div>
                    <div class="col-4 p-1 text-center">
                        <div class="bg-01 p-3"  style="border-radius: 20px">
                            <i class="fas fa-clipboard" style="font-size: 20px;color:rgb(31, 11, 85)"></i>
                            <p class="mt-2"><b>99 <p><small>Posts</small></p></b></p>
                        </div>
                    </div>
                </div>
             </div>
            </div>
            <div class="col-6">
                <div>
                  
<video width="400" controls>
    <source src="mov_bbb.mp4" type="video/mp4">
    <source src="mov_bbb.ogg" type="video/ogg">
    Your browser does not support HTML video.
  </video>
                </div>
            </div>
        </div>
        </div>
</body>
