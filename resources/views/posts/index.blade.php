@extends('templates.app',['title' => 'Post'])

@section('content')
<div class="container">
  <div class="d-flex justify-content-between">
    <div>
      <h4 class="mb-3">Posts</h4>
    </div>
    <div>
      <a href="{{url('posts/create')}}" class="btn btn-primary">New</a>
    </div>
  </div>
  <div class="row">
    @foreach ($posts as $post)
    <div class="col-lg-4">
      <div class="card mb-3">
        <div class="card-header">
          {{$post->title}}
        </div>
        <div class="card-body">
          <p class="card-text">{{Str::limit($post->content,100)}}</p>
          <a href="{{url('posts/' . $post->slug)}}" class="btn btn-primary">Read more</a>
        </div>
        <div class="card-footer text-muted">
          Published {{$post->created_at->diffForHumans()}}
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-center">
    {{$posts->links()}}
  </div>
</div>
@endsection