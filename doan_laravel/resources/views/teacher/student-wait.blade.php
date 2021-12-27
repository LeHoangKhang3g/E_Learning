@extends('layouts.app')
<div class="container mt-5">
  <div class="row text-center">
    <h2>Danh sách sinh viên chờ phê duyệt</h2>
  </div>
  <table class="table table-striped">
    <thead>
      <tr class="">
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
      @foreach($infoStudent as $sd)
      <tr style="vertical-align: middle;">
        <td>{{$sd->name}}</td>
        <td>{{$sd->email}}</td>
        <td>
          <a href="{{route('teacher-add-students-wait',['id'=>$classrooms->id,'student_id'=>$sd->id])}}"><i class="fas fa-check btn btn-success"></i></a>
           <a href="{{route('teacher-remove-students-wait',['id'=>$classrooms->id,'student_id'=>$sd->id])}}"><i class="fas fa-times btn btn-danger"></i></a>
        </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
