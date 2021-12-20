<head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
@if($accountInfo->account_type_id==1)
    <img src="{{URL::to('/')}}/images/admins/avatar\{{$accountInfo->avatar}}" alt="user" class="avt-user" onclick="showInfoOptions();">
@elseif($accountInfo->account_type_id==2)
    <img src="{{URL::to('/')}}/images/teachers/avatar\{{$accountInfo->avatar}}" alt="user" class="avt-user" onclick="showInfoOptions();">
@elseif($accountInfo->account_type_id==3)
    <img src="{{URL::to('/')}}/images/students/avatar\{{$accountInfo->avatar}}" alt="user" class="avt-user" onclick="showInfoOptions();">
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
</script>