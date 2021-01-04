@extends('templates.app', ['title' => 'Edit Post'])

@section('content')
<div class="container">
  <div class="d-flex justify-content-between">
    <div>
      <h4 class="mb-3">Edit New Post</h4>

    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          Form Post
        </div>
        <div class="card-body">
          <form action="{{url('posts/' . $post->slug)}}" method="post">
            @method('put')
            @csrf
            @include('posts.part.form-control')
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection