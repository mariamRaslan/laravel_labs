@extends('layouts.app')

@section('title')Index @endsection

@section('content')
        <div class="text-center">
            <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($allPosts as $post)
              <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ isset($post->user) ? $post->user->name : 'Not Found' }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">View</a>
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">Edite</a>
                    <!-- <a href="{{route('posts.destroy',$post->id)}}" class="btn btn-danger">Delete</a> -->
                    <form method="POST" action="{{route('posts.destroy',$post->id)}}">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                    
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
<div class="mt-5">
          <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
@endsection