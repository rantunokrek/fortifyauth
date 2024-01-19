@extends('layouts.app')
@section('content')

<div class="row justify-content-md-center">
 
    <div class="card p-4 col-4">
      <legend>Welcome to my home page</legend>
      <h2>{{ Auth::user()->name }}</h2>

    </div>
</div>

 
@endsection