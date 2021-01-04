@extends('templates.app', ['title' => 'New Post'])

@section('content')
<div class="container">
  <div class="d-flex justify-content-between">
    <div>
      <h4 class="mb-3">Add New Post</h4>

    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          Form Post
        </div>
        <div class="card-body">
          <form action="{{url('posts')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{old('title')}}">
              @error('title')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="content">Content</label>
              <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                value="{{old('content')}}">
              @error('content')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection