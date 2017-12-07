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
      # code...
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
