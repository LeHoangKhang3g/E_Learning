{{-- {{$classroom->code}}
{{$infoTeacher->name}} --}}
@extends('layouts.app')
<div class="container mt-5">
<div class="row d-flex text-center">
    <h1>{{$classroom->class_name}}</h1>
</div>
<div class="row text-center">
    <div class="col-6">
        <div>
            <span><i class="fas fa-user-tie btn icon-detail-class"></i></span>
            <span>{{$infoTeacher->name}}</span>
        </div>
    </div>
    <div class="col-6">
        <div>
            <span>{{$classroom->code}}</span>
        </div>
    </div>
</div>
</div>