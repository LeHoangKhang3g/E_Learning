@extends('layouts.app')
<div class="container mt-5">
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Danh sách sinh viên</a>
      <form class="d-flex" method="POST" action="{{route('teacher-add-students',['id'=> $classrooms->id])}}">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Thêm sinh viên" aria-label="Thêm sinh viên" style="width: 350px" 
        name="add_students">
        <button class="btn btn-outline-success" type="submit">Thêm</button>
      </form>
    </div>
  </nav>
  {{-- <div class="row text-center">
    <h2>Danh sách sinh viên</h2>
   
  </div> --}}
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
         {{-- <a href="{{route('teacher-remove-student',['id'=>$classrooms->id,'student_id'=>$sd->id])}}"><i class="fas fa-times btn btn-danger"></i></a>  --}}
         <a href="{{route('teacher-remove-student',['id'=>$classrooms->id,'student_id'=>$sd->id])}}"
          class="confirmation"><i class="fas fa-times btn btn-danger"></i></a>

        </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  @if (session('error'))
          <div class="alert alert-danger" style="color: black">
    {{ session('error') }}
              </div>
            @endif
         @if (session('success'))
      <div class="alert alert-success" style="color: black">
{{ session('success') }}
     </div>
  @endif

</div>
<script>
    var msg = '{{Session::get('jsAlert')}}';
  var exist = '{{Session::has('jsAlert')}}';
  if(exist){
    alert(msg);
  }
</script>
<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Bạn có chắc chắn muốn xóa?');
    });
</script>