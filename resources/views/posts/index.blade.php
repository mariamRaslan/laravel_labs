@extends('layouts.app')

@section('title')Index @endsection

@section('content')
        <div class="text-center">
            <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($allPosts as $post)
              <tr>
                <th scope="row">1</th>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['posted_by'] }}</td>
                <td>{{ $post['created_at'] }}</td>
                <td>
                    <a href="{{ route('posts.show',[$post['title']]) }}" class="btn btn-primary">View</a>
                    <a href="{{route('posts.edit',[$post['title']])}}" class="btn btn-success">Edite</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
@endsection