@extends('index')

@section('sign-in')

<div id="overlay">
  <div class="form-signin position-absolute top-50 start-50 translate-middle">
    <form action="{{route('admin-post-send-email-teacher',['id'=>$id, 'email'=>$email])}}" method="POST">    
      <div class="text-end">
        <a href="{{route('index')}}">
            <i class="fas fa-times" style="font-size: 25px"></i>
        </a>
      </div>
      <div style="margin-top:-20px">
        <span class="gradient">E-Learning CKC</span>
      </div>
      @csrf
      <p><i class="title-signin">EMAIL: {{$email}}</i></p>
      <div class="mb-3 text-start">
        <label for="exampleInputEmail1" class="form-label ">Subject</label>
        <input type="text" name="subject"class="form-control" placeholder="Enter subject" value="" required>
      
      </div>
      <div class="mb-3 text-start">
        <label for="exampleInputEmail1" class="form-label ">Title</label>
        <input type="text" name="title"class="form-control" placeholder="Enter title" value="" required>
      
      </div>
      <div class="mb-3 text-start">
        <label for="exampleInputEmail1" class="form-label ">Body</label>
        <textarea type="text" rows="4" cols="40" name="body"class="form-control" placeholder="Enter body" value="" required>
        </textarea>
      
      </div>


   
      <button type="submit" class="btn btn-success mt-3">Gửi email</button>
    </form>
  </div>
</div>
    

@endsection