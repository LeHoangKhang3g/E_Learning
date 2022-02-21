@extends('layouts.app')
<h1>QUan ly loai bai dang</h1>
<form action="{{route('post-add-post-type',['id'=> $classrooms->id])}}" method="POST">
    {{-- <form action="{{route('xl-them-moi-khoa')}}" method="POST"> --}}
    @csrf
    
    <table>
    
        <tr>
            <th>
                Loai bai dang 1
            </th>
            <td>
                <input type="text" name="name" required>
            </td>
        </tr>
        <tr>
            <th>
              
            </th>
            <td>
               <button type="submit">Save</button>
            </td>
        </tr>
    </table>
    </form>
    <h1>Danh sach Khoa</h1>

<table border="1">
    <tr>
 
        <th>
            Ten Khoa
        </th>

    </tr>
   @forelse($dsPostType as $ds)
    <tr>
       
        <td>{{$ds->name}}</td>

    </tr>
  @empty
  <tr ><td colspan="5">Empty</td></tr>
    @endforelse
</table>