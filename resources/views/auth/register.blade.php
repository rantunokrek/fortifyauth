@extends('layouts.app')
@section('content')

<div class="row justify-content-md-center">
    <div class="ccc"></div>
    <div class="card p-4 col-4">
      <legend>Register Your Account</legend>
     <form method="post" action="{{route('register')}}">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     
      </div>
         <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Email address</label>
           <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" name="password" class="form-control" id="exampleInputPassword1">
         </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
        </div>
     
         <button type="submit" class="btn btn-primary">Register</button>
       </form>
    </div>
</div>

 
@endsection