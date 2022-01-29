@extends('layouts.app')

@section('title') Create @endsection

@section('content')
<form method="post" action="{{ route('posts.update',1) }}">
@csrf  

@method('PUT')

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$title}}">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>  
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select class="form-control">
                    <option value="1">ahmed</option>
                    <option value="2">mohamed</option>
                </select>
            </div>
            
            <button class="btn btn-success">Update Post</button>
        </form>
@endsection