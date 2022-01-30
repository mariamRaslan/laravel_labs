@extends('layouts.app')

@section('title') Create @endsection

@section('content')
@foreach ($post as $post)

@php $id=$post->id ;
     $title=$post->title;
     $description=$post->description;
     

@endphp

@endforeach
<form method="post" action="{{ route('posts.update',$id) }}">
@csrf  

@method('PUT')

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="{{$title}}" >
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$description}}</textarea>  
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select name="post_creator" class="form-control">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <button class="btn btn-success">Update Post</button>
        </form>
@endsection