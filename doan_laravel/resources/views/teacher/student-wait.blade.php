@extends('layouts.app')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ten</th>
        <th scope="col">email</th>
        <th scope="col">chuc nang</th>
    
      </tr>
    </thead>
    <tbody>
        @foreach($infoStudent as $sd)
      <tr>
        <td>{{$sd->name}}</td>
        <td>{{$sd->email}}</td>
        <td>
          <a href="{{route('teacher-add-students-wait',['id'=>$classrooms->id,'student_id'=>$sd->id])}}"><i class="fas fa-check"></i></a>
           <a href="{{route('teacher-remove-students-wait',['id'=>$classrooms->id,'student_id'=>$sd->id])}}"><i class="fas fa-times"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>