@extends('layouts.app')

@section('title') Create @endsection

@section('content')


<div class="card">
 
  <div class="card-header">
    <h5 class="card-title">Post Info</h5>
  </div>
  <div class="card-body">
  <h5 class="card-title">Title:</h5>
    <p class="card-text">{{$post->title}}:</p>
    <h5 class="card-title">Description:</h5>
    <p class="card-text">{{$post->description}}</p>
  </div>

</div>

<div class="card mt-5">
 
  <div class="card-header">
    <h5 class="card-title">Post Creator Info</h5>
  </div>
  <div class="card-body">
  <h5 class="card-title ">Name:-<small class="fw-normal">{{$user->name}}</small></h5>
    <h5 class="card-title">Email:- <small class="fw-normal">{{$user->email}}</small></h5>
    <h5 class="card-title">Created At:- <small class="fw-normal">{{$user->created_at}}</small></h5>
   
  </div>

</div>

@endsection