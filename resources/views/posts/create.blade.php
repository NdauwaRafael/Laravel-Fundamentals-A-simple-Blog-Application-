@extends('layouts.main')
@section('content')
  <h4>Creating a Post</h4>
  <hr/>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Enter Post Title</label>
      <input type="text" class="form-control" name="title"  aria-describedby="emailHelp" placeholder="Enter post Title">
    </div>
    <div class="form-group">
      <label>Post Content</label>
      <textarea class="form-control" name="postcontent" rows="8"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
