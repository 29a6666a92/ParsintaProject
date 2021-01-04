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
          <form action="{{url('posts')}}" method="post" autocomplete="off">
            @csrf
            @include('posts.part.form-control',['submit' => 'Create'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection