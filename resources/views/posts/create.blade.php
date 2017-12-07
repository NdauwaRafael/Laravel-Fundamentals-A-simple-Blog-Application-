@extends('layouts.main')
@section('content')
  <h4>Creating a Post</h4>
  <hr/>
  <form method="post" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Enter Post Title</label>
      <input type="text" class="form-control" name="title"  aria-describedby="emailHelp" placeholder="Enter post Title">
    </div>
    <div class="form-group">
      <label>Post Content</label>
      <textarea class="form-control" name="postcontent" rows="8"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Publish Post</button>
  </form>
@endsection
