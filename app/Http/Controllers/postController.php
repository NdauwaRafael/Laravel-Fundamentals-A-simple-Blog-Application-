<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
      return view('posts.create');
    }

    public function add()
    {
      //Create a new post using the posted data
      $post = new Post;

      $post->title =request('title');
      $post ->content = request('postcontent');
      $post->save();

      return redirect('/posts.show');
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
