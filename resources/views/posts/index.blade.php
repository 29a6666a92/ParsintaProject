@extends('templates.app')
@section('title','Home')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h2 class="mb-3">Posts</h2>
      @foreach ($posts as $post)
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
      @endforeach

      {{$posts->links()}}

    </div>
  </div>
</div>
@endsection