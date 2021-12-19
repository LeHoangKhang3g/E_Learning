@if($accountInfo->account_type_id==1)
    <img src="{{URL::to('/')}}/images/admins/avatar\{{$accountInfo->avatar}}" alt="user" class="avt-user">
@elseif($accountInfo->account_type_id==2)
    <img src="{{URL::to('/')}}/images/teachers/avatar\{{$accountInfo->avatar}}" alt="user" class="avt-user">
@elseif($accountInfo->account_type_id==3)
    <img src="{{URL::to('/')}}/images/students/avatar\{{$accountInfo->avatar}}" alt="user" class="avt-user">
@endif