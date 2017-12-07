<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postController extends Controller
{
    public function index()
    {
      return view('posts.index');
    }

    public function create()
    {
      return view('posts.create');
    }

    public function add()
    {
      //Validating posted data
        $this->validate(request(), [
          'title' =>'required|max:3',
          'postcontent' =>'required|max:600'
        ]);
      //Create a new post using the posted data
      $post = new Post;
      $post->title =request('title');
      $post ->postcontent = request('postcontent');
      $post->save();
      return redirect('/posts/show');
    }

    public function view()
    {
      return view('posts.show');
    }

    public function update()
    {
      # code...
    }

    public function delete()
    {
      # code...
    }


}
