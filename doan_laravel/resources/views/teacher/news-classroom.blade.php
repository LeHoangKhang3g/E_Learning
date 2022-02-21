@extends('layouts.app')

      <style>

          .box{
              min-height: 50px;
              position: relative;
              border-radius: 7px;
              border: 1px solid rgb(189, 188, 188);
          }
          .content-course{
              position: absolute;
              top:60%;
              left: 5%;
          }
          .bg-main{
            background-image: url("https://gstatic.com/classroom/themes/img_learnlanguage.jpg");
            max-height: 500px;
            height: 300px;
          }
          .name-course{
              font-size: 30px;
              color: white;
              font-weight: 600;
          }
          .time-course{
              font-size: 25px;
              color: white;
          }
          .input-content{
  float: right;
  min-height: 130px;
  margin-top: 5px;
  text-align: left;
  text-indent: 18px;
  font-size: 12.6pt;
  border-radius: 5px;
  border: solid 1.5px #D3D3D3;
  -webkit-transition: 1s; /* Safari */
  transition: 1s;
  box-shadow: 0 0 2pt 1pt #D3D3D3;
padding-left: 20px;
          }

          input[type=text]:hover{
  box-shadow: 0 0 5pt 0.5pt #D3D3D3;
}
input[type=text]:focus {
  box-shadow: 0 0 7pt 4pt #D3D3D3;
  outline-width: 0px;
}
.icon-homework{
    background-color: rgb(90, 90, 228);
    padding: 15px;
    border-radius: 100%;
}
.new-homework{
  padding-top: 20px;
  padding-bottom: 10px;
  padding-right: 20px;
}
.fa-file-word{
    color: white;
    font-size: 22px;
}


.floating-label {
  position: absolute;
  pointer-events: none;
  left: 20px;
  top: 18px;
  transition: 0.2s ease all;
}
#upload {
    display: inline-block;
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 50px;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
}
.button-wrapper span.label {
  position: relative;
  z-index: 0;
  display: inline-block;
  width: 10%;
  background: #00bfff;
  cursor: pointer;
  color: #fff;
  padding: 10px 5px;
  text-transform:uppercase;
  font-size:12px;

}
.button-wrapper{
    margin-top: 10px;
  margin-bottom: 5px;
}
#submit-news{
   width: 80px;
    background-color: green;
    color: white;
    padding-top: 5px;
 
}
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
            border: 1px solid rgb(189, 188, 188);
            padding:10px 10px 0px 10px;
            border-radius: 7px;
          }
          .sel-op-post-type{
            position: absolute;
            top: 13%;
            right: 25%;
            
          }
          .dat-pic-post-type{
            position: absolute;
            top: 13%;
            right: 1%;
            
          }
          .input-title-news{
            position: absolute;
            top: 15%;
            right: 43%;
          }
      </style>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="box bg-main">
                    <div class="content-course">
                        <p class="name-course">
                         {{ $classrooms->class_name}}
                            </p>
                        <p class="time-course"> Ngày tạo: {{ $classrooms->created_at}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mx-1">
    
    
            <div class="col-12 ">
              
              <form action="{{route('post-add-news',['id'=> $classrooms->id])}}" method="POST">
                @csrf
                <div class="row position-relative" style="padding: 12px"> 
                    <input type="text" class="w-100 input-content" name="content" required>
                    <span class="floating-label" >Nhập thông báo của bạn</span>
                  
                    <div class="button-wrapper" style="position: absolute; top: 62%;left: 2%; max-width:930px">
                        <span class="label">
                          Upload File
                        </span>
                        
                          <input type="file" name="upload" id="upload" class="upload-box" placeholder="Upload File">
                        
                      </div> 

             
                      <button type="submit" style="position: absolute; top: 62%;right: 2%;" id="submit-news" >Gửi</button> 
                      <input type="text" class="input-title-news" placeholder="Tiêu đề" style="width:350px" name="title" required>
                      <select name="post_type" class="form-select sel-op-post-type" aria-label="Default select example" style="width: 200px">
                        @foreach ($dsPostType as $ds)
                        <option value="{{$ds->id}}">{{$ds->name}}</option>
 
                        @endforeach
                      </select>
          
            <div class="dat-pic-post-type " style="width: 300px">
                     
                        <div class="input-group date" id="datepicker">
                          <span for="date" class=" col-form-label">Deadline</span>
                            <input type="text" class="form-control" style="margin-left: 10px" name="deadline">
                            <span class="input-group-append">
                            <span class="input-group-text bg-white d-block">
                              <i class="fa-solid fa-calendar-check"></i>
                            </span>
                            </span>
                        </div>
                    </div>   
                </div>
              </form>
              @forelse($posts as $p)
             {{-- neu la thong bao --}}
              @if($p->post_type_id==1)
                
                  <div class="news">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                          <i class="fa-solid fa-bell avt-cir" style="color: rgb(186, 186, 36)"></i>
                            {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOA3r2mm7ICMaQkI3k2j78aJF2t6Dfkl3D0w&usqp=CAU" alt=""
                            class="avt-cir"> --}}
                        </div>
                        <div class="p-2 bd-highlight">
                            <p style="margin-bottom: 0px"><b>Thông báo:</b> {{$p->title}}  </p>
                         <small style="color: #878181; ">Thời hạn: {{$p->deadline==null?"Không có":$p->deadline}}</small>
                        </div>
                        <div class="ms-auto p-2 bd-highlight">
                            <a href="#">
                              <i class="fa-solid fa-ellipsis-vertical"></i>
                            </a>

                        </div>
                      </div>
                      <div class="content-news">
                          <p>
                            {{$p->content}} 
                          </p>
                      </div>
                      <hr>
                      {{-- @foreach($infoAccount as $i)
                        <div style="padding-left:30px">

                          <div class="d-flex bd-highlight mb-3" >
                            <div class="p-2 bd-highlight">
                              <img src="{{URL::to('/')}}/images/teacher/avatar\{{$i->avatar}}" class="avt-cir" style="width: 35px;height:35px">

                            </div>
                            <div class=" bd-highlight">
                                <p style="margin-bottom: 0px; font-size:13px;margin-top:5px"><b>{{$i->name}} </p>
                             
         
                        
                        
        
                          </div>
                        </div>
                      @endforeach --}}
                      @foreach(App\Models\Comment::where("post_id","$p->id")->get() as $cmt)  
      

                
               
                      <span class="d-flex">{{$cmt->content}} </span>
                      @endforeach
         
              <hr>
            
             <form method="POST" action="{{route('teacher-add-comments',['post_id'=> $p->id])}}" >
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Thêm nhận xét của bạn" 
                aria-label="Recipient's username" aria-describedby="basic-addon2" name="content">
                <span class="input-group-text" id="basic-addon2">
                  <button type="submit" style="border: none">
                    <i class="fa-solid fa-paper-plane"></i>
                  </button>
                </span>
              </div>
             </form>
                  </div>
             
              
              @endif
              {{-- neu la bai giang --}}
              @if($p->post_type_id==2)
              <a href="{{route('detailNewExercise',['id' => $p->id])}}">
             
               <div class="new-exercise">
                 <div class="d-flex bd-highlight mb-3">
                     <div class="p-2 bd-highlight">
                      <i class="fa-solid fa-address-book avt-cir" style="color: green"></i>
                     </div>
                     <div class="p-2 bd-highlight">
                         <p style="margin-bottom: 0px"><b>Bài giảng: {{$p->title}} </b></p>
                         <small style="color: #878181; ">Thời hạn: {{$p->deadline==null?"Không có":$p->deadline}}</small>
                     </div>
                     <div class="ms-auto p-2 bd-highlight">
                      <a href="#">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                      </a>
                     </div>
                     
                   </div>
               
               </div>
   
              </a>
              @endif
          
             {{-- neu la bai tap --}}
             @if($p->post_type_id==3)
              <a href="{{route('detailNewExercise',['id' => $p->id])}}">
              {{-- <a href="{{route('detailNewExercise',['id' => $classroom->id],['exercise_id'=>$postId->id])}}"> --}}
              <div class="new-exercise">
                <div class="d-flex bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                      <i class="fa-solid fa-address-card avt-cir" style="color: #00bfff"></i>
                    </div>
                    <div class="p-2 bd-highlight">
                        <p style="margin-bottom: 0px"><b>Bài tập: {{$p->title}} </b></p>
                        <small style="color: #878181; ">Thời hạn: {{$p->deadline==null?"Không có":$p->deadline}}</small>
                    </div>
                    <div class="ms-auto p-2 bd-highlight">
                      <a href="#">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                      </a>
                    </div>
                    
                  </div>
              
              </div>
  
             </a>
             @endif
            @empty
            <tr ><td colspan="5">Empty</td></tr>
              @endforelse
          {{-- <a href="" style="color: black">
            <div class="news">
              <div class="d-flex bd-highlight mb-3">
                  <div class="p-2 bd-highlight">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOA3r2mm7ICMaQkI3k2j78aJF2t6Dfkl3D0w&usqp=CAU" alt=""
                      class="avt-cir">
                  </div>
                  <div class="p-2 bd-highlight">
                      <p style="margin-bottom: 0px">Ho Khanh Duy da dang 1 thong bao</p>
                   <small style="color: #878181; ">Ho Khanh Duy</small>
                  </div>
                  <div class="ms-auto p-2 bd-highlight">
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                  </div>
                </div>
                <div class="content-news">
                    <p>
      
                      Do hiện tại học online nên có những trục trặc về kỹ thuật, khiến một số bạn không tham gia được bài kiểm tra giữa kỳ vừa rồi, hoặc có thể các bạn có tham gia nhưng kết quả không tốt. Do đó, bên cạnh bài kiểm tra cuối kỳ, chúng ta sẽ có 1 bài kiểm tra bổ sung nữa để gỡ điểm, nên các bạn cứ yên tâm sẽ vẫn còn cơ hội kiểm tra lại. Tuy nhiên, không vì thế mà các bạn lơ là việc học và việc kiểm tra, vì cơ hội không có nhiều lần để các bạn sửa sai mãi.
                    </p>
                </div>
            </div>
          </a>
           <a href="{{route('detailNewExercise',['id' => $classroom->id])}}">
            
            <div class="new-exercise">
              <div class="d-flex bd-highlight mb-3">
                  <div class="p-2 bd-highlight">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOA3r2mm7ICMaQkI3k2j78aJF2t6Dfkl3D0w&usqp=CAU" alt=""
                      class="avt-cir">
                  </div>
                  <div class="p-2 bd-highlight">
                      <p style="margin-bottom: 0px">Ho Khanh Duy da dang 1 bai tap moi</p>
                   <small style="color: #878181; ">Ho Khanh Duy</small>
                  </div>
                  <div class="ms-auto p-2 bd-highlight">
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                  </div>
                </div>
            
            </div>

           </a> --}}
               {{-- <div class="row mt-4">
                <div class="box w-100  new-homework">
                    <div class="d-flex">
                        <div class="p-2 d-flex">
                 <div class="col-3">
                    <span class="icon-homework">
                        <i class="fal fa-file-word "></i>

                      </span>
                 </div>
                 <div class="col-9" style="margin-top: -13px; min-width: 500px;margin-left: -70px;">
                     <span class="d-flex"><b>Quang Vinh đẹp trai</b> </span>
                  <small>12/12/120120</small>
                 </div>
                   
                        </div>
                     
                        <div class="ml-auto p-2">
                           <a href="#">
                            <i class="fas fa-ellipsis-v"></i>
                           </a>
                        </div>
                      </div>
                      
                  </div>
           
               </div> --}}
            
               <!-- <div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight">
                  <span><b>Vinh đẹp trai top 1 19pmc</b></span>
                  <span><small>ashjiashuiaawsbhji</small></span>
                  <p>Thầy ơi hôm nay ngày 30/9/2021 cho em xin nghỉ một buổi em đi tiêm ngừa nha thầy
                  </p>
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <a href="#">
                    <i class="fas fa-ellipsis-v"></i>
                   </a>
                </div>
              </div> -->
            </div>


        </div>
    </div>
