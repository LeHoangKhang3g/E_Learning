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
        <td>ss</td>
      </tr>
      @endforeach
    </tbody>
  </table>