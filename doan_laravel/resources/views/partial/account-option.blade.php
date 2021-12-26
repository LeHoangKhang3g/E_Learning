<head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>

@if($accountInfo->account_type_id==1)
{{$accountInfo->name}}
    <img src="{{URL::to('/')}}/images/admins/avatar\{{$accountInfo->avatar}}" alt="user" class="avt-user" style="margin-right: 10px" onclick="showInfoOptions();">
@elseif($accountInfo->account_type_id==2)
{{$accountInfo->name}}
    <img src="{{URL::to('/')}}/images/teachers/avatar\{{$accountInfo->avatar}}" alt="user" class="avt-user" style="margin-right: 10px" onclick="showInfoOptions();">
@elseif($accountInfo->account_type_id==3)
<div class="d-flex">
    {{-- <input   type="text" value=""placeholder="Mời bạn nhập Mã lớp" class="input-join-class">
    <button type="submit"  class="btn btn-success">JOIN</button>
     --}}
     <form action="{{route('student-post-join-classroom')}}" method="post" style="margin-right:20px;margin-top:7px"> 
        @csrf
        <div class="input-group mx-3" style="margin-bottom: 10px;margin-right:30px">
            <input class="form-control width100" name="malop" placeholder="Mời bạn nhập Mã lớp" required>
            <span class="input-group-btn">
                <button type="submit" class="btn btn-info" id="click-join" >JOIN</button>
            </span>
            
        </div>
             </form>
    <img src="{{URL::to('/')}}/images/students/avatar\{{$accountInfo->avatar}}" alt="user" style="margin-top: 0px" class="avt-user " onclick="showInfoOptions();">
</div>
@endif
<div id="info-option" class="backInUp">
    <ul class="list-unstyled">
        <li class="mb-2"><a href="#"> Thông tin tài khoản</a></li>
        <li class="mb-2"><a href="#">Quên mật khẩu</a></li>
        @if($accountInfo->account_type_id==1)
        <li><a href="{{route('admin-sign-out')}}" class="btn btn-danger">Đăng xuất</a></li>
        @elseif($accountInfo->account_type_id==2)
        <li><a href="{{route('teacher-sign-out')}}" class="btn btn-danger">Đăng xuất</a></li>
        @elseif($accountInfo->account_type_id==3)
        <li><a href="{{route('student-sign-out')}}" class="btn btn-danger">Đăng xuất</a></li>
        @endif
        <li class="mb-2 pos-close" onclick="closeInfoOptions();"><a href="#"><i class="fas fa-times "></i></a></li>
    </ul>
</div>
<script>
function showInfoOptions(){
    document.getElementById("info-option").style.display='block';
    document.getElementById("info-option").style.opacity=1;
}
function closeInfoOptions(){
    document.getElementById("info-option").style.display='none';
}
//   document.getElementById("click-join").addEventListener("click", function(event){
//     event.preventDefault()
//   });

</script>