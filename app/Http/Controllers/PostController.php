<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    { $allPosts = Post::paginate(3); //to retrieve all records

        return view('posts.index', [
            'allPosts' => $allPosts
        ]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }
    public function destroy($id){
        $deleted = Post::where('id', $id)->delete();
        return redirect()->route('posts.index');
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->all();


        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
           
        ]);
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
         $post = Post::find($id);  //query in db select * from posts where id = $postId
         $user_id=$post->user_id;
         $user =User::find($user_id);
      
       return view('posts.show',[ 'post' => $post,'user' =>$user]);
       
    }

    public function edit($id)
    {
        $post=Post::all()->where('id',$id);
        //query in db select * from posts where id = $postId
        $users = User::all();
        return view('posts.edit',[
            'post' => $post,'users' => $users
        ]);
    }
    public function update($id,StorePostRequest $request)
    {   
        
        $data = $request->all();
         Post::where('id',$id)
        ->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
           ]);
        return redirect()->route('posts.index');
    }

   
    
}