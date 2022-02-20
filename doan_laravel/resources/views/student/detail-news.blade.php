@extends('layouts.app')
<style>

.news{
        min-height: 50px;
        position: relative;
        border-radius: 7px;
        border: 1px solid rgb(189, 188, 188);
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .avt-cir{
        width: 45px;
        height: 45px;
        border-radius: 100%;
    }
    .content-news{
        padding-left: 15px;
        padding-right: 8px;
    }
    .new-exercise
    {
      padding:40px 10px 0px 10px;
      border-radius: 7px;
    }
    .icon-exercise{
        font-size: 40px;
        color: blue;
        opacity: 0.6;
    }
    .score{
        padding-left: 72px;
        padding-right: 10px;
        font-weight: 600;
        margin-top: -20px;
    }
    .box-submit{
        min-height: 100px;
        background-color: white;
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%);
        margin-top: 40px;
        border-radius: 10px;
        padding: 10px;
    }
    .pl-8{
        padding-left: 80px;
    }
    .link-drive{
        min-height: 60px;
        border: 1px solid #ddd;
    }
    .img-icon-drive{
        max-width: 100%;
        max-height: 100%;
    }
    </style>
    {{-- @if($postId==1)
    <h1>
        hashashbas
    </h1>
    @else  --}}
@if($postId->post_type_id==3)
<div class="container">
   <div class="row">
       <div class="col-9">
        <div class="new-exercise">
            <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <i class="fa-solid fa-address-card icon-exercise"></i>
                </div>
                <div class="p-2 bd-highlight">
                    <p style="margin-bottom: 0px;color:rgb(50, 50, 247);font-size:30px">{{$postId->title}}</p>
                 <small style="color: #878181; ">{{$postId->created_at}}</small>
                </div>
                <div class="ms-auto p-2 bd-highlight ">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
              </div>
          
          </div>
          <div class="score">
            <div class="d-flex bd-highlight mb-3">
                <div class="me-auto p-2 bd-highlight">100 điểm</div>
                <div class="p-2 bd-highlight">Đến hạn:  {{$postId->deadline!=null?$postId->deadline:"Không có thời hạn"}}</div>
             
              </div>
          </div>
          <div style="padding-left: 80px;padding-right:20px; color:blue">
            <hr>
          </div>
          <p class="pl-8">{{$postId->content}}
        </p>
        <div class="pl-8" style="padding-right:20px;">
            <hr>
        </div>
        <div class="pl-8" style="padding-right:20px;">
            <div class="row row-cols-2">
              <div class="col">
                 
                <div class="link-drive">
                   
                        <div class="row">
                            <div class="col-4">
                                <img
                                 src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Google_Drive_icon_%282020%29.svg/800px-Google_Drive_icon_%282020%29.svg.png" 
                                 alt="" class="img-icon-drive">
                            </div>
                            <div class="col-8">
                               
                                <a href="https://docs.google.com/spreadsheets/d/1zjqbAyJCGqb2B9rv2wN97UJfAWKhNA5F/edit?usp=drive_web&ouid=107170591971912121884&rtpof=true">
                                    My Drive
                                    </a>
                            </div>
                        </div>
                </div>
              </div>
              <div class="col">Column</div>
              <div class="col">Column</div>
              <div class="col">Column</div>
            </div>
          </div>
       </div>
       <div class="col-3">
           <div class="box-submit">
            <div class="d-flex bd-highlight mb-3 ">
                <div class="me-auto p-2 bd-highlight" style="font-size:25px">Bài tập của bạn</div>
                <div class="p-2 bd-highlight text-center mt-2">Đã nộp</div>
             
              </div>
              <p class="text-center">tep dinh kem</p>
              <button type="button" class="btn btn-light w-100" style="border: 1px solid #ddd;color:rgb(189, 47, 47)">Hủy nộp bài</button>

           </div>
       </div>
   </div>
</div>
@endif
@if($postId->post_type_id==2)
<div class="container">
    <div class="row">
        <div class="col-12">
         <div class="new-exercise">
             <div class="d-flex bd-highlight mb-3">
                 <div class="p-2 bd-highlight">
                     <i class="fa-solid fa-address-card icon-exercise"></i>
                 </div>
                 <div class="p-2 bd-highlight">
                     <p style="margin-bottom: 0px;color:rgb(50, 50, 247);font-size:30px">{{$postId->title}}</p>
                  <small style="color: #878181; ">{{$postId->created_at}}</small>
                 </div>
                 <div class="ms-auto p-2 bd-highlight ">
                     <i class="fa-solid fa-ellipsis-vertical"></i>
                 </div>
               </div>
           
           </div>
           <div class="score">
             <div class="d-flex bd-highlight mb-3">
                 <div class="me-auto p-2 bd-highlight">100 điểm</div>
                 <div class="p-2 bd-highlight">Đến hạn:  {{$postId->deadline!=null?$postId->deadline:"Không có thời hạn"}}</div>
              
               </div>
           </div>
           <div style="padding-left: 80px;padding-right:20px; color:blue">
             <hr>
           </div>
           <p class="pl-8">{{$postId->content}}
         </p>
         <div class="pl-8" style="padding-right:20px;">
             <hr>
         </div>
         <div class="pl-8" style="padding-right:20px;">
             <div class="row row-cols-2">
               <div class="col">
                  
                 <div class="link-drive">
                    
                         <div class="row">
                             <div class="col-4">
                                 <img
                                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Google_Drive_icon_%282020%29.svg/800px-Google_Drive_icon_%282020%29.svg.png" 
                                  alt="" class="img-icon-drive">
                             </div>
                             <div class="col-8">
                                
                                 <a href="https://docs.google.com/spreadsheets/d/1zjqbAyJCGqb2B9rv2wN97UJfAWKhNA5F/edit?usp=drive_web&ouid=107170591971912121884&rtpof=true">
                                     My Drive
                                     </a>
                             </div>
                         </div>
                 </div>
               </div>
               <div class="col">Column</div>
               <div class="col">Column</div>
               <div class="col">Column</div>
             </div>
           </div>
        </div>
    
    </div>
 </div>
@endif

{{-- @endif --}}